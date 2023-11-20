<?php
    session_start();
    ob_start();
if(!isset($_SESSION['cart'])) $_SESSION['cart']= array();
if (isset($_POST['addtocart']) && ($_POST['addtocart'])) {
    $id = $_POST['id'];
    $tensp = $_POST['tensp'];
    $img = $_POST['img'];
    $gia = $_POST['gia'];
    $sl  =1;
    // tạo mãn
    $sp = array($id, $tensp,$img,$gia,$sl);
    // echo var_dump($objuser);
    // lưu seesion
    array_push($_SESSION['cart'],$sp);
    // chuyển trang
    header('location: index.php?act=viewcart');
}
?>