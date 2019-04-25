<?php
session_start();
echo 'cancel session';
$_SESSION['color']='green';
session_destroy();
echo '<a href="page2_s.php">page2</a>'
?>