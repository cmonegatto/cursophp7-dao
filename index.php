<?php

require_once("config.php");

$sql = new Sql();

$data = new Usuario();

$data->loadById(2);

echo $data;

?>
