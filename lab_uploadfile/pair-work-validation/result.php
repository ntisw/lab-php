<?php
    $months=["January","Fabuary","March","April","May","June","July","August","September","October","November","December"];
    include("valid.php");
    $position1 = $position2  =$position3 = $position4=$position5 =" ";
    if(!empty($_POST["position1"]))
    $position1=$_POST["position1"];
    if(!empty($_POST["position2"]))  
    $position2=$_POST["position2"];  
    if(!empty($_POST["position3"]))
    $position3=$_POST["position3"]; 
    if(!empty($_POST["position4"])) 
    $position4=$_POST["position4"];  
    if(!empty($_POST["position5"]))
    $position5=$_POST["position5"];  
    if($isValid&&$uploadOk==1){
        echo $picPro;
        echo "<br><br><table align= \"center\" border = \"2\"><tr><td>
            <h1>Your Detail</h1>
            Name : $Fname <br>
            Lastname : $Lname <br>
            Sex : $gender<br>
            Birthdate : $day $months[$indexmon] $year <br> 
            Address : $address <br>
            Phone : $telephone <br>
            Homepage : $homepage <br>
            Email : $email<br>
            Educate : $educate <br>
            Position : $position1  $position2  
                        $position3  $position4 
                        $position5<br>
            Salary : $salary <br>
            Experience : $experience <br>
            </td></tr></table>";
    }
    
?>