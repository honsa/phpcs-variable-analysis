<?php

function function_with_global_var() {
    global $var, $var2, $unused;

    echo $var;
    echo $var3;
    echo $ice_cream;
    return $var2;
}

function function_with_superglobals() {
    echo print_r($GLOBALS, true);
    echo print_r($_SERVER, true);
    echo print_r($_GET, true);
    echo print_r($_POST, true);
    echo print_r($_FILES, true);
    echo print_r($_COOKIE, true);
    echo print_r($_SESSION, true);
    echo print_r($_REQUEST, true);
    echo print_r($_ENV, true);
    echo "{$GLOBALS['whatever']}";
    echo "{$GLOBALS['whatever']} $var";
}

// Variables within the global scope
$cherry = 'topping';
$sunday = $ice_cream . 'and a ' . $cherry;
if ( $ice_cream ) {
    echo 'Two scoops please!';
}
