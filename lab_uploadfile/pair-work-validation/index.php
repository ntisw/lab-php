<table align= "center" border = "2"><tr><td>
<br><br>
<center>-- PLEASE INPUT YOUR DATA --</center><br><br>
<form enctype="multipart/form-data" method="post" action="result.php">
Name <input type="text" placeholder="John" name="Fname">
Lastname  <input type="text" placeholder="Smith" name="Lname"><br><br>
Gender   <input type="radio" name="gender" value="Female"> Female
 <input type="radio" name="gender" value="Male"> Male<br><br>
Birthdate 
Date <select name="date">
<?php
    for($i=1;$i<=31;$i++)
        echo '<option value="'.$i.'">'.$i.'</option>';
?>
</select>
Month <select name="month">
<?php
    $months=["January","Fabuary","March","April","May","June","July","August","September","October","November","December"];
    foreach ($months as $key => $value)
        echo '<option value="'.$key.'">'.$value.'</option>';
?>
</select>
Year <input type="text" placeholder="A.D. years  ex.1995" name="year">

<!--  <select name="year">
<?php/*
    for($i=2550;$i>2500;$i--)
        echo '<option value="'.$i.'">'.$i.'</option>';
        */
?>
</select> -->
<br><br>
Address <input type="text" name="address"><br><br>
Telephone Number <input type="text" placeholder="123-456-7890" name="tel"><br><br>
Email Address <input type="text" placeholder="email@example.com" name="email"><br><br>
Homepage <input type="text" placeholder="https://homepage.com" name="homepage"><br><br>
Education *<br><br>
    <input type="radio" name="education" value="Secondary Education"> Secondary Education <br><br>
    <input type="radio" name="education" value="Degree"> Degree<br><br>
    <input type="radio" name="education" value="Master degree"> Master degree <br><br>
Position * required one <br><br>    
<input type="checkbox" name="position1" value="Office adminstartor"> Office adminstartor <br><br>
<input type="checkbox" name="position2" value="Accountant"> Accountant <br><br>
<input type="checkbox" name="position3" value="Accountantcustomer support web designer"> Accountantcustomer support web designer <br><br>
<input type="checkbox" name="position4" value="Programmer"> Programmer <br><br>
<input type="checkbox" name="position5" value="System Adminstartor"> System Adminstartor <br><br>
Salary <input type="text" name="salary"> bath <br><br>
Picture <input type="file" name="fileToUpload" id="fileToUpload"><br><br>
Experience *<br><br> <textarea name="exp" rows="5" cols="50"></textarea><br><br>
<input type = "submit" value="Submit Now"> <input type="reset" value="Click to Reset">
</form>
</td></tr><table>