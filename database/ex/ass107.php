<?php
echo "<form method='post' action='ass107_2.php'>";
$connect=mysqli_connect("localhost","root","","class");
$sql='SELECT*FROM student';
$result = mysqli_query($connect,$sql);

echo "Please select Student ID";
echo"<select name='stuNo'>";
while ($row=mysqli_fetch_assoc($result)){
    echo "<option value='WHERE studentID=".$row['StudentID']."'>".$row['StudentID']."</option>";
    }
    echo "<option value=''>".all."</option>";
    echo"</select>";
    echo"<input type='submit'></input>";
    echo"</form>";
    
?>