<?php
    $connect = mysqli_connect("localhost","root","","class");
    $sql = "SELECT studentid,sfirstname,slastname FROM student";
    $result = mysqli_query($connect,$sql);
    
    if($result){
        echo "<table border=1><tr>
            <th>StudentID</th>
            <th>Firstname</th>
            <th>Lastname</th></tr>";
        while($row=mysqli_fetch_assoc($result)){
            echo "<tr>
            <td>".$row['studentid']."</td>
            <td>".$row['sfirstname']."</td>
            <td>".$row['slastname']."</td></tr>";
        }
        echo "</table>";
        mysqli_close($connect);
    }else{
        echo mysqli_error($connect);
        die('can not access database');
    }
?>