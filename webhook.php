<?php
 //ini_set('display_errors',1);
 //error_reporting(E_ALL);

$data_json = json_decode(file_get_contents('php://input'), true);

$fp = fopen("respuesta.txt", "w");
fputs($fp, "pruebas");

$datos = json_encode($data_json , JSON_UNESCAPED_SLASHES );

fputs($fp, $datos);

fclose($fp);

?>