<?php
require_once '../functions.php';
$categories = getAllCategories();
//echo '<pre>';
//print_r($categories);
//echo '</pre>';
$news = getTopNews();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vietnamnet Portal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
</head>
<body>
<div class="container-fluid">
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand text-primary" href="#">Vietnamnet</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="../index.php">Trang chủ</a>
                        </li>
                        <?php foreach($categories as $cate): ?>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><?php echo $cate['category_name']; ?></a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="container-fluid mt-2">
            <div class="row">
                    <div class="col-md">
                        <h3 class="text-center text-primary text-uppercase">Đăng nhập</h3>
                        <?php if(isset($_GET['err'])): ?>
                            <div class="alert alert-success" role="alert">
                                <?= $_GET['err'] ?>
                            </div>
                        <?php endif; ?>
                        <form action="login_process.php" method="post">
                            <div class="mb-3">
                                <lable for="username" class="form-label">Tên người dùng</lable>
                                <input type="text" class="form-control" id="username" name="username">
                            </div>
                            <div class="mb-3">
                                <lable for="password" class="form-label">Mật khẩu</lable>
                                <input type="password" class="form-control" id="password" name="password">
                            </div>
                        
                            <button type="submit" class="btn btn-primary">Đăng nhập</button>
                        </form>
                    </div>
            </div>    
        </div>
    </main>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>