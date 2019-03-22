<?php
    echo $_GET['FName'];
    echo " ";
    echo $_GET['LName'];
    if($_GET['FName']===''||$_GET['LName']=='')
        include("page1.php");
?>