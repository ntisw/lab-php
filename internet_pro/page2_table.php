<?php
    echo '<table border=3 bgcolor="FF0000">';
    echo '<tr>';

    $i=1;
    do{
        echo '<td>';
        echo $i;
        echo '</td>';
        $i++;
    }while ($i<= $_POST['num']);
    echo '</tr>';
    echo '</table>';
?>