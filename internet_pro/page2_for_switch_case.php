<?php
    
    switch($_POST['color']){
        case 1:
        $color='#008000';
        //echo '<table border=3 bgcolor="008000">';
        break;
        case 2:
        $color='#FFFF00';
        //echo '<table border=3 bgcolor="FFFF00">';
        break;
        case 3:
        $color='#FFC0CB';
        //echo '<table border=3 bgcolor="FFC0CB">';
        break;
        case 4:
        $color='#0000FF';
        //echo '<table border=3 bgcolor="0000FF">';
        break;
        default:
        $color='#FFFFFF'; 
        //echo '<table border=3 >';
        break;
    }
    echo '<table border=3 bgcolor="'.$color.'">';
    for($i=1;$i<=$_POST['num'];$i++){
        echo '<tr>';
        for($j=1;$j<=$_POST['num'];$j++){
            echo '<td>';
            echo "No. ".$i."_".$j;
            echo '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
?>