<?php 
$connect=mysqli_connect("localhost","root","","class");
$sql_insert='INSERT into student values("'.$_POST['std_id'].'","'.$_POST['first_name'].'","'.$_POST['last_name'].'","'.$_POST['address'].'","'.$_POST['major'].'","'.$_POST['teacher'].'")';
$result_insert = mysqli_query($connect,$sql_insert);
$sql_select='SELECT*FROM student ';
$result_select = mysqli_query($connect,$sql_select);
if(!$result_insert){
    echo mysqli_error().'<br>';
    die('Can not access database!');
}else{

    if(!$result_select){
        echo mysqli_error().'<br>';
        die('Can not access database!');
    }else{
        echo'<table border="1" cellpading="0" cellspacing="0">';
        echo'<tr>';
        echo'<td>';
        echo'StudentID';
        echo'</td>';
        echo'<td>';
        echo'Firstname';
        echo'</td>';
        echo'<td>';
        echo'lastname';
        echo'</td>';
        echo'<td>';
        echo'Major';
        echo'</td>';
        echo'<td>';
        echo'TeacherID';
        echo'</td>';
        echo'<tr>';
        while ($row=mysqli_fetch_assoc($result_select)){
            echo'<tr>';
            echo'<td>'.$row['StudentID'].'</td>';
            echo'<td>'.$row['SFirstname'].'</td>';
            echo'<td>'.$row['SLastname'].'</td>';
            echo'<td>'.$row['Major'].'</td>';
            echo'<td>'.$row['TeacherID'].'</td>';
            echo'</tr>';
        }
        echo'</table>';
        mysqli_close($connect);
    }
}


?>