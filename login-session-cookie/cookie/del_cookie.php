<?php
echo 'delete cookie';
setcookie("username","",time()-3600);
setcookie("password","",time()-3600);
echo '<a href="page2_c.php">page2</a>';
?>