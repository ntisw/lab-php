<?php
session_start();
if($_SESSION["User"]==""){
    echo "Please Login";
    exit();
}
echo "Welcome : ".$_SESSION["User"];
?>

<html>
    <br>
    <a href="logout_session.php">Logout</a> and Back to first page
</html>