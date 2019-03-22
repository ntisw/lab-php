<?php
    echo '<table border=3 bgcolor="FF0000">';
    echo '<tr>';
    for($i=1; $i<=$_POST['num']; $i++){
        echo '<td>';
        echo $i;
        echo '</td>';
    }
    echo '</tr>';
    echo '</table>';
?>