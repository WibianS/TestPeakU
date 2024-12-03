<?php
//conexión a la base de datos
    $first = "localhost";	// SERVER NAME
    $second = "root";		// MySQL USER NAME
    $third = "";	// MySQL USER PASS
    $fourth = "blog";		// DATABASE NAME
    $fifth = "";


$connector = new mysqli($first,$second,$third,$fourth);
if ($connector->connect_errno) {
    echo "Falló la conexión con MySQL: (" .$connector->connect_errno. ") " .$connector->connect_error;
} else {
    $connector->set_charset('utf8');
}
?>