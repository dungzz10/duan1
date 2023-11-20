<div class="row">
            <div class="row fromtitle "><h1>Thêm Mới Loại Hàng Hoá</h1></div>
            <div class="row fromcontent">
                <form action="index.php?act=adddm" method="post">
                    <div class="row mb10">
                        Mã Loại <br>
                        <input type="text" name="maloai" disabled>
                    </div>
                    <div class="row mb10">
                        Tên Loại <br>
                        <input type="text" name="tenloai">
                    </div>
                    <div class="row mb10">
                        <input type="submit" name="themmoi" value="THÊM MỚI">
                        <input type="reset" value="NHẬP LẠI">
                       <a href="index.php?act=lisdm"> <input type="button" value="DANH SÁCH"></a>
                    </div>
                    <?php
                        if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                    ?>
                </form>
            </div>
        </div>
    </div>