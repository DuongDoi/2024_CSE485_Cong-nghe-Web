<?php
    require_once '../functions.php';
    $users = getAllUsers();
    $itemsPerPage = 4;
    $currentPage = isset($_GET["page"]) ? ($_GET["page"]) :1;
    $totalPages = ceil(count($users) / $itemsPerPage);
    $currentPageItems = array_slice($users, ($currentPage-1)*$itemsPerPage, $itemsPerPage);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý người dùng</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    <div class = "container-fluid">
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
                                <a class="nav-link" href="dashboard.php">Trang chủ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Quản lý danh mục</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Quản lý tin tức</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="users.php">Quản lý người dùng</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <a href="profile.php" class="text-decoration-none text-success">Tài khoản: ngocdiu</a>
                        <a href="logout.php" class="btn btn-danger">Thoát</a>
                    </div>
                </div>
            </nav>
        </header>
        <main class="mt-3">
            <div class="container-fluid mt-2">
                <div class="row">
                    <div class="col-md">
                        <h3 class="text-center text-primary mb-3">DANH SÁCH TÀI KHOẢN NGƯỜI DÙNG</h3>
                        <?php if(isset($_GET['msg'])): ?>
                            <div class="alert alert-success" role="alert">
                                <?= $_GET['msg'] ?>
                            </div>
                        <?php endif; ?>
                        <a href="user_add.php" class="btn btn-primary">Thêm mới</a>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Số TT</th>
                                    <th scope="col">Tên đăng nhập</th>
                                    <th scope="col">Email</th>
                                    <th scope="col" colspan="4" class="text-center">Thao tác</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i=0;?>
                                <?php foreach ($users as $key => $user): ?>
                                <tr>
                                    <th scope="row"><?= ++$i ?></th>
                                    <td><?= $user['username']?></td>
                                    <td><?= $user['email']?></td>
                                    <th scope="col">
                                        <a href="user_detail.php?id=<?= $user['user_id'] ?>" class="btn btn-primary">
                                            <i class="bi bi-eye-fill"></i>
                                        </a>
                                    </th>
                                    <th scope="col">
                                        <a href="user_edit.php?id=<?= $user['user_id'] ?>" class="btn btn-warning">
                                            <i class="bi bi-pencil-square"></i>
                                        </a>
                                    </th>
                                    <th scope="col">
                                        <a href="user_del.php?id=<?= $user['user_id'] ?>" class="btn btn-danger">
                                            <i class="bi bi-trash3-fill"></i>
                                        </a>
                                    </th>
                                    <th scope="col">
                                        <a href="user_pass_change.php?id=<?= $user['user_id'] ?>" class="btn btn-success">
                                            <i class="bi bi-key-fill"></i>
                                        </a>
                                    </th>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <?php if($currentPage>1): ?>
                                    <li class="page-item"><a class="page-link" href="?page=<?php echo $currentPage-1; ?>">Trước</a></li>
                                <?php endif; ?>

                                <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                                    <?php if ($i == $currentPage): ?>
                                        <li class="page-item"><a class="page-link" href="?page"><?php echo $i; ?></a></li>
                                    <?php else: ?>
                                        <li class="page-item"><a class="page-link" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                                    <?php endif; ?>
                                <?php endfor; ?>

                                <?php if ($currentPage < $totalPages): ?>
                                    <li class="page-item"><a class="page-link" href="?page=<?php echo $currentPage + 1; ?>">Sau</a></li>
                                <?php endif; ?>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </main>
        <footer>

        </footer>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>