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
    <title>Biểu đồ cảm xúc</title>
    
    <!-- Tải Chart.js từ CDN -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <style>
        /* CSS để đặt kích thước của canvas */
        #myLineChart {
            width: 80vw !important; /* 80% chiều rộng của màn hình */
            height: 80vh !important; /* 60% chiều cao của màn hình */
        }
    </style>
  </head>

  <body>
    <!-- ===============================================================Bắt đầu phần Header -->
    <?php
        include_once("../View/vHeader.php");
    ?>

    <?php
        include_once 'classck.php';
        $p = new classck();
        if(isset($_REQUEST["btncamxuc"])){
          $camxuc = $_REQUEST["camxuc"];
          $p->themcamxuc($camxuc,date("Y-m-d"));
          // $p->themcamxuc('vui','2023-11-16');
          echo "<script> window.location='Camxuc.php'</script>";
        }
    ?>
    <section class="content" style="height: 20%;">
      <center><h1 style="color: rgb(80, 191, 255);"></h1>
        <td>
          <th>Tháng</th><input type="month" id="txtMonth">
        </td>
      </center><br>

    </section>
    <?php
        $p->kiemtracx();
    ?>
      <center>
        <h5 style="margin-top:50px;font-size:37px;">Xem biểu đồ cảm xúc</h5>
        <form action="thongke.php" method="get">
          <span style="font-size:20px">Tháng</span>
          <select name="thang" style="font-size:20px">
                <?php
                // Tạo các option cho select
                for ($thang = 1; $thang <= 12; $thang++) {
                    $thanghientai = intval($_REQUEST["thang"]);
                    echo '<option value="' . $thang . '">' . $thang . '</option>';
                }
                ?>
          </select>
          <input type="submit" style="padding:10px;font-size:20px" name="btnxemtk" value="Xem thống kê">
        </form>
      </center>
  </body>
</html>