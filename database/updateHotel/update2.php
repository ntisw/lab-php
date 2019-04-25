<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <form action="update3.php" method="post">
        <table>
            <tr>
                <td>RoomID</td>
                <td><input disabled type="text" name="DisplayRoomID" value="<?php echo $_POST["Room_id"];?>">
                <input type="hidden" name="roomID" value="<?php echo $_POST["Room_id"];?>">
                </td>
            </tr>
            <tr>
                <td>Floor</td>
                <td><input type="text" name="floor" value="<?php echo $_POST["Floors"];?>"></td>
            </tr>
            <tr>
                <td>Price</td>
                <td><input type="text" name="price" value="<?php echo $_POST["Price"];?>"></td>
            </tr>
            <tr>
                <td>Single/Double</td>
                <td><input type="text" name="sd" value="<?php echo $_POST["SD"];?>"></td>
            </tr>
            <tr>
                <td>RoomType</td>
                <td><input type="text" name="roomType" value="<?php echo $_POST["Room_Type"];?>"></td>
            </tr>
            <tr></tr>
            <tr>
                <td></td>
                <td><input type="submit" value="update"></td>
            </tr>
        </table>


    </form>
</body>

</html>