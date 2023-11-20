<div class="row mb div-form">
    <div class="boxleft mr">
        <div class="row mb">
            <div class="title">Đăng Ký Thành Viên</div>
            <div class="row content formtk">
                <form action="index.php?act=dangky" method="post">
                    <div class="row mb10">
                        Email
                        <input type="email" name="email">
                    </div>
                    <div class="row mb10">
                        Tên Đăng Nhập
                        <input type="text" name="user" >
                    </div>
                    <div class="row mb10">
                        Mật Khẩu
                        <input type="password" name="pass" >
                    </div>
                    <div class="row mb10">
                        <input type="submit" value="Đăng Ký" name="dangky">
                        <input type="reset" value="Nhập Lại">
                    </div>
                </form>
                <h2 class="thongbao">
                    <?php
                        if(isset($thongbao)&&($thongbao!="")){
                            echo $thongbao;
                        }
                        if(isset($err)&&($err!="")){
                            echo $err;
                        }
                        if(isset($error)&&($error!="")){
                            echo $error;
                        }

                    ?>
                </h2>
            </div>
        </div>
    </div>
    
</div>