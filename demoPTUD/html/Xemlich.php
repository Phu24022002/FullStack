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
    <title>Xem lịch trình</title>
    
    <!-- Tải Chart.js từ CDN -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <style>
        table {
            border-collapse: collapse;
            width: 90%;
            height: 80vh;
        }

        table, th, td {
            border: 1px solid black;
        }

        th, td {
            padding: 10px;
            text-align: center;
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
        <!-- <td>
          <th>Tháng</th><input type="month" id="txtMonth">
        </td> -->
      </center><br>

    </section>
    <center>
        <?php
            include_once 'classck.php';
            $p = new classck();
            // kế nối csdl
             $p->ketnoi();

            //  nếu nhấn save thì kiểm tra
             if (isset($_REQUEST["btnlich"])) {
                $date = $_REQUEST["date"];
                $note = $_REQUEST["notearea"];
            
                // Chèn hoặc cập nhật ghi chú vào cơ sở dữ liệu
                $sql = "INSERT INTO notes (date, note) VALUES ('$date', '$note') ON DUPLICATE KEY UPDATE note = '$note'";
                mysql_query($sql);
                echo "<script> window.location='Xemlich.php'</script>";
            }

            // Lấy thông tin về tháng và năm hiện tại
            $thangHienTai = date('n');
            $namHienTai = date('Y');

            // Tính số ngày trong tháng hiện tại
            $soNgayTrongThang = cal_days_in_month(CAL_GREGORIAN, $thangHienTai, $namHienTai);

            // Lấy ngày đầu tiên của tháng
            $ngayDauTien = date('w', strtotime("1-$thangHienTai-$namHienTai"));

            echo "<h5 style='font-size:20px; margin-top:5px'>Tháng $thangHienTai</h5>";
            // In ra bảng lịch
            echo '<table border="1">';
            echo '<tr><th>Mon</th><th>Tue</th><th>Wed</th><th>Thu</th><th>Fri</th><th>Sat</th><th>Sun</th></tr>';

            // In ra ô trắng cho các ngày trước ngày đầu tiên
            echo '<tr>';
            for ($i = 0; $i < $ngayDauTien; $i++) {
                echo '<td></td>';
            }

            // In ra các ngày trong tháng
            $ngayHienTai = 1;
            while ($ngayHienTai <= $soNgayTrongThang) {
                for ($i = $ngayDauTien; $i < 7 && $ngayHienTai <= $soNgayTrongThang; $i++) {
                    $ngay = sprintf("%04d-%02d-%02d",$namHienTai, $thangHienTai, $ngayHienTai);
                    echo '<td>';
                    echo '<span style="color: red">Ngày ' . $ngayHienTai . '</span>';
                    $noteValue = getNoteForDate($ngay);
                    echo '<form method="get" action="#">';
                    echo '<textarea style="border:1" name="notearea"  rows="3">'.$noteValue.'</textarea>';
                    // echo '<input type="text" name="note" value="' . 'getNoteForDate($conn, $ngay)' . '" />';
                    echo '<br />';
                    echo '<input type="hidden" name="date" value="' . $ngay . '" />';
                    echo '<input style="padding: 2px 4px;" type="submit" name="btnlich" value="Save" />';

                    echo '</form>';

                    echo '</td>';
                    $ngayHienTai++;
                }
                if ($ngayHienTai <= $soNgayTrongThang) {
                    echo '</tr><tr>';
                }
                $ngayDauTien = 0;
            }

            // Điền ô trắng cho các ngày sau cùng của tháng
            while ($i < 7) {
                echo '<td></td>';
                $i++;
            }

            echo '</tr>';
            echo '</table>';

            // Hàm để lấy ghi chú cho một ngày cụ thể
            function getNoteForDate($date) {
                $sql = "SELECT note FROM notes WHERE date = '$date'";
                $result = mysql_query($sql);

                if (mysql_num_rows($result) > 0) {
                        // Lưu trữ tất cả các dòng vào một mảng
                    $rows = array();
                    while ($row =mysql_fetch_assoc($result)) {
                        $rows[] = $row;
                    }

                    // Lấy dòng cuối cùng từ mảng
                    $lastRow = end($rows);

                    return $lastRow["note"];

                } else {
                    return "";
                }
            }
        ?>
    </center>
  </body>
</html>