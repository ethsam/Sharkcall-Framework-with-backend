<?php
header("Access-Control-Allow-Origin: *");
header('Content-Type: application/json');

$databaseConnection = new Database;

$getCategory = $databaseConnection->readAllCategory($id);
$getSubCategory = $databaseConnection->readAllSubCategory($id);
$getContent = $databaseConnection->readAllContent($id);

?>

