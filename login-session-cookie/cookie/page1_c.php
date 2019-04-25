<?php
echo 'welcome to page1';
setcookie("username","AA",time()+60);
setcookie("password","BB",time()+60);
echo '<a href="page2_c.php">page2</a>';
?>