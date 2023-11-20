<div class="row mb div-form">
    <div class="boxleft mr">
        <div class="row mb">
            <div class="title">Quên Mật Khẩu</div>
            <div class="row content formtk">
                <form action="index.php?act=quenmk" method="post">
                    <div class="row mb10">
                        Email
                        <input type="email" name="email">
                    </div>
                    <div class="row mb10">
                        <input type="submit" value="Gửi" name="guiemail">
                        <input type="reset" value="Nhập Lại">
                    </div>
                </form>
                <h2 class="thongbao">
                    <?php
                        if(isset($thongbao)&&($thongbao!="")){
                            echo $thongbao;
                        }
                    ?>
                </h2>
            </div>
        </div>
    </div>
    
</div>