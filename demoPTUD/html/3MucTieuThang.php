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
    <title>3 mục tiêu tháng</title>
  </head>

  <body>
    <!-- ===============================================================Bắt đầu phần Header -->
    <?php
        include_once("../View/vHeader.php");
    ?>
     <?php
              include_once 'classck01.php';
              $p = new classck();
              if(isset($_REQUEST["btnthem"])){
                $than = $_REQUEST["than"];
                $tam = $_REQUEST["tam"];
                $tri = $_REQUEST["tri"];

                $p->them3muctieuthang($than,$tam,$tri);
                echo "<script>alert('Bạn đã nhập 3 mục tiêu tháng.')</script>";

                echo "<script> window.location='3MucTieuThang.php'</script>";
              }elseif(isset($_REQUEST["btnxemtk"])){
                $thangok = intval($_REQUEST["thang"]);
                $row = $p-> xem3muctieuthang($thangok);
            }
    ?>


<section class="content">

  <div class="form">
    <br>
    <center><h1 style="text-align: center;">Chủ đề tháng <?php echo date('m'); ?></h1>
    <tr style="font-size: 2.0rem;"><input type="text" id="txtCD" placeholder="Tên chủ đề"></tr>
    <form action="#" method="get">
          <span style="font-size:20px">Tháng</span>
          <select name="thang" style="font-size:20px">
                <?php
                // Tạo các option cho select
                $thangok=date("m");
                for ($thang = 1; $thang <= 12; $thang++) {
                  if($thang==$thangok){
                    echo '<option selected value="' . $thang . '">' . $thang . '</option>';
                  }else{
                    echo '<option value="' . $thang . '">' . $thang . '</option>';
                  }
                }
                ?>
          </select>
          <input type="submit" style="padding:10px;font-size:20px" name="btnxemtk" value="Xem">
        </form>
              
    </center><br>
    <form action="#" method="get">
      <div class="note">
        <h2>Mục Tiêu 1</h2><input value="<?php echo $row["muctieu1"]; ?>" type="text"required name="than" id="txtThan" placeholder="Điền vào"><br>
      </div>
      <div class="note">
        <h2>Mục tiêu 2</h2>
        <input type="text" value="<?php echo $row["muctieu2"]; ?>" name="tam" required id="txttam" placeholder="Điền vào"><br>
      </div>
      <div class="note">
        <h2>Mục tiêu 3</h2>
        <input type="text" value="<?php echo $row["muctieu3"]; ?>" name="tri" required id="txttri" placeholder="Điền vào"><br>
      </div>
      <div class="submit">
        <input type="submit" value="Lưu" name="btnthem" style="background-color: rgb(60, 112, 126); margin: 20px;width: 65px; height: 40px;">
        <input type="reset" value="Viết Lại" style="background-color: rgb(60, 112, 126);margin: 20px;width: 65px; height: 40px;">
        
      </div> 
      
  </div>
  

   
</form>
</section>
<script>
    // Lấy tháng và năm hiện tại
    var today = new Date();
    var currentMonth = today.getMonth() + 1; // Tháng bắt đầu từ 0, nên cần cộng thêm 1
    var currentYear = today.getFullYear();

    // Định dạng tháng và năm thành chuỗi "YYYY-MM"
    var formattedDate = currentYear + '-' + (currentMonth < 10 ? '0' : '') + currentMonth;

    // Đặt giá trị mặc định cho trường input month
    document.getElementById('txtMonth').value = formattedDate;
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
