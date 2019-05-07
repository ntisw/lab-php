<?php
    $connect = mysqli_connect("localhost","root","","class");
    $sql = "SELECT teacherid,tfirstname,tlastname,roomno FROM teacher";
    $result = mysqli_query($connect,$sql);
    
    if($result){
        echo "<table border=1><tr>
            <th>TeacherID</th>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>RoomNumber</th></tr>";
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