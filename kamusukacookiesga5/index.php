<?php
session_start();

// Cek cookie terlebih dahulu
if(isset($_COOKIE['role'])) {
    if($_COOKIE['role'] == 'admin') {
        header('Location: admin.php');
        exit();
    } elseif($_COOKIE['role'] == 'user') {
        header('Location: user.php');
        exit();
    }
}

if(isset($_POST['username']) && isset($_POST['password'])) {
    if($_POST['username'] == 'user' && $_POST['password'] == 'Admin#1234') {
        setcookie('role', 'user', time() + 3600, '/');
        header('Location: user.php');
        exit();
    } else {
        $error = "Username atau password salah!";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <script src="script.js" defer></script>
    <style>
        body {
            background-color: black;
            background-size: cover;
            background-position: center;
        }
        h2 {
            text-align: center;
            color: white;
        }
        form {
            margin-top: 100px;
            text-align: center;
        }
       .error{
        color: red;
            font-weight: bold;
            margin-bottom: 10px;
 
       }
    </style>
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <?php if(isset($error)) echo "<p class='error'>$error</p>"; ?>
        <img src="../img/x.png" alt="" style="width: 400px; height:auto; text-align:center;">
        <form method="post">
            Username: <input type="text" name="username" placeholder="user"><br>
            Password: <input type="password" name="password" placeholder="Nqzva#1234"><br>
            <input type="submit" value="Login">
        </form>
    </div>
</body>
</html>
