<div class="row mb">
    <div class="title">Tài Khoản</div>
    <div class="content formtk">
        <?php
        if (isset($_SESSION['user'])) {
            extract($_SESSION['user']);
            ?>
            <div class="row mb10">
                Xin Chào <br>
                <?= $user ?>
            </div>
            <div class="row mb10">
                <li>
                    <a href="index.php?act=quenmk">Quên Mật Khẩu</a>
                </li>
                <li>
                    <a href="index.php?act=edit_taikhoan">Cập Nhật Tài Khoản</a>
                </li>
                <?php if($role == 1){ ?>
                <li>
                    <a href="admin/index.php">Đăng Nhập Admin</a>
                </li>
                <?php }?>
                <li>
                    <a href="index.php?act=thoat">Thoát</a>
                </li>
            </div>
            <?php
        } else {
            ?>
            <form action="index.php?act=dangnhap" method="post">
                <div class="row mb10">
                    Tên Đăng Nhập <br>
                    <input type="text" name="user">
                </div>
                <div class="row mb10">
                    Mật Khẩu <br>
                    <input type="password" name="pass">
                </div>
                <div class="row mb10">
                    <input type="checkbox">Ghi Nhớ Tài Khoản?
                </div>
                <div class="row mb10">
                    <input type="submit" value="Đăng Nhập" name="dangnhap">
                </div>
            </form>
            <li><a href="index.php?act=quenmk">Quên Mật Khẩu</a></li>
            <li><a href="index.php?act=dangky">Đăng Ký Thành Viên</a></li>
            <?php
        }
        ?>
    </div>
</div>