<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="icon"
      type="image/png"
      sizes="32x32"
      href="../img/logo/zyro-image.png"
    />
    <!-- Font Awesome CDN Link  -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    />
    <!-- AOS CDN Link -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />

    <!-- Slick Slider CDN -->
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"
    />
    <link rel="stylesheet" href="../css/about_us.css" />
    <link rel="stylesheet" href="../css/common.css" />
    <title> Thông tin về chúng tôi</title>
  </head>

  <body>
    <!-- ===============================================================Bắt đầu phần Header -->
    <?php
        include_once("../View/vHeader.php");
    ?>

    <!-- ===============================================================Kết thúc phần Header -->

    <section class="banner">
      <img src="../img/home/download (1).webp" alt="" />
      <img src="../img/home/download.webp" alt="" />
      <div class="slogan">
        <p>"Để thay đổi thói quen, hãy lập một quyết định lý trí, rồi thực hiện hành vi mới."</p>
        <div class="author">
          <span>Châm ngôn</span>
          </div> -->
        </div>
      </div>
    </section>



    <section class="address">
      <h1 class="heading">Địa chỉ của chúng tôi</h1>
      <div class="wrapper">
        <div class="map">
          <iframe
            width="100%"
            height="100%"
            frameborder="0"
            scrolling="no"
            marginheight="0"
            marginwidth="0"
            src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=1%20Grafton%20St12%20Nguy%E1%BB%85n%20V%C4%83n%20B%E1%BA%A3o,%20Ph%C6%B0%E1%BB%9Dng%204,%20Qu%E1%BA%ADn%20G%C3%B2%20V%E1%BA%A5p,%20TP.%20H%E1%BB%93%20Ch%C3%AD%20Minh.reet,%20Dublin,%20Ireland+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"
            ><a href="https://www.gps.ie/marine-gps/">navigation gps</a></iframe >
        </div>
        <div class="desc">
          <div class="box">
            <h2><ion-icon name="home-outline"></ion-icon>Địa chỉ:</h2>
            <span
              >12 Nguyễn Văn Bảo, Phường 4, Quận Gò Vấp, TP. Hồ Chí Minh</span >
          </div>
          <div class="box">
            <h2><ion-icon name="call-outline"></ion-icon>Điện thoại:</h2>
            <span>0283.8940 390</span>
          </div>
          <div class="box">
            <h2><ion-icon name="mail-outline"></ion-icon>Email:</h2>
            <span>dhcn@iuh.edu.vn</span>
          </div>
        </div>
      </div>
      <div class="social-wrapper">
        <div class="parent-box">
          <div class="box">
            <ion-icon name="logo-facebook"></ion-icon>
            <span>Facebook</span>
          </div>
          <div class="box">
            <ion-icon name="logo-instagram"></ion-icon>
            <span>instagram</span>
          </div>
        </div>
        <div class="parent-box">
          <div class="box">
            <ion-icon name="logo-linkedin"></ion-icon>
            <span>linkedin</span>
          </div>
          <div class="box">
            <ion-icon name="logo-twitter"></ion-icon>
            <span>twitter</span>
          </div>
        </div>
      </div>
    </section>

    <!-- ===============================================================Bắt đầu phần Footer -->
    <footer class="footer">
      <div class="container">
        <div class="boxfoot">
          <div class="social">
            <h2>Theo dõi chúng tôi</h2>
            <div class="line"></div>
            <ul>
              <li>
                <span> <ion-icon name="logo-facebook"></ion-icon></span>
                Facebook
              </li>
              <li>
                <span><ion-icon name="logo-instagram"></ion-icon></span>
                Instagram
              </li>
              <li>
                <span> <ion-icon name="logo-linkedin"></ion-icon></span> Linked
                In
              </li>
              <li>
                <span><ion-icon name="logo-twitter"></ion-icon></span> Twitter
              </li>
            </ul>
          </div>

          <div class="info">
            <h2>Thông tin</h2>
            <div class="line"></div>
            <li>
              <div class="wrapper">
                <ion-icon name="home-outline"></ion-icon>
                <span>Địa chỉ: </span>
              </div>
              <span
                >12 Nguyễn Văn Bảo, Phường 4, Quận Gò Vấp, TP. Hồ Chí Minh</span
              >
            </li>
            <li>
              <div class="wrapper">
                <ion-icon name="call-outline"></ion-icon>
                <span>Điện thoại: </span>
              </div>
              <span>0283.8940.390</span>
            </li>
            <li>
              <div class="wrapper">
                <ion-icon name="mail-outline"></ion-icon>
                <span>Email: </span>
              </div>
              <span>dhcn@iuh.edu.vn</span>
            </li>
          </div>
        </div>
        <div class="boxfoot">
          <div class="policy">
            <h2>Nội dung chính sách</h2>
            <div class="line"></div>
            <ul>
              <li>Chính sách bảo mật</li>
              <li>Điều khoản dịch vụ</li>
              <li>Chính sách thành viên</li>
              <li>Chính sách dành cho khách hàng</li>
              <li>Chính sách bảo mật</li>
            </ul>
          </div>
        </div>
          <div class="email">
            <h2>Đăng ký nhận tin</h2>
            <div class="line"></div>
            <div class="input">
              <input type="text" placeholder="Nhập email của bạn..." />
              <div class="send">
                <ion-icon name="paper-plane-outline"></ion-icon>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="header-logo footer-logo">
        <img src="../img/logo/zyro-image.png" alt="">
      </div>
    </footer>
    <script>
      function loading() {
        let loadingTem = `<div class="modal-loading">
        <div class="sk-cube-grid">
          <div class="sk-cube sk-cube1"></div>
          <div class="sk-cube sk-cube2"></div>
          <div class="sk-cube sk-cube3"></div>
          <div class="sk-cube sk-cube4"></div>
          <div class="sk-cube sk-cube5"></div>
          <div class="sk-cube sk-cube6"></div>
          <div class="sk-cube sk-cube7"></div>
          <div class="sk-cube sk-cube8"></div>
          <div class="sk-cube sk-cube9"></div>
        </div>
      </div>`;
        document.body.insertAdjacentHTML("beforeend", loadingTem);
        document.body.addEventListener("click", function (event) {
          event.preventDefault();

          // Vì event của thẻ a, nên phải chạy window.open trước cho khỏi bị delay
          setTimeout(function () {
            document.querySelector(".modal-loading").remove();
          }, 1500);
          setTimeout(function () {
            window.open(event.target.href, "_self");
          }, 1450);
        });
      }
    </script>
    <!-- ===============================================================Kết thúc phần Footer -->
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
      integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>

    <script src="../js/slickslider.js"></script>
    <script src="../js/about_us.js"></script>
    <script src="../js/common.js" type="module"></script>
    <!-- Font Ionic CDN Link  -->
    <script
      type="module"
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
    ></script>

    <!-- AOS CDN Link -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>

    <!-- Slick Slider CDN -->
    <script
      type="text/javascript"
      src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"
    ></script>
  </body>
</html>
