<?php
    class classck{

        // kết nối database
        function ketnoi(){
            $conn = mysql_connect("localhost","abc","123456");
            if(!$conn){
                echo "không thể knoi";
            }else{
                mysql_select_db("muctieucanhan");
                mysql_set_charset('utf8');
                return $conn;
            }
        }

        function themmtthang($noiDung,$mucDoUTien,$ghiChu){
            $this->ketnoi();
            $thoiGian = date('Y-m-d H:i:s');

            $kq=mysql_query("insert into viecquantrongcanlam (noiDung ,
                                                    mucDoUTien ,
                                                    ghiChu, thoiGian)
                            VALUES (
                                '$noiDung', '$mucDoUTien', '0', '$thoiGian'
                                );");
            if($kq){
                return $kq;
            }else{
                return false;
            }
        }

        function xuatmtthang(){
            $this->ketnoi();

            // Lấy  ngày tháng và năm hiện tại
            $currentMonth = intval(date('m'));
            $currentYear = intval(date('Y'));
            $currentDay = intval(date('d'));

            

            $result =mysql_query("SELECT * FROM viecquantrongcanlam WHERE Day(thoiGian)=$currentDay AND MONTH(thoiGian) = $currentMonth AND YEAR(thoiGian) = $currentYear");
            if (mysql_num_rows($result) > 0) {
                echo "<h2 class='mt-4' style='padding-top:10px'> Việc Quan Trọng Cần Làm Trong : $currentDay- $currentMonth - $currentYear</h2>";
                while ($row=mysql_fetch_assoc($result)) {
                    echo "<div class='habit-card' style='font-size: 19px; padding: 10px'>";
                    echo "<p style='color:red'>NỘI DUNG : " . $row['noiDung'] . "</p>";
                    echo "<p>NGÀY THÊM: " . $row['thoiGian'] . "</p>";
                    echo "<p>Mức Độ Ưu Tiên: " . $row['mucDoUTien'] . "</p>";
                    
                    $ghiChu_string = $row['ghiChu'];
                    // Tách chuỗi thành mảng các phần tử dựa trên khoảng trắng
                    $ghiChu_array = explode(' ', $ghiChu_string);

                    // Mảng để lưu trữ các số nguyên
                    $numeric_array = array();

                    // Chuyển đổi mỗi phần tử thành số nguyên và thêm vào mảng
                    foreach ($ghiChu_array as $element) {
                        $numeric_array[] = intval($element);
                    }
                    // Duyệt qua mảng
                    $flash = 0;
                    foreach ($numeric_array as $value) {
                        // Kiểm tra nếu giá trị bằng 15
                        if ($value == $currentday = intval(date('d'))) {
                            $flash = $flash + 1;
                            break;
                        }
                    }
                    
                    if($flash == 0){
                        // Thêm form để đánh dấu hoàn thành
                        echo "<form action='#' method='post'>";
                        echo "<input type='hidden' name='habit_id' value='" . $row['id'] . "'>";
                        echo "<button type='submit' name='hoanthanh' class='btn-submit-custom' style='padding: 5px;'>Hoàn thành</button>";
                        echo "</form>";   

                    }else{
                        echo "<p><b>Thói quen được hoàn thành trong hôm nay ngày: $currentDay- $currentMonth - $currentYear</b></p>";

                    }
            
                    echo "</div>";
                }
            } else {
                echo "<p class='mt-4'>Không có thói quen nào cho hôm nay: $currentDay- $currentMonth - $currentYear.</p>";
            }
        }

        function addDateht($date,$idmt){
            $this->ketnoi();

            
            $currentDateValue = $row['ghiChu'];

            // Nối thêm nội dung mới vào giá trị hiện tại
            $newDateValue = $currentDateValue . ' ' . $date;
            // cập nhật ngày nào đã hoàn thành
            $kq=mysql_query("update viecquantrongcanlam set ghiChu = ' $newDateValue' where id = $idmt");
            

            if($kq){
                return $kq;
            }else{
                return false;
            }
        }
        function khen(){
            $this->ketnoi();
            // Lấy tháng và năm hiện tại
            $currentMonth = intval(date('m'));
            $currentYear = intval(date('Y'));
            $currentDay = intval(date('d'));


            $cplResult = mysql_query("SELECT noiDung FROM viecquantrongcanlam
                                    WHERE Day(thoiGian)= $currentDay AND MONTH(thoiGian) = $currentMonth AND YEAR(thoiGian) = $currentYear");
            
            

        }

        // kết việc quan trọng 


        // 1 tháng nhìn lại
        function themnhinlai($than,$tam,$tri){
            $this->ketnoi();
            $thoiGian = date('Y-m-d');

            $kq=mysql_query("insert into nhinlai (than ,
                                                    tam,
                                                    tri, thoiGian)
                            VALUES (
                                '$than', '$tam', '$tri', '$thoiGian'
                                );");
            if($kq){
                return $kq;
            }else{
                return false;
            }
        }

        // bắt đầu 3 mục tiêu tháng 
        function muctieuthang($thang){
            $this->ketnoi();

        
            // Lấy tháng từ tham số GET
            $selectedMonth = intval($thang);

            // Truy vấn dữ liệu từ bảng "muctieu" cho tháng được chọn
            $sql = "SELECT * FROM nhinlai WHERE MONTH(thoiGian) = $selectedMonth";
            $result =mysql_query($sql);

            if (mysql_num_rows($result) > 0) {
                // Hiển thị dữ liệu
                $rows = array();
                while($row=mysql_fetch_assoc($result)) {

                        $rows[] = $row;

                    // Lấy dòng cuối cùng từ mảng

                }
                $lastRow = end($rows);
                return $lastRow;
            } else {
                // Thông báo nếu không có dữ liệu cho tháng này
                echo "Không có dữ liệu cho tháng này";
            }

        }
        // thêm dữ liệu vào bảng của điều biết ơn
        function dieubieton($noiDung, $thoiGian){
            $this->ketnoi();
            $thoiGian = date('Y-m-d');

            $kq=mysql_query("insert into dieubieton (noiDung,
                                                    thoiGian)
                            VALUES (
                                '$noiDung', '$thoiGian'
                                );");
            if($kq){
                return $kq;
            }else{
                return false;
            }
        }
        function kiemtrathangnhap(){
            $this->ketnoi();
            $ngayHienTai = date("Y-m-d");
            $kq=mysql_query("select * from dieubieton WHERE thoiGian = '$ngayHienTai'");
            if (mysql_num_rows($kq) > 0) {
                $row = mysql_fetch_assoc($kq);
                echo '<center>';
                echo '    <h5 style="margin-top:50px;font-size:37px;">Điều biết ơn hôm nay của tôi là : '.$row["noiDung"].'</h5>';
                echo '</center>';
            }else{
            echo '        <form action="#" method="get">';
            echo '        <div class="note">';
            echo '        <h2>Nội Dung</h2>';
            echo '        <input type="text"required name="noiDung" id="txtThan" placeholder="Điền vào"><br>';
            echo '        </div>';
            echo '        ';
            echo '        ';
            echo '        <div class="submit">';
            echo '        <input type="submit" value="Lưu" name="btnthem" style="background-color: rgb(60, 112, 126); margin: 20px;width: 65px; height: 40px;">';
            echo '        <input type="reset" value="Viết Lại" style="background-color: rgb(60, 112, 126);margin: 20px;width: 65px; height: 40px;">';
            echo '        ';
            echo '        </div> ';
            echo '        ';
            echo '    </div>';
            echo '    ';
            echo '';
            echo '    ';
            echo '</form>';
            }
        }
        function hienthidieubieton($thang){
            $currentMonth = intval(date('m'));
            $currentYear = intval(date('Y'));
            // Truy vấn dữ liệu từ bảng
        
                $this->ketnoi();
                $ngayHienTai = date("Y-m-d");
                $kq=mysql_query("SELECT thoiGian, noiDung FROM dieubieton where MONTH(thoiGian) = $thang AND YEAR(thoiGian) = $currentYear");
                if (mysql_num_rows($kq) > 0) {
                    echo '<center>';
                    echo '        <table border="1">';
                    echo '        <h1>Danh sách điều biết ơn</h1>';
                    echo '';
                    echo '        <table border="1">';
                    echo '<tr>';
                    echo '    <th>Số Ngày</th>';
                    echo '    <th>Nội Dung</th>';
                    echo '</tr>';
                    while ($row=mysql_fetch_assoc($kq)) {
                   
                        echo '<tr>';
                        echo '    <td>'. $row['thoiGian'] .'</td> ';
                        echo '    <td>'. $row['noiDung'] .'</td>';
                        echo '</tr>';
                    }
                    echo '</table>';
                    echo '</center>';
            }
        }

        function them3muctieuthang($than,$tam,$tri){
            $this->ketnoi();
            $thoiGian = date('Y-m-d');

            $kq=mysql_query("insert into 3muctieuthang (muctieu1 ,
                                                    muctieu2,
                                                    muctieu3, thoigian)
                            VALUES (
                                '$than', '$tam', '$tri', '$thoiGian'
                                );");
            if($kq){
                return $kq;
            }else{
                return false;
            }
        }

        function xem3muctieuthang($thang){
            $this->ketnoi();

        
            // Lấy tháng từ tham số GET
            $selectedMonth = intval($thang);

            // Truy vấn dữ liệu từ bảng "muctieu" cho tháng được chọn
            $sql = "SELECT * FROM 3muctieuthang WHERE MONTH(thoiGian) = $selectedMonth";
            $result =mysql_query($sql);

            if (mysql_num_rows($result) > 0) {
                // Hiển thị dữ liệu
                $rows = array();
                while($row=mysql_fetch_assoc($result)) {

                        $rows[] = $row;

                    // Lấy dòng cuối cùng từ mảng

                }
                $lastRow = end($rows);
                return $lastRow;
            } else {
                // Thông báo nếu không có dữ liệu cho tháng này
                echo "Không có dữ liệu cho tháng này";
            }
        }
        
        
    }
?>