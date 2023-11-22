<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
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

    <!-- Slick Slider CDN Link -->
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"
    />

    <!-- Swipper Slider CND Link -->
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper@7/swiper-bundle.min.css"
    />
    <!-- style.css Link -->
    <link rel="stylesheet" href="../css/common.css" />
    <link rel="stylesheet" href="../css/home.css" />
    <title>Footwer - Trang chủ</title>
  </head>

  <body>
    <!-- Background -->
    <div id="particles-js"></div>
    <!-- Phần Header -->
    <?php
        include_once("../View/vHeader.php");
    ?>
    <?php
      // Lấy giờ hiện tại với định dạng giờ và phút
      $currentTime = date('H:i');

      // Kiểm tra xem có phải là 22 giờ không
      if ($currentTime == '22:00') {
          // Trả về mã JavaScript để hiển thị alert
          echo "<script>alert('Nhắc nhở: Đến lúc nhập dữ liệu vào Điều Biết Ơn, Tích Cảm Xúc, Thói Quen !');</script>";
      }
      ?>


     <!-- Phần sidebar bên trái -->
    <div class="sidebar sidebar-lefts">
      <div class="boxicon light-button">
        <ion-icon name="sunny-outline"></ion-icon>
      </div>
      <div class="boxicon dark-button">
        <ion-icon name="moon-outline"></ion-icon>
      </div>
    </div>
    <!-- Phần Hero -->
    <section class="hero">
      <div class="banner">
          <div class="opacity"></div>
          <div class="desc">
          
    
          </div>
      </div>
    </section>
    <!-- Phần label -->
    <!-- Phần Banner -->
    <section class="image">
      <img src="../img/home/banner.webp" alt="" />
      <div class="opacity"></div>
      <div class="desc">
        <h1 style="color:darkorange">Cân bằng giữa Công việc và Cuộc sống</h1>
        <h2 style="color:darkolivegreen" >Làm việc ÍT HƠN những Hiệu QUẢ hơn</h2>
        <ul><li><a href="" onclick="loadding()"></a>Đăng ký</li></ul>

      </div>
    </section>
    <!-- Phần Review -->
    <section class="review">
      <h1 class="heading">Khách hàng lựa chọn chúng tôi</h1>
      <div class="swiper review-slider">

        <div class="swiper-wrapper">
           <div class="swiper-slide slide" data-name="food-1">
            <i class="fas fa-quote-right"></i>
            <div class="user">
              <img src="./images/HOME/Cus1.jpg" alt="" />
              <h3>Jiso</h3>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
              </div>
              <div class="comment">
               Với The Weird, chúng tôi có một không gian làm việc cực kỳ hiệu quả và gắn kết.
               Các thành viên làm việc thoải mái với tinh thần trách nhiệm - luôn sẵn sàng giúp đỡ
               để chúng tôi hoàn thành công việc một cách tốt nhất 
              </div>
            </div>
           </div>
           <div class="swiper-slide slide" data-name="food-2">
            <i class="fas fa-quote-right"></i>
            <div class="user">
              <img src="./images/HOME/Cus2.jpg" alt="" />
              <h3>Lisa</h3>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
              </div>
              <div class="comment">
                Tôi cần một phần mềm mang lại đủ thông tin mà tôi muốn biết, không quá nhiều không quá ít. Phần lớn các phần mềm có quá nhiều chức năng mà tôi không sử dụng tới, nhưng lại thiếu những chức năng đơn giản mà tôi cần sử dụng cho công việc. Tictop mang lại đúng điều tôi cần, tiết kiệm thời gian và năng lượng của tôi.              </div>
            </div>
           </div>
           <div class="swiper-slide slide" data-name="food-3">
            <i class="fas fa-quote-right"></i>

    <!-- Phần Newsletter -->
    <section class="newsletter">
      <div class="container">
        <div class="opacity"></div>
        <div class="wrapper">
          <div class="left-wrapper">
            <h1 class="heading">Đăng ký nhận bản tin</h1>
          </div>
          <div class="right-wrapper">
            <div class="input">
              <input type="email" placeholder="Nhập email của bạn..." />
              <button>Đăng ký</button>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Phần Footer -->
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
      <div class="footer-logo">
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

    <!-- Jquery CDN -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="../js/countdown.js"></script>
    
    <script
      type="text/javascript"
      src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"
    ></script>

    <!-- Slick Slider CDN -->
    <script
      type="text/javascript"
      src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"
    ></script>
    
    <!-- Swiper Slider CDN Link -->
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <script src="../js/common.js" type="module"></script>
    <script src="../js/home.js" type="module"></script>
    <script src="./JS/particles.js"></script>
    <script src="../js/particlesScript.js"></script>
    <script src="../js/slickslider.js"></script>
    <script src="../js/swipperslider.js"></script>
  </body>
</html>
