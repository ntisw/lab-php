<?php
    session_start();
    echo 'welcome to page1';
    $_SESSION['color']='green';
    echo '<a href="page2_s.php">page2</a>';
?>