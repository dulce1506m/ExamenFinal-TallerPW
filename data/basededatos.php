<?php
$db = new PDO('mysql:host=localhost; dbname=inmobiliaria', 'root', 'dvlzee15');
if(!$db){
    echo "Error al conetar la base de datos";
    exit;
}
?>