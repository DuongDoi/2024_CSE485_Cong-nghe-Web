<?php
    require_once '../functions.php';
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $username = $_POST['username'];
        $password1 = $_POST['password1'];
        $password2 = $_POST['password2'];
        $email = $_POST['email'];
    }

    if(empty($username) || empty($password1) || empty($password2) || empty($email)){
        echo "Dữ liệu không hợp lệ";
        exit;
    }
    if(empty($password1) != empty($password2)){
        echo "Mật khẩu không trùng khớp";
        exit;
    }
    //Mã hóa mật khẩu
    $password = password_hash($password1, PASSWORD_DEFAULT);
    $result = addNewUser($username, $password, $email);
    if($result){
        header("Location: users.php?msg=Thêm mới thành công!");
    }
    else{
        header("Location: user_add.php?err= Thêm thất bại! ".$username." hoặc ". $email ." đã tồn tại."); 
    }
?>