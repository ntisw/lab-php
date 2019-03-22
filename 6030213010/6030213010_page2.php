<?php
    $row=$_POST['row'];
    $column=$_POST['column'];
    $color=$_POST['color'];
    switch($color){
        case "green":
        $code_color='#008000';//green
        break;
        case "yellow":
        $code_color='#ffff00';//yellow
        break;
        case "red":
        $code_color='#f00000';//red
        break;
    }
    echo "Before changing";
    echo '<table border=1 bgcolor="'.$code_color.'">';
    for($i=1;$i<=$row;$i++){
        echo '<tr>';
        for($j=1;$j<=$column;$j++){
            echo "<td>A.$i"."_"."$j</td>";
        }
        echo '</tr>';
    }
    echo '</table>';

    echo "After changing";
    echo '<table border=1 bgcolor="'.createtable($row,$column,$color).'">';
    for($i=1;$i<=$row;$i++){
        echo '<tr>';
        for($j=1;$j<=$column;$j++){
            echo "<td>A.$i"."_"."$j</td>";
        }
        echo '</tr>';
    }
    echo '</table>';
    function createtable($row,$column,$color){
        switch($color){
            case "green":
                $code_color='#0000ff';//turn to blue
            break;
            case "yellow":
                $code_color='#ffa500';//turn to orange
            break;
            case "red":
                $code_color='#808080';//turn to gray
            break;
        }
        return $code_color;
    }

?>