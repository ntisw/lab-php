<?php
    $connect = mysqli_connect("localhost","root","","class");
    $sql='update student set sfirstname = "KKK" where studentid="4011901"';
    $result = mysqli_query($connect,$sql);
    if(!$result){
        echo mysqli_error().'<br>';
        die('Can not access database!');
    }else{
        echo 'complete';
    }
?>