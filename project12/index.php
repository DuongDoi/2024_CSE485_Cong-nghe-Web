<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai Tap 2</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
 <ul class="ulnav"> 
        
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
            "LIÊN HỆ"
        ];
        echo"<li class='linav'><a class='fa fa-home' href='#'></a></li>";
        foreach ($navItems as $item) {
            echo "<li class='linav'><a href='#'>$item</a></li>";
        }
        ?>
    </ul>  


</body>
</html>
