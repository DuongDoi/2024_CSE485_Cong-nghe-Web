<!DOCTYPE html>
<html>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <head>
    </head>
    <body>
        <ul>
            <?php
                $navItems = [
                "GIỚI THIỆU",
                "TIN TỨC & THÔNG BÁO",
                "TUYỂN SINH",
                "ĐÀO TẠO",
                "NGHIÊN CỨU",
                "ĐỐI NGOẠI",
                "VĂN BẢN",
                "SINH VIÊN",
                "LIÊN HỆ"];

                echo "<li><a href = '#' class='fa fa-home' style='font-size:24px'></a></li>";

                foreach ($navItems as $item) {
                    echo "<li><a href='#'>$item</a></li>";
                }
            ?>
        </ul>
    </body>
</html>