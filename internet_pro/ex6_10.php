<?php
    $countries[50]='cz';
    $countries[20]='de';
    $countries[10]='sg';
    $countries[]='uk';
    //$key=key($countries);
    reset($countries);
    echo
    "element".key($countries)."equals".current($countries)."<br>\n";
    
    next($countries);
    echo
    "element".key($countries)."equals".current($countries)."<br>\n";

    prev($countries);
    echo
    "element".key($countries)."equals".current($countries)."<br>\n";

?>