<?php
    $user = [
        "id" => 1,
        "name" => "Antonio Fenice",
        "email" => "afenice@canamerarealty.com",
        "phNum" => "343-459-4350",
        "comName" => "CanAmera Realty",
        "avatar" => "assets/image/avatar1.jpeg" // Initial avatar URL
       ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Settings</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class = "main">
        <div class = "header">
            <h1>Account Setting</h1>
        </div>
        <div class = "content">
                <ul>
                    <?php
                        $navItems = [
                            "Profile",
                            "Password",
                            "Integrations",
                            "Billing"
                        ];

                        foreach ($navItems as $item) {
                            echo "<li><a href='#' >$item</a></li>";
                        }
                    ?>
                </ul>

            <div class = "pro" id = "Profilediv">
                <form action="upload_profile.php" method="post" enctype="multipart/form-data">
                    <div class="imgavt">
                        <?php
                            echo '<img src="' . $user['avatar'] . '" alt="">';
                        ?>
                    </div><br>
                    <input type="file" class="chooseavt" accept="image/*">
                    <br><br>
                    <label for="name">Full Name</label><br><br>
                    <input class="styInput" type="text" name="name" value="<?php echo $user['name']; ?>" required>
                    <br><br>
                    <label for="email">Email</label><br><br>
                    <input class="styInput" type="email" name="email" value="<?php echo $user['email']; ?>" disabled>
                    <br><br>
                    <label for="phNum">Phone Number</label><br><br>
                    <input class="styInput" type="text" name="phNum" value="<?php echo $user['phNum']; ?>">
                    <br><br>
                    <label for="comName">Company Name</label><br><br>
                    <input class="styInput" type="text" name="comName" value="<?php echo $user['comName']; ?>">
                    <br><br>
                    <button type="submit" class="btnUpdate">Update Profile</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>