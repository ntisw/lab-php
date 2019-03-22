<?php
$countries=array("th"=> 'Thailand',"ca"=> 'Canada',"uk"=> 'United Kingdom', "usa"=> 'United State of America');
echo "Use list(\$key,\$value)";
echo "<table border=1>";
while(list($key,$value)=each($countries)){
    echo "<tr><td>$key</td><td>$value</td></tr>";
}
echo "</table>";


echo "Use foreach(\$countries as \$key=>\$value)<br>";
echo "<table border=4>";
foreach($countries as $key=>$value){
    echo "<tr><td>$key</td><td>$value</td></tr>";
}
echo "</table>";


$alphabet=array('A','B','C');
echo "6.2)<br>";
echo "<table border=1>";
foreach($alphabet as $key=>$value){
    echo "<tr>";
    for($i=0;$i<count($alphabet);$i++){
        echo "<td>$value$alphabet[$i]</td>";
    }
    echo "</tr>";
}
echo "</table>";

echo "6.3)<br>";
echo "<table border=1>";
for($i=0;$i<count($alphabet);$i++){
    for($k=0;$k<count($alphabet);$k++){
        echo "<tr>";
        for($j=0;$j<count($alphabet);$j++){
            echo "<td>$alphabet[$i]$alphabet[$k]$alphabet[$j]</td>";
        }
        echo "</tr>";
    }
}
echo "</table>";

echo "6.4)<br>";
$code_stack=array('0','3','6','9','C','F');
echo "<table border=3>";
for($i=0;$i<count($code_stack);$i++){
    echo "<tr>";
    for($j=0;$j<count($code_stack);$j++){
        echo "<td>$code_stack[$i]$code_stack[$i]$code_stack[$j]$code_stack[$j]</td>";
    }
    echo "</tr>";
}   
echo "</table>";
?>
