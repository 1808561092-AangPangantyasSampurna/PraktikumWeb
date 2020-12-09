<?php
    require('function.php');
    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        if (checkLogin($username, $password)==true) {
            header("Location: index.php");
        } else {
            $error = true;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/style.css">
</head>

<body>
    <div class="container container-login">
        <h1>Login Form</h1>
        <?php if (isset($error)) {
    echo("<p>Username/Password salah</p>");
} ?>
        <div class="form-container">
            <form action="" method="POST" class="form">
                <label for="username" class="col-form-label">Username</label>
                <input type="text" class="form-control" name="username" id="username" autocomplete="off">
                <label for="password" class="col-form-label">Password</label>
                <input type="password" class="form-control" name="password" id="password" autocomplete="off">
                <button type="submit" name="login">Login</button>
            </form>
        </div>

    </div>
</body>

</html>