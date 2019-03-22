<?php
echo "<table border=2>";
    function call($midF,$finalF,$labF){
        return $midF+$finalF+$labF;
    }
    function callGrade($total_score){
        if($total_score>80){
            $grade="A";
        }elseif($total_score>75){
            $grade="B+";
        }elseif($total_score>70){
            $grade="B";
        }elseif($total_score>65){
            $grade="C+";
        }elseif($total_score>60){
            $grade="C";
        }elseif($total_score>55){
            $grade="D+";
        }elseif($total_score>50){
            $grade="D";
        }elseif($total_score>45){
            $grade="E";
        }
        return $grade;
    }
    $total=call($_POST["mid_score"],$_POST["final_score"],$_POST["lab_score"]);
    $grade=callGrade($total);
    
    echo "<tr><td>ID</td><td>Mid</td><td>Final</td><td>Lab</td><td>Total</td><td>Grade</td></tr>";
    echo "<tr><td>".$_POST["std_id"]."</td><td>".$_POST["mid_score"]."</td><td>".$_POST["final_score"]."</td><td>".$_POST["lab_score"]."</td><td>$total</td><td>$grade</td></tr>";
    echo "</table>";
?>