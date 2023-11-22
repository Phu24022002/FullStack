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
    <link rel="stylesheet" href="../css/tinhnang.css" />
    <link rel="stylesheet" href="../css/common.css" />
    <title>Việc quan trọng cần làm mỗi ngày</title>
  </head>

  <body>
    <!-- ===============================================================Bắt đầu phần Header -->
    <?php
        include_once("../View/vHeader.php");
    ?>
     
      <?php
              include_once 'classck01.php';
              $p = new classck();
              if(isset($_REQUEST["btnxemtk"])){
                  $thangok = intval($_REQUEST["thang"]);
                  $row = $p-> muctieuthang($thangok);
              }
      

              
    ?>


<section class="content">
<div class="form">
<section class="content" style="height: 15%;">
      <center><h1 style="color: rgb(80, 191, 255);"></h1>

      </center><br>

    </section>
    <form action="#" method="get">
          <span style="font-size:20px">Tháng</span>
          <select name="thang" style="font-size:20px">
                <?php
                // Tạo các option cho select
                for ($thang = 1; $thang <= 12; $thang++) {
                  $thanghientai = intval($_REQUEST["thang"]);
                  if($thang==$thanghientai){
                    echo '<option selected value="' . $thang . '">' . $thang . '</option>';
                  }else{
                    echo '<option value="' . $thang . '">' . $thang . '</option>';
                  }
                }
                ?>
          </select>
          <input type="submit" style="padding:10px;font-size:20px" name="btnxemtk" value="Xem">
        </form>
    <?php
      $thangxem = $_REQUEST["thang"];
      $p->hienthidieubieton($thangxem);
    ?>
</section>
<script>
        // Hàm được gọi khi người dùng chọn một tháng
        function getMonthData() {
            // Lấy giá trị của tháng đã chọn
            var selectedMonth = document.getElementById("selectMonth").value;

            // Tạo yêu cầu AJAX để gửi thông tin tháng đã chọn đến server
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
                // Kiểm tra xem yêu cầu đã hoàn thành và thành công chưa
                if (xhr.readyState == 4 && xhr.status == 200) {
                    // Hiển thị kết quả từ server
                    document.getElementById("result").innerHTML = xhr.responseText;
                }
            };
            xhr.open("GET", "getData.php?month=" + selectedMonth, true);
            xhr.send();
        }
    </script>

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
