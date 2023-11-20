<?php
if (is_array($sanpham)) {
    extract($sanpham);
}
$hinhpath = "../upload/" . $img;
if (is_file($hinhpath)) {
    $hinh = "<img src='" . $hinhpath . "' height='80'>";
} else {
    $hinh = "Không có ảnh";
}
$id = $_GET['id'];
$sanpham = loadone_sanpham($id);
$iddm = $sanpham['iddm'];
?>
<div class="row">
    <div class="row fromtitle ">
        <h1>Cập Nhật Loại Hàng Hoá</h1>
    </div>
    <div class="row fromcontent">
        <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
            <div class="row mb10">
                <select name="iddm">
                    <option value="0" selected>Tất cả</option>
                    <?php
                    foreach ($listdanhmuc as $danhmuc) {
                        extract($danhmuc);
                        if ($danhmuc['id'] == $iddm)
                            $s = "selected";
                        else
                            $s = "";
                        echo '<option value="' . $danhmuc['id'] . '" ' . $s . '>' . $danhmuc['name'] . '</option>';
                    }
                    ?>

                </select>
            </div>
            <div class="row mb10">
                Tên Sản Phẩm <br>
                <input type="text" name="tensp" value="<?= $sanpham['name'] ?>">
            </div>
            <div class="row mb10">
                Giá <br>
                <input type="text" name="giasp" value="<?= $sanpham['price'] ?>">
            </div>
            <div class="row mb10">
                Hình <br>
                <input type="file" name="hinh">
                <?= $hinh ?>
            </div>
            <div class="row mb10">
                Mô Tả <br>
                <textarea name="mota" cols="30" rows="10"><?= $sanpham['mota'] ?></textarea>
            </div>
            <div class="row mb10">
                <input type="hidden" name="id" value="<?= $sanpham['id'] ?>">
                <input type="submit" name="capnhat" value="Cập Nhật">
                <input type="reset" value="Nhập Lại">
                <a href="index.php?act=listsp"> <input type="button" value="Danh Sách"></a>
            </div>
            <?php
            if (isset($thongbao) && ($thongbao != ""))
                // echo $thongbao;
            ?>
        </form>
    </div>
</div>
</div>