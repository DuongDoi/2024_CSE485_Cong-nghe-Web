<?php
    $user = [
        "id" => 1,
        "name" => "Antonio Fenice",
        "email" => "afenice@canamerarealty.com",
        "phNum" => "343-459-4350",
        "comName" => "CanAmera Realty",
        "avatar" => "uploads/default_avatar.png" // Initial avatar URL
       ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h2>Account Setttings</h2>
    </div>

    <div class="content">
        <div class="menu">
            <?php
                        $navItems = [
                            "Profile",
                            "Password",
                            "Integrations",
                            "Billing"
                        ];

                        foreach ($navItems as $item) {
                            echo "<li><a href='#'>$item</a></li>";
                        }
            ?>
        </div>
        <div class="pro">
            <form action="update_profile.php" method="post" enctype="multipart/form-data">
                <button type="submit">Change My Avatar</button><br>
                <label for="name">Full Name</label><br>
                <input type="text" name="name" value="<?php echo $user['name']; ?>" 
                required>
                <br>
                <label for="email">Email</label><br>
                <input type="email" name="email" value="<?php echo $user['email']; ?>" 
                disabled>
                <br>
                <label for="phNum">Phone Number</label><br>
                <input type="text" name="phNum" value="<?php echo $user['phNum']; ?>">
                <br>
                <label for="comName">Company Name</label><br>
                <input type="text" name="comName" value="<?php echo $user['comName']; ?>">
            </form>
        </div>
    </div>
    

</body>
</html>