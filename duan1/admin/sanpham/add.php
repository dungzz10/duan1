<div class="row">
            <div class="row fromtitle "><h1>Thêm Mới Sản Phẩm</h1></div>
            <div class="row fromcontent">
                <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
                    <div class="row mb10">
                        Danh Mục <br>
                        <select name="iddm">
                            <?php
                                foreach ($listdanhmuc as $danhmuc){
                                    extract($danhmuc);
                                    echo '<option value="'.$id.'">'.$name.'</option>';
                                }
                            ?>
                            
                        </select>
                    </div>
                    <div class="row mb10">
                        Tên Sản Phẩm <br>
                        <input type="text" name="tensp">
                    </div>
                    <div class="row mb10">
                        Giá <br>
                        <input type="text" name="giasp">
                    </div>
                    <div class="row mb10">
                        Hình <br>
                        <input type="file" name="hinh" >
                    </div>
                    <div class="row mb10">
                        Mô Tả <br>
                        <textarea name="mota" cols="30" rows="10"></textarea>
                    </div>
                    <div class="row mb10">
                        <input type="submit" name="themmoi" value="THÊM MỚI">
                        <input type="reset" value="NHẬP LẠI">
                       <a href="index.php?act=listsp"> <input type="button" value="DANH SÁCH"></a>
                    </div>
                    <?php
                        if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                    ?>
                </form>
            </div>
        </div>
    </div>