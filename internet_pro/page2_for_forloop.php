<?php
echo '<table border bgcolor="FF0000">';
for($i=1;$i<=$_POST['num'];$i++){
    echo '<tr>';
    for($j=1;$j<=$_POST['num'];$j++){
        echo '<td>';
        echo $i;
        echo '</td>';
    }
    echo '</tr>';
}
echo '</table>';

?>