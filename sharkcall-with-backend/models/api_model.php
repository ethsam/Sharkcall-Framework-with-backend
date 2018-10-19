<?php

$databaseConnection = new Database;

$getCategory = $databaseConnection->readAllCategory($id);
$getSubCategory = $databaseConnection->readAllSubCategory($id);
$getContent = $databaseConnection->readAllContent($id);

?>

