<?php
/*
$countries["th"]='Thailand';
$countries["ca"]='Canada';
$countries["uk"]='United Kingdom';
$countries["usa"]='United State of America';
//echo $countries["th"];*/
$countries=array("th"=> 'Thailand',"ca"=> 'Canada',
"uk"=> 'United Kingdom',"usa"=> 'United State of America');
foreach($countries as $key=>$value){
    echo "element $key = $value<br>\n";
}
?>