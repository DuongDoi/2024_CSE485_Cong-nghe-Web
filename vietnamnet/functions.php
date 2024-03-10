<?php
function getAllCategories(){

    //QUY TRÌNH TRUY VẤN DỮ LIỆU: CRUD
    //C: Create (Thêm mới)
    //R: Read (Xem dữ liệu)
    //U: Update (Cập nhật dữ liệu)
    //D: Delete (Xóa dữ liệu)
//B1. Kết nối Database Server (MySQL)
    $conn = mysqli_connect('localhost', 'root', '', 'vietnamnet');
    if (!$conn) {
        die('Không thể kết nối');
    }
//B2. Viết câu SQL
    $sql = "SELECT * FROM categories";
//B3. Thực thi câu SQL
    $result = mysqli_query($conn, $sql);
//B4. Tạo mảng chứa dữ liệu
    $categories = [];
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $categories[] = $row;
        }
    }
//B5. Đóng kết nối
    mysqli_close($conn);
//    echo '<pre>';
//    print_r($categories);
//    echo '</pre>';
    return $categories;
}

function getTopNews(){

    //QUY TRÌNH TRUY VẤN DỮ LIỆU: CRUD
    //C: Create (Thêm mới)
    //R: Read (Xem dữ liệu)
    //U: Update (Cập nhật dữ liệu)
    //D: Delete (Xóa dữ liệu)
//B1. Kết nối Database Server (MySQL)
    $conn = mysqli_connect('localhost', 'root', '', 'vietnamnet');
    if (!$conn) {
        die('Không thể kết nối');
    }
//B2. Viết câu SQL
    $sql = "SELECT * FROM news ORDER BY news_id ASC LIMIT 4";
//B3. Thực thi câu SQL
    $result = mysqli_query($conn, $sql);
//B4. Tạo mảng chứa dữ liệu
    $news = [];
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $news[] = $row;
        }
    }
//B5. Đóng kết nối
    mysqli_close($conn);
//    echo '<pre>';
//    print_r($categories);
//    echo '</pre>';
    return $news;
}


function getAllUsers(){

    //QUY TRÌNH TRUY VẤN DỮ LIỆU: CRUD
    //C: Create (Thêm mới)
    //R: Read (Xem dữ liệu)
    //U: Update (Cập nhật dữ liệu)
    //D: Delete (Xóa dữ liệu)
//B1. Kết nối Database Server (MySQL)
    $conn = mysqli_connect('localhost', 'root', '', 'vietnamnet');
    if (!$conn) {
        die('Không thể kết nối');
    }

    
    
//B2. Viết câu SQL
    $sql = "SELECT * FROM users order by username ASC limit 0,3";
//B3. Thực thi câu SQL
    $result = mysqli_query($conn, $sql);
//B4. Tạo mảng chứa dữ liệu
    $users = [];
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $users[] = $row;
        }
    }

//B5. Đóng kết nối
    mysqli_close($conn);
//    echo '<pre>';
//    print_r($categories);
//    echo '</pre>';
    return $users;
}

function addNewUser($username, $password, $email){
    //Luu vao CSDL
    //B1. Kết nối Database Server (MySQL)
    $conn = mysqli_connect('localhost', 'root', '', 'vietnamnet');
    if (!$conn) {
        die('Không thể kết nối');
    }
    $sql_check = "Select * from users where username='$username' or email = '$email'";
    $result = mysqli_query($conn, $sql_check);
    if(mysqli_num_rows($result) > 0){
        return false;
    }
    else{
        $sql_insert = "insert into users(username, password, email) values('$username','$password','$email')";
        $result = mysqli_query($conn, $sql_insert);
        if($result){
            return true;
        }
        else{
            return false;
        }
    } 
}
