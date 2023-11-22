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
    <title>Mục tiêu của tháng</title>
    <style>
        /* Custom styles to avoid Bootstrap conflicts */
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .container-custom {
            max-width: 800px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .heading-primary {
            color: #007bff;
        }

        .btn-custom {
            background-color: #28a745;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
        }

        .btn-custom:hover {
            background-color: #218838;
        }

        .form-custom {
            display: none;
            margin-top: 20px;
        }

        .label-custom {
            display: block;
            margin-bottom: 8px;
        }

        .input-custom {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

        .btn-submit-custom {
            background-color: #007bff;
        }

        .btn-submit-custom:hover {
            background-color: #0056b3;
        }
    </style>
    <script>
        function toggleForm() {
            var form = document.getElementById("habitForm");
            form.style.display = (form.style.display === "none" || form.style.display === "") ? "block" : "none";
        }
    </script>
  </head>

  <body>
    <!-- ===============================================================Bắt đầu phần Header -->
    <?php
        include_once("../View/vHeader.php");
    ?>
     



    <?php
              include_once 'classck01.php';
              $p = new classck();
              if(isset($_REQUEST["btnthemcv"])){
                $noiDung = $_REQUEST["noiDung"];
                $mucDoUTien = $_REQUEST["mucDoUTien"];
                $ghiChu = $_REQUEST["ghiChu"];
                
                $p->themmtthang($noiDung, $mucDoUTien, $ghiChu);
                echo "<script> window.location='Viecquantrong.php'</script>";
              }elseif(isset($_REQUEST["hoanthanh"])){
                $habit_id = $_REQUEST["habit_id"];
                $p->addDateht($currentday = date('d'),$habit_id);
                echo "<script> window.location='Viecquantrong.php'</script>";
              }
              $p->khen();
              // khen 
              
    ?>

    <!-- ===============================================================Kết thúc phần Header -->
    <!--Noi dung-->
    <section class="content" style="height: 70%!important">
      <div class="Chude">
        <h1 style="text-align: center;">CÔNG VIỆC CẦN LÀM </h1>
        <tr style="font-size: 2.0rem;"><input type="text" id="txtCD" placeholder="Tên chủ đề"></tr>
      </div>
    </section>

    <!-- bài làm -->
    <div class="container-custom">
      
        <h1 class="heading-primary">THÊM CÔNG VIỆC QUAN TRỌNG TRONG NGÀY</h1>

        <!-- Nút "Thêm Mục Tiêu Tháng" -->
        <button class="btn-custom" onclick="toggleForm()" style='margin-top:10px'>Thêm 1 công việc mới</button>

        <!-- Form Thêm Thói Quen -->
        <div id="habitForm" class="form-custom">
            <form action="#" method="post">
                <label class="label-custom" for="noiDung" style="font-size:18px; margin:6px 0px">Tên nội dung:</label>
                <input class="input-custom" type="text" name="noiDung" required>

                <label class="label-custom" for="mucDoUTien" style="font-size:18px; margin:6px 0px">Mức độ ư tiên:</label>
                <input class="input-custom" type="int" name="mucDoUTien" required>

                <label class="label-custom" for="thoiGian" style="font-size:18px; margin:6px 0px">Ngày Thêm:</label>
                <input class="input-custom" id="dateInput" type="date" name="thoiGian" required>

                <button class="btn-submit-custom" type="submit" name="btnthemcv" style="padding: 5px;">Thêm công việc</button>
            </form>
        </div>
        <div>
          <h1>Danh sách Công Việc Quan Trọng</h1>
        </div>
        <?php
                $p->xuatmtthang();
            ?>
        <!-- Hiển thị danh sách thói quen -->
           
    </div>

    <script>
        // Lấy ngày hiện tại
        var today = new Date().toISOString().split('T')[0];

        // Đặt giá trị mặc định cho trường input date
        document.getElementById('dateInput').value = today;
    </script>
    <!-- end bài làm -->


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