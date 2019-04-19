<?php
$stuNo=$_POST["stuNo"];
$connect=mysqli_connect("localhost","root","","class");
$sql='SELECT*FROM student '.$stuNo;
$result = mysqli_query($connect,$sql);
if(!$result){
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
    while ($row=mysqli_fetch_assoc($result)){
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

?>