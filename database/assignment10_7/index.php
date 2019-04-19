<form action="insert_4.php" method = "post" >
Student ID <input type="text" name="std_id" > <br>
Firstname <input type="text" name="first_name" ><br>
Lastname <input type="text" name="last_name" ><br>
Address <input type="text" name="address" ><br>
Major <input type="text" name="major" ><br>
Teacher ID <select name="teacher" >
<?php
    $connect=mysqli_connect("localhost","root","","class");
    $sql='SELECT teacherid FROM teacher ';
    $result = mysqli_query($connect,$sql);
    if(!$result){
        echo mysqli_error().'<br>';
        die('Can not access database!');
    }else{
        while ($row=mysqli_fetch_assoc($result)){
            echo "<option value='".$row['teacherid']."'>".$row['teacherid']."</option>";
        }
    }
    mysqli_close($connect);
    
?>
</select>
<br>
<input type="submit" value="insert">
</form>