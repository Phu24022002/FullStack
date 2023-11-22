<?php
    class classck{

        // bắt đầu chức năng mục tiêu tháng
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

        function themmtthang($habit_name,$created_at){
            $this->ketnoi();
            $kq=mysql_query("insert into muctieuthang (habit_name ,
                                                    completed_days ,
                                                    created_at, date_ht)
                            VALUES (
                                '$habit_name', '0', '$created_at', '0'
                                );");
            if($kq){
                return $kq;
            }else{
                return false;
            }
        }

        function xuatmtthang(){
            $this->ketnoi();

            // Lấy tháng và năm hiện tại
            $currentMonth = intval(date('m'));
            $currentYear = intval(date('Y'));

            $result =mysql_query("SELECT * FROM muctieuthang WHERE MONTH(created_at) = $currentMonth AND YEAR(created_at) = $currentYear");
            if (mysql_num_rows($result) > 0) {
                echo "<h2 class='mt-4' style='padding-top:10px'>Danh Sách Thói Quen Tháng $currentMonth - $currentYear</h2>";
                while ($row=mysql_fetch_assoc($result)) {
                    echo "<div class='habit-card' style='font-size: 19px; padding: 10px'>";
                    echo "<p style='color:red'>Thói quen: " . $row['habit_name'] . "</p>";
                    echo "<p>Số ngày đã hoàn thành: " . $row['completed_days'] . "</p>";
                    echo "<p>Ngày thêm: " . $row['created_at'] . "</p>";
                    
                    $date_ht_string = $row['date_ht'];
                    // Tách chuỗi thành mảng các phần tử dựa trên khoảng trắng
                    $date_ht_array = explode(' ', $date_ht_string);

                    // Mảng để lưu trữ các số nguyên
                    $numeric_array = array();

                    // Chuyển đổi mỗi phần tử thành số nguyên và thêm vào mảng
                    foreach ($date_ht_array as $element) {
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
                        echo "<p><b>Thói quen đã hoàn thành trong ngày hôm nay.</b></p>";

                    }
            
                    echo "</div>";
                }
            } else {
                echo "<p class='mt-4'>Không có thói quen nào cho tháng $currentMonth - $currentYear.</p>";
            }
        }

        function addDateht($date,$idmt){
            $this->ketnoi();

            $currentDate = mysql_query("SELECT date_ht, completed_days FROM muctieuthang WHERE id = $idmt");

            $row = mysql_fetch_assoc($currentDate);
            $currentDateValue = $row['date_ht'];

            // Nối thêm nội dung mới vào giá trị hiện tại
            $newDateValue = $currentDateValue . ' ' . $date;
            // cập nhật ngày nào đã hoàn thành
            $kq=mysql_query("update muctieuthang set date_ht = ' $newDateValue' where id = $idmt");
            
            // cập nhật số ngày hoàn thành
            $songay = $row['completed_days'];
            $songaycnhat = $songay +1;
            $kq=mysql_query("update muctieuthang set completed_days = $songaycnhat where id = $idmt");

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

            $cplResult = mysql_query("SELECT completed_days, habit_name FROM muctieuthang 
                                    WHERE MONTH(created_at) = $currentMonth AND YEAR(created_at) = $currentYear");
            
            if ($cplResult) {
                // Duyệt qua kết quả truy vấn
                while ($row = mysql_fetch_assoc($cplResult)) {
                    $completedDays = $row['completed_days'];
                    $muctieu = $row['habit_name'];
            
                    // Kiểm tra điều kiện
                    if ($completedDays >= 20) {
                        echo "<script>alert('Bạn đã hoàn thành mục tiêu $muctieu trong $completedDays ngày. Bạn thật cố gắng!')</script>";
                    }
                }
            } else {
                echo "Lỗi truy vấn: ";
            }

        }


        function xemthongke($thang){
            $this->ketnoi();
            // Lấy tháng và năm hiện tại
            // $currentMonth = intval(date('m'));
            $currentMonth = intval($thang);
            $currentYear = intval(date('Y'));

            $cplResult = mysql_query("SELECT completed_days, habit_name FROM muctieuthang 
                                    WHERE MONTH(created_at) = $currentMonth AND YEAR(created_at) = $currentYear");
            
            if ($cplResult) {
                echo '<center><h2 class="mt-4" style="padding-top:10px; font-size:19px">Thống kê Tháng '.$thang.' - '.$currentYear.'</h2></center>';
                // Duyệt qua kết quả truy vấn
                while ($row = mysql_fetch_assoc($cplResult)) {
                    $completedDays = $row['completed_days'];
                    $muctieu = $row['habit_name'];
                    echo '<div class="habit-card" style="font-size: 19px; padding: 10px">';
                    echo '<p style="color:red">Thói quen: '.$muctieu.' </p>';
                    echo '<p>Số ngày đã hoàn thành: '.$completedDays.' </p>';
                    if ($completedDays < 20) {
                        echo '<p>Bạn còn cần ít nhất '.(20 - $completedDays).' ngày nửa mới hoàn thành mục tiêu tháng</p>';
                        echo '<p><b>Chưa hoàn thành</b></p>';// chỉnh sử lời khuyên
                    }else{
                        echo '<p>Chúc mừng bạn thực hiện mục tiêu này trên 20 ngày</p>';
                        echo '<p><b>Hoàn thành</b></p>';
                    }
                    echo '</div>';
                }
                echo '<center><a  href="Muctieu.php"><button style="font-size:19px; padding: 10px; ">Trở lại</button></a></center>';
            } else {
                echo "Lỗi truy vấn: ";
            }
        }

        // kết thúc chức năng mục tiêu tháng


        // bắt đầu chức năng cảm xúc
        function themcamxuc($camxuc,$ngay){
            $this->ketnoi();
            $kq=mysql_query("insert into camxuc (tencamxuc , ngay)
                            VALUES (
                                '$camxuc', '$ngay');");
            if($kq){
                return $kq;
            }else{
                return false;
            }
        }

        function kiemtracx(){
            $this->ketnoi();
            $ngayHienTai = date("Y-m-d");
            $kq=mysql_query("select * from camxuc WHERE ngay = '$ngayHienTai'");
            if (mysql_num_rows($kq) > 0) {
                $row = mysql_fetch_assoc($kq);
                $icon;
                if($row["tencamxuc"] == "vui"){
                    $icon="&#128512;";
                }elseif($row["tencamxuc"] == "hạnh phúc"){
                    $icon="&#10084;";
                }elseif($row["tencamxuc"] == "buồn"){
                    $icon="&#128577;";
                }else{
                    $icon="&#128545;";
                }
                echo '<center>';
                echo '    <h5 style="margin-top:50px;font-size:37px;">Cảm xúc ngày hôm nay của bạn là '.$icon.' '.$row["tencamxuc"].'</h5>';
                echo '</center>';
            }else{
                echo '<center>';
                echo '    <h5 style="margin-top:50px;font-size:37px;">Chọn cảm xúc hôm nay của bạn</h5>';
                echo '</center>';

                echo '<form action="#" method="get" id="myForm">';
                echo '    <center>';
                echo '        <select name="camxuc" id="iconSelect" style="font-size: 20px; margin: 20px 20px 0 0">';
                echo '            <option value="vui">&#128512; Vui</option>';
                echo '            <option value="hạnh phúc">&#10084; Hạnh phúc</option>';
                echo '            <option value="buồn">&#128577; Buồn</option>';
                echo '            <option value="giận dữ">&#128545; Giận dữ</option>';
                echo '        </select>';
                echo '        <input style="padding: 6px;font-size: 20px;" type="submit" value="OK" name="btncamxuc" onclick="submitForm()">';
                echo '    </center>';
                echo '</form>';
            }
        }

        function kyhieucamxuc($thang){
            $this->ketnoi();
            $currentYear = intval(date('Y'));
            $kq=mysql_query("select * from camxuc WHERE MONTH(ngay) = $thang AND YEAR(ngay) = $currentYear ORDER BY ngay");
            // Mảng để lưu trữ dữ liệu cho biểu đồ
            $dataArray = array();
            if ($kq) {
                // Duyệt qua kết quả truy vấn
                while ($row = mysql_fetch_assoc($kq)) {
                    if($row['tencamxuc']=="giận dữ"){
                        $dataArray[] = 1;
                    }elseif($row['tencamxuc']=="buồn"){
                        $dataArray[] = 2;
                    }elseif($row['tencamxuc']=="vui"){
                        $dataArray[] = 3;
                    }else{
                        $dataArray[] = 4;
                    }
                }

                return $dataArray;
            } else {
                echo "Lỗi truy vấn: ";
            }
        }

        function ngaychoncamxuc($thang){
            $this->ketnoi();
            $currentYear = intval(date('Y'));
            $kq=mysql_query("SELECT DATE_FORMAT( ngay, '%d' ) AS ngay
                            FROM camxuc WHERE MONTH(ngay) = $thang AND YEAR(ngay) = $currentYear
                            ORDER BY ngay");
            // Mảng để lưu trữ dữ liệu cho biểu đồ
            $dataArray = array();
            if ($kq) {
                // Duyệt qua kết quả truy vấn
                while ($row = mysql_fetch_assoc($kq)) {
                    $dataArray[] = 'Ngày '.$row["ngay"];
                }

                return $dataArray;
            } else {
                echo "Lỗi truy vấn: ";
            }
        }

        // kết thúc chưc năng cảm xúc

        
        
    }
?>