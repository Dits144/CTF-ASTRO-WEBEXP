<?php
setcookie('role', '', time() - 3600, '/');
header('Location: index.php');
exit();
?>