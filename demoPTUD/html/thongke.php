<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biểu đồ đường với cảm xúc</title>
    


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
    <?php
        include_once 'classck.php';
        $p = new classck();
        if(isset($_REQUEST["btnxemtk"])){
            $thang = intval($_REQUEST["thang"]);
            $mangcamxuc = $p -> kyhieucamxuc($thang);
            $mangngay = $p-> ngaychoncamxuc($thang);
        }
    ?>

    <center>
        <h5 style="font-size:20px">Thống kê tháng <?php echo $thang; ?></h5>
        <canvas id="myLineChart"></canvas>
    </center>
    <center>
        <a href="Camxuc.php"><button style="font-size:19px; padding: 6px 10px; ">Trở về</button></a>
    </center>

    <script>
        // Dữ liệu biểu đồ
        var data = {
            // labels: Array.from({ length: 30 }, (_, i) => `Ngày ${i + 1}`),
            labels: <?php echo json_encode($mangngay); ?>,
            datasets: [
                {
                    label: 'Cảm xúc',
                    borderColor: 'rgba(255, 99, 132, 1)',
                    borderWidth: 2,
                    fill: false,
                    data:  <?php echo json_encode($mangcamxuc); ?>// Giá trị tương ứng với cảm xúc theo ngày (1: vui, 2: buồn, 3: hạnh phúc, 4: giận dữ)
                }
            ]
        };

        // Cài đặt các tùy chọn biểu đồ
        var options = {
            scales: {
                y: {
                    ticks: {
                        stepSize: 1, // Bước nhảy của các giá trị trục y
                        max: 4, // Giá trị lớn nhất của trục y
                        min: 1, // Giá trị nhỏ nhất của trục y
                        callback: function(value, index, values) {
                            // Hiển thị giá trị trục y dưới dạng chuỗi
                            switch (value) {
                                case 1:
                                    return '😠';
                                case 2:
                                    return '😢';
                                case 3:
                                    return '😄';
                                case 4:
                                    return '❤️';
                                default:
                                    return '';
                            }
                        }
                    }
                }
            }
        };

        // Lấy thẻ canvas và vẽ biểu đồ đường
        var ctx = document.getElementById('myLineChart').getContext('2d');
        var myLineChart = new Chart(ctx, {
            type: 'line',
            data: data,
            options: options
        });
    </script>

</body>
</html>
