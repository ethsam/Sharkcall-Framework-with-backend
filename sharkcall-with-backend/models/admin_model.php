<?php

//Init Database connection
$dataBase = new Database;

//Call method in Database class
$categoryList = $dataBase->readAllCategory(0);
$subCategoryList = $dataBase->readAllSubCategory(0);
$cityList = $dataBase->readAllCity(0);
$userList = $dataBase->readAllUser(0);
$contentList = $dataBase->readAllContent(0);
$roleList = $dataBase->readAllUserRole(0);
$imgList = $dataBase->readAllImg(0);

//Call function in functions.php
$categoryList = dataTableCategory($categoryList);
$subCategoryList = dataTableSubCategory($subCategoryList);
$cityList = dataTableCity($cityList);
$userList = dataTableUser($userList);
$contentList = dataTableContent($contentList);
$roleList = dataTableContent($roleList);
$imgList = dataTableImg($imgList);

//List All Category option for content form
$listAllSelectCategory = listAllSelectCategory($dataBase->readAllCategory());
//List All SubCategory option for content form
$listAllSelectSubCategory = listAllSelectSubCategory($dataBase->readAllSubCategory());
//List All City option for content form
$listAllSelectCity = listAllSelectCity($dataBase->readAllCity());
//List All User option for content form
$listAllSelectUser = listAllSelectUser($dataBase->readAllUser());
//List All User's Role option for content form
$listAllSelectUserRole = listAllSelectUserRole($dataBase->readAllUserRole());

//var_dump($imgList);
?>