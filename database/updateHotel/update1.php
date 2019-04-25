<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr><td>RoomID</td><td>Floor</td><td>Price</td><td>Single/Double</td><td>RoomType</td><td>Update?</td></tr>
        <?php
            $connect = mysqli_connect("localhost","root","","hotel");
            $sqlUpdate = 'select* from room';
            $result = mysqli_query($connect,$sqlUpdate);
            if(!$result){
                echo mysqli_error($connect).'<br>';
                die('Can not access database');
            }else{
                $numfields = mysqli_num_fields($result);
                while($row = mysqli_fetch_assoc($result)){
                    echo '<tr><form action="update2.php" method="post">';
                    while(list($key,$value)=each($row)){
                        echo '<td><input type="hidden" name="'.$key.'" value="'.$value.'">'.$value.'</td>';
                    }
                    echo '<td><input type="submit" value="Update"></td></form></tr>';

                }
                mysqli_close($connect);
            }
        ?>
    </table>
</body>
</html>