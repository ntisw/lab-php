<!DOCTYPE html>
<html>
<head>
    <style>
        td{
            width: 3cm;
            text-align: center;
        }
    </style>
</head>
<body>
    <form action="6030213010_page2.php" method="post">
        Please select room
        <select name="room" >
            <option value="1408">1408</option>
            <option value="1207">1207</option>
            <option value="1202A">1202A</option>
        </select>
        Please select Day
        <select name="selected_day">
            <option value="Sunday">Sunday</option>
            <option value="Monday">Monday</option>
            <option value="Tuesday">Tuesday</option>
            <option value="Wednesday">Wednesday</option>
            <option value="Thusday">Thusday</option>
            <option value="Friday">Friday</option>
            <option value="Saturday">Saturday</option>
        </select>
        Please select Time
        <select name="selected_time">
            <option value="10.00">10.00</option>
            <option value="10.30">10.30</option>
            <option value="11.00">11.00</option>
            <option value="11.30">11.30</option>
            <option value="12.00">12.00</option>
            <option value="12.30">12.30</option>
            <option value="13.00">13.00</option>
        </select>
        <br>
        <input type="submit" value="reserve">
        <?php
            $ArrayDay = array('Sunday','Monday','Tuesday','Wednesday','Thusday','Friday','Saturday');
            $ArrayTime = array('10.00','10.30','11.00','11.30','12.00','12.30','13.00');
            echo '<table>';
            for($i=0;$i<count($ArrayDay);$i++){
                echo '<tr><td style="background-color:lightgreen;">'.$ArrayDay[$i].'</td>';
                for($j=0;$j<count($ArrayTime);$j++){
                    if($ArrayDay[$i]=='Sunday'||$ArrayTime[$j]=="12.00"||$ArrayTime[$j]=="13.00"){
                        echo '<td style="background-color:red;">'.$ArrayTime[$j].'</td>';
                    }else{
                        echo '<td style="background-color:orange;">'.$ArrayTime[$j].'</td>';
                    }
                }
                echo '<tr>';
            }
            echo '</table>';
        ?>
    </form>
</body>
</html>