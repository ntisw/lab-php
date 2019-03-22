<?php
    $time=$_POST['selected_time'];
    $day=$_POST['selected_day'];
    if($day!='Sunday'&&($time=="12.00"||$time=="13.00")){
        echo "Time 12.00 and 13.00 is not allowed to reserve, Please select again";
    }elseif ($day=='Sunday') {
        echo "Sunday is not allowed to reserve, Please select again";
    }else{   
        echo "Your reserve is $day ".$_POST['room']." Time : $time";
    }
?>