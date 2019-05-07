<form action="selec_7.php" method="get">
please select Student ID :
<select name="stdid">
<?php
$connect = mysqli_connect("localhost","root","","class");
$sql = "SELECT studentid
FROM student";
$result = mysqli_query($connect,$sql);
if($result){
    while($row=mysqli_fetch_array($result)){
        echo "<option value='$row[0]'>$row[0]</option>";
    }
    echo "</table>";
    mysqli_close($connect);
}else{
    echo mysqli_error($connect);
    die('can not access database');
}
?>
<option value="all">all</option>
</select>
<br>
<input type="submit" value="submit">
</form>