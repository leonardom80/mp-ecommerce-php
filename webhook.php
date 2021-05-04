<?php
 //ini_set('display_errors',1);
 //error_reporting(E_ALL);
echo __line__;
//$data_json = json_decode(file_get_contents('php://input'), true);
echo __line__;
$fp = fopen("respuesta.txt", "w");
echo __line__;
fputs($fp, "pruebas");
echo __line__;
//$datos = json_encode($data_json , JSON_UNESCAPED_SLASHES );
echo __line__;
//fputs($fp, $datos);
echo __line__;
fclose($fp);
echo __line__;
?>
