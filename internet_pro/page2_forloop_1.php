<?php
    echo '<table border=3>';
    for($i=1;$i<=$_POST['num'];$i++){
        echo '<tr>';
        for($j=1;$j<=$_POST['num'];$j++){
            if($i==1){
                echo '<td>';
                echo "NO.".'<br>'."$i"."_"."$j";
                echo '</td>';
            }else{
                echo '<td>';
                echo "No. $i"."_"."$j";
                echo '</td>';
            }            
        }
        echo '</tr>';
    }
    echo '<table>';
?>