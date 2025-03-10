<?php
session_start();
if(!isset($_COOKIE['role']) || $_COOKIE['role'] != 'admin') {
    header('Location: index.php');
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Page</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <script src="script.js" defer></script>
    <style>
        body{
            background-color: black;
        }
.alert {
  padding: 20px;
  background-color: #f44336;
  color: white;
}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}
</style>
</head>
<body>
<div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <strong>Bahaya!</strong> Login Mencurigakan.
</div><br>
    <div class="container">
        <h2>Welcome, Admin!</h2>
        <p>Congratulations! Here's your flag: ASTROCTF{s1n1_ku_k1sss_s4mp3_pu4ssssssssssssssssssssssssssss}</p>
        <a href="logout.php">Logout</a>
    </div>
</body>
</html>
