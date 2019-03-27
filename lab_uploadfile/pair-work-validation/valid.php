<?php
//$Fname = $Lname = $email = $gender = $comment = $homepage = $picPro = "";
$isValid=true;
//----------------name-----------------------
$Fname = test_input($_POST["Fname"]);
if (!preg_match("/^[A-Za-z]+(\s[A-Za-z]+)*$/",$Fname)) {
  $FnameErr = "Name only letters allowed"; 
  echo $FnameErr;
  echo "<br>";
  $isValid=false;
}
$Lname = test_input($_POST["Lname"]);
if (!preg_match("/^[A-Za-z]+(\s[A-Za-z]+)*$/",$Lname)) {
  $LnameErr = "Lastname only letters allowed"; 
  echo $LnameErr;
  echo "<br>";
  $isValid=false;
}
//----------------gender-----------------------
$gender=$_POST["gender"];
if (empty($_POST["gender"])) {
  $genderErr = "Gender is required";
echo $genderErr;
echo "<br>";
$isValid=false;
} 
//----------------birth date----------------------------------
$year= test_input($_POST["year"]);
$day=$_POST["date"];
$indexmon=$_POST["month"];
$month=$indexmon+1;
if(!empty($day)&&!empty($month)&&!empty($year)){
  $currentYear = date("Y",time());
  if(!checkdate($month,$day,$year)){
    echo "Invalid Date <br>";
    $isValid=false;
  }
}else{
  echo "Birthdate is required <br>";
  $isValid=false;
}
//-----------------address----------------------------
$address = test_input($_POST["address"]);
//----------------telephone------------------------------
$telephone = test_input($_POST["tel"]);
if(!preg_match("/\d{3}-\d{3}-\d{4}/",$telephone)){
  $telErr ="Invalid telephone number format ".$telephone;
  echo $telErr."<br>";
  $isValid=false;
}
//----------------email-----------------------
$email = test_input($_POST["email"]);
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $emailErr = "Invalid email format"; 
  echo $emailErr;
  echo "<br>";
  $isValid=false;
}
//----------------homepage-----------------------
$homepage = test_input($_POST["homepage"]);
if (!empty($homepage)&&!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$homepage)) {
  $homepageErr = "Invalid URL"; 
  echo $homepageErr ;
  echo "<br>";
  $isValid=false;
}
//----------------education--------------------------------
$educate=$_POST["education"];
if (empty($educate)) {
  $eduErr = "Education is required";
  echo $eduErr;
  echo "<br>";
  $isValid=false;
}

//----------------positions-------------------------------
if (empty($_POST["position1"])&&empty($_POST["position2"])
&&empty($_POST["position3"])&&empty($_POST["position4"])
&&empty($_POST["position5"])){
  echo "should at least one position";
  $isValid=false;
}

//----------------salary--------------------------
$salary = test_input($_POST["salary"]);
//----------------picture profile-------------------------
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        //echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        $pathfile='uploads/'.basename( $_FILES["fileToUpload"]["name"]);
        $picPro='<center><img height="150"src="'.$pathfile.'"></center>';
      } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
//----------------Experience-----------------------
$experience=test_input($_POST["exp"]);
if (empty($experience)) {
    $comment = "<br>Experiecnce is required";
	echo  $comment;
  echo "<br>";
  $isValid=false;
}

//----------------function for checking-----------------------
function test_input($data) {
  $data = trim($data);//cut space
  $data = stripslashes($data);//cut slashes
  $data = htmlspecialchars($data);
  return $data;
}

?>