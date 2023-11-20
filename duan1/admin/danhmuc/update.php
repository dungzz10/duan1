<?php
    if(is_array($dm)){
        extract($dm);
    }
?>
<div class="row">
            <div class="row fromtitle "><h1>Cập Nhật Loại Hàng Hoá</h1></div>
            <div class="row fromcontent">
                <form action="index.php?act=updatedm" method="post">
                    <div class="row mb10">
                        Mã Loại <br>
                        <input type="text" name="maloai" disabled>
                    </div>
                    <div class="row mb10">
                        Tên Loại <br>
                        <input type="text" name="tenloai" value="<?php if(isset($name)&&($name!="")) echo $name; ?>">
                    </div>
                    <div class="row mb10">
                        <input type="hidden" name="id" value="<?php if(isset($id)&&($id>0)) echo $id; ?>">
                        <input type="submit" name="capnhat" value="CẬP NHẬT">
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