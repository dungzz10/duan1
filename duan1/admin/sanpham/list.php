<div class="row">
            <div class="row fromtitle mb "><h1>Quản Lý Loại Hàng</h1></div>
            <form action="index.php?act=listsp" method="post">
                            <input type="text" name="kyw">
                            <select name="iddm">
                                <option value="0" selected>Tất cả</option>
                                <?php
                                    foreach ($listdanhmuc as $danhmuc){
                                        extract($danhmuc);
                                        echo '<option value="'.$id.'">'.$name.'</option>';
                                    }
                                ?>
                                
                            </select>
                            <input type="submit" name="listok" value="GO">
                        </form>
            <div class="row fromcontent">
                <form action="#" method="post">
                    <div class="row mb10 fromds">
                        
                       <table>
                        <tr>
                            <th></th>
                            <th>Mã Loại</th>
                            <th>Tên Sản Phẩm</th>
                            <th>Hình</th>
                            <th>Giá</th>
                            <th>Lượt Xem</th>
                            <th></th>
                        </tr>
                        <?php
                           foreach ($listsanpham as $sanpham){
                            extract($sanpham);
                            $suasp="index.php?act=suasp&id=".$id;
                            $xoasp="index.php?act=xoasp&id=".$id;
                            $hinhpath="../upload/".$img;
                            if(is_file( $hinhpath)){
                                $hinh="<img src='".$hinhpath."' height='80'>";
                            }else{
                                $hinh="Không có ảnh";
                            }
                            echo '<tr>
                            <td><input type="checkbox"></td>
                            <td>'.$id.'</td>
                            <td>'.$name.'</td>
                            <td>'.$hinh.'</td>
                            <td>'.$price.'</td>
                            <td>'.$luotxem.'</td>
                            <td> <a href="'.$suasp.'"> <input type="button" value="Sửa"></a> <a href="'.$xoasp.'"><input type="button" value="Xoá"></a></td>
                                </tr>'; 
                           }
                        ?>
                       </table>
                    </div>
                    <div class="row mb10">
                        <input type="button" value="Chọn Tất Cả">
                        <input type="button" value="Bỏ Chọn Tất Cả">
                        <input type="button" value="Xoá Các Mục Đã Chọn">
                       <a href="index.php?act=addsp"> <input type="button" value="Nhập Thêm"></a>
                    </div>
                </form>
            </div>
        </div>