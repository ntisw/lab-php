<?php
$connect = mysqli_connect("localhost","root","","class");
$sql = "SELECT * 
FROM student
WHERE studentid = ".$_GET['stdid'];
$result = mysqli_query($connect,$sql);

if($result){
    echo "<table border=1><tr>
        <th>StudentID</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Address</th>
        <th>Major</th>
        <th>TeacherID</th></tr>";
    while($row=mysqli_fetch_assoc($result)){
        echo "<tr>";
        while(list($key,$value)=each($row)){
            if($value=='')
            echo "<td>&nbsp</td>";
            else
            echo "<td>$value</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    mysqli_close($connect);
}else{
    echo mysqli_error($connect);
    die('can not access database');
}
?>