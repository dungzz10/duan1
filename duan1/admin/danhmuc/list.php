<div class="row">
            <div class="row fromtitle "><h1>Quản Lý Loại Hàng</h1></div>
            <div class="row fromcontent">
                <form action="#" method="post">
                    <div class="row mb10 fromds">
                       <table>
                        <tr>
                            <th></th>
                            <th>Mã Loại</th>
                            <th>Tên Loại</th>
                            <th></th>
                        </tr>
                        <?php
                           foreach ($listdanhmuc as $danhmuc){
                            extract($danhmuc);
                            $suadm="index.php?act=suadm&id=".$id;
                            $xoadm="index.php?act=xoadm&id=".$id;
                            echo '<tr>
                            <td><input type="checkbox"></td>
                            <td>'.$id.'</td>
                            <td>'.$name.'</td>
                            <td> <a href="'.$suadm.'"> <input type="button" value="Sửa"></a> <a href="'.$xoadm.'"><input type="button" value="Xoá"></a></td>
                                </tr>'; 
                           }
                        ?>
                       </table>
                    </div>
                    <div class="row mb10">
                        <input type="button" value="Chọn Tất Cả">
                        <input type="button" value="Bỏ Chọn Tất Cả">
                        <input type="button" value="Xoá Các Mục Đã Chọn">
                       <a href="index.php?act=adddm"> <input type="button" value="Nhập Thêm"></a>
                    </div>
                </form>
            </div>
        </div>
        