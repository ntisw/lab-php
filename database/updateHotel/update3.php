

<?php
$connect = mysqli_connect("localhost", "root", "", "hotel");
$sql = 'update room 
    set room_id=' . $_POST["roomID"] . '
    ,floors="' . $_POST["floor"] . '"
    ,price=' . $_POST["price"] . '
    ,sd="' . $_POST["sd"] . '"
    ,room_type="' . $_POST["roomType"] . '"
    where room_id='.$_POST["roomID"];
$result = mysqli_query($connect, $sql);
if (!$result) {
    mysqli_error($connect);
    die('Can not access database');
} else {

    echo 'Congratulations!The record is updated.';
    mysqli_close($connect);
}

?>