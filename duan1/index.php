<?php
session_start();
if(!isset($_SESSION['giohang'])){

$_SESSION['giohang'] = array();
}
include 'model/pdo.php';
include "view/style.php";
include "view/style/styledk.php";
 include "view/header.php";
include "global.php";
include "view/sanpham.php";
include 'model/sanpham.php';
include "view/style/styledn.php";

include "model/taikhoan.php";

$spnew = loadall_sanpham_home();

$dstop6 = loadall_sanpham_top6();

if ((isset($_GET['act'])) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case 'sanpham':
            if (isset($_POST['kyw']) && ($_POST['kyw'] != "")) {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = "";
            }
            if (isset($_GET['iddm']) && ($_GET['iddm'] > 0)) {
                $iddm = $_GET['iddm'];
            } else {
                $iddm = 0;
            }
            $dssp = loadall_sanpham($kyw, $iddm);
            $tendm = load_ten_dm($iddm);
            include "view/sanpham.php";
            
            break;
        case 'non':
            include 'view/non.php';
            break;
        case 'quanao':
            include 'view/quanao.php';
            break;
        case 'gangtay':
            include 'view/gangtay.php';
            break;
      
       
        case 'gioithieu':
            include "view/gioithieu.php";
            break;
        case 'lienhe':
            include "view/lienhe.php";
            break;
        default:
            include "view/home.php";
            break;
        case 'dangnhap':
                if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];
                    
                    $checkuser = checkuser($user, $pass);
                    if (is_array($checkuser)) {
                        $_SESSION['user'] = $checkuser;
                        echo "<script>location.href='./'</script>";
                    } else {
                        $thongbao = "Tài Khoản Không Tồn Tại";
                    }
                }
                include "view/dn.php";
                break;
            case 'dangky':
                if (isset($_POST['dangky']) && ($_POST['dangky'])) {
                    $email = $_POST['email'];
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];
                    $err ='';
                    $thongbao = '';
                    $errors = [];
                    $checkemail = checkemail($email);


                    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        $errors[] = "Email không hợp lệ";
                      }

                    if(is_array($checkemail)){
                    $err = "Email đã tồn tại"; 
                    }  
                    if(strlen($user) < 6){
                        $errors[] = "Username tối thiểu 6 ký tự"; 
                      }
                      
                      if(strlen($pass) < 6){
                        $errors[] = "Mật khẩu tối thiểu 6 ký tự";
                      }
                      foreach($errors as $err) {
                        echo $err . '<br/>'; 
                      }

                    $checkuser = checkuser($user,$pass);
                    if(is_array($checkuser)){
                    $err = "Username đã có người sử dụng";
                    } 
                    if(!$err && !$errors ){

                        insert_taikhoan($email, $user, $pass);
                        
                        $thongbao = "Đăng ký thành công!";
                    }
                    if($err){
                        echo $err;
                      }
                      
                      if($thongbao){
                        echo $thongbao; 
                      }
                    
                        
                      
                      
                    
                }
                include "view/taikhoan/dangky.php";
                break;
            case 'edit_taikhoan':
                if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];
                    $email = $_POST['email'];
                    $address = $_POST['address'];
                    $tel = $_POST['tel'];
                    $id = $_POST['id'];
                    update_taikhoan($id, $user, $pass, $email, $address, $tel);
                    $_SESSION['user'] = checkuser($user, $pass);
                    echo "<script>location.href='index.php?act=edit_taikhoan'</script>";
                }
                include "view/taikhoan/edit_taikhoan.php";
                break;
            case 'quenmk':
                if (isset($_POST['guiemail']) && ($_POST['guiemail'])) {
                    $email = $_POST['email'];
                    $checkemail = checkemail($email);
                    if (is_array($checkemail)) {
                        $thongbao = "Mật khẩu của bạn là: " . $checkemail['pass'];
                    } else {
                        $thongbao = "Email không tồn tại";
                    }
    
                }
                include "view/taikhoan/quenmk.php";
                break;
            case 'thoat':
                session_unset();
                echo "<script>location.href='./'</script>";
                break;
            case 'addcart':
                if (isset($_POST['addtocart']) && ($_POST['addtocart'])) {
                    $id =  $_POST['id'];
                    $tensp = $_POST['tensp'];
                    $img = $_POST['img'];
                    $gia = $_POST['gia'];
                    $sl=1;
                    $fg=0;
                    $i=0;
                    //kiem tra san pham co ton tai trong gio hang ko neu co chi can cap nhat so luong 
                    foreach($_SESSION['giohang'] as $item){
                        if($item[1]===$tensp){
                            $slnew = $sl+$item[4];
                            $_SESSION['giohang'][$i][4]=$slnew;
                            $fg=1;
                            break;
                        
                        }
                        $i++;
                    
                    }    
                    
                    if($fg==0){
                        $item = array($id,$tensp,$img,$gia,$sl);
                        $_SESSION['giohang'][]=$item;
                       
                        }
                       

                    //khoi tao mang con truoc khi dua vao gio hang 
                    



                
                
                }
                include "view/viewcart.php";

                break;
                case 'dellcart' :
                    if(isset($_SESSION['giohang'])) {
                        unset($_SESSION['giohang']);
                      }
                    include "view/viewcart.php";

                    break;
    }
} else {
    include "view/home.php";
}
include "view/footer.php";
?>