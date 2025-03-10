<?php
session_start();
if(!isset($_COOKIE['role']) || $_COOKIE['role'] != 'user') {
    header('Location: index.php');
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>User Page</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <script src="script.js" defer></script>
    <style>
        body {
            background-color: black;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Welcome, (User)!</h2>
        <p>This is the user page. Nothing special here.</p>
        <a href="logout.php">Logout</a>
    </div>
</body>
</html>
