<?php
setcookie("User","",time()-3600);
//setcookie("Status","",time()-3600);
//setcookie("UserID","",time()-3600);
header("location:login_cookie.php");
?>