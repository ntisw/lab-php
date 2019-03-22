<?php

    $countries=array('th','uk','ca','de');
    echo "SORT !!!".'<br>'."6_13<br>";
    sort($countries);
    while(list($key,$val)=each($countries)){
        echo "element $key = $val<br>\n";
    }
    $countries=array("th"=> 'Thailand',"ca"=> 'Canada',"uk"=> 'United Kingdom');
    foreach($countries as $key=>$value){
        echo "element $key = $value<br>\n";
    }
    $countries=array("th"=> 'Thailand',"ca"=> 'Canada',"uk"=> 'United Kingdom');
    echo "after sort<br>\n";
    sort($countries);
    foreach($countries as $key=>$value){
        echo "element $key = $value<br>\n";
    }
    echo "after asort<br>\n";
    $countries=array("th"=> 'Thailand',"ca"=> 'Canada',"uk"=> 'United Kingdom');
    asort($countries);
    foreach($countries as $key=>$value){
        echo "element $key = $value<br>\n";
    }
    $countries=array("th"=> 'Thailand',"ca"=> 'Canada',"uk"=> 'United Kingdom');
    echo "after rsort<br>\n";
    rsort($countries);
    foreach($countries as $key=>$value){
        echo "element $key = $value<br>\n";
    }
    $countries=array("th"=> 'Thailand',"ca"=> 'Canada',"uk"=> 'United Kingdom');
    echo "after arsort<br>\n";
    arsort($countries);
    foreach($countries as $key=>$value){
        echo "element $key = $value<br>\n";
    }
    $countries=array("a"=> 'Thailand',"b"=> 'Canada',"c"=> 'United Kingdom');
    echo "after ksort<br>\n";
    ksort($countries);
    foreach($countries as $key=>$value){
        echo "element $key = $value<br>\n";
    }
?>