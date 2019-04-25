<?php
session_start();
$connect = mysqli_connect("localhost","root","","class");
$sql = 'select*from passwd 
where username = "'.$_POST['user'].'" 
and passwd="'.$_POST['pass'].'"';
$result = mysqli_query($connect,$sql);
$numrows = mysqli_num_rows($result);
if($numrows==0)
    echo "please check username and password";
else{
    while($row = mysqli_fetch_array($result,MYSQLI_NUM)){
        if($row[5]=="Adnmin"){
            setcookie("User",$row[1],time()+3600);
            header("location:admin_cookie.php");
        }else{
            setcookie("User",$row[1],time()+3600);
            header("location:user_cookie.php");
        }
    }
    mysqli_close($connect);
}
?>