<?php
if($_COOKIE["User"]==""){
    echo "Please Login";
    exit();
}
echo "Welcome : ".$_COOKIE["User"];
?>
<html>
    <br>
    <a href="logout_cookie.php">Logout</a> and Back to first page
</html>