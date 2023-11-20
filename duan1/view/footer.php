<footer class="foo">
      <div class="div-fo">
        <div class="div-fo-1">
          <ul>
            <h3>Thông Tin</h3>
            <li>Giới thiệu công ty </li>
            <li>Tuyển dụng nhân sự</li>
            <li>Chính sách bán hàng</li>
            <li>Hệ thống các của hàng</li>
          </ul>
        </div>
        <div class="div-fo-1">
          <ul>
            <h3>MOTORROCK - MÔTÔ PKL</h3>
            <li>568 Nguyễn Văn LInh ,P phường Hưng lợi ,<br> A Bình Tân </li>
            <li>Tel:0938.723.898</li>
            <li>Gmail:shopmoto247@gmail.com</li>
            <li>Website:shopmotosup.vn.com</li>
          </ul>
        </div>
        <div class="div-fo-1">
          <ul>
            <h3>Tin Tức Thị Trường</h3>
            <li>Tin Khuyến mãi </li>
            <li>Giới Thiệu Xe Mới</li>
            <li>Tin Tức Báo Chí</li>
          </ul>
        </div>
      </div>
    </footer>

    <script>
      var index = 1;
      changeImage = function () {
        var imgs = ["back1.jpg", "backmu.jpg", "backmu2.jpg", "tainge.jpg"];
        document.getElementById('img').src = 'img/' + imgs[index];
        index++;
        if (index == 4) {
          index = 0;
        }
      }
      setInterval(changeImage, 2000);
    </script>