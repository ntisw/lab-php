<?php   
    calculate($_POST["num1"],$_POST["num2"],$_POST["oper"]);
    function calculate($n1,$n2,$cal2){    
        switch($cal2){
            case "add": $result=($n1+$n2);
            break;
            case "sub": $result=($n1-$n2);
            break;
            case "mul": $result=($n1*$n2);
            break;
            case "div": $result=($n1/$n2);
            break;
        }
        echo "result = $result";
    }
?>