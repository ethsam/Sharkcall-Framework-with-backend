<?php

switch ($method) {
    case 'getCategory':
        $responseReq = $getCategory;
        break;

    case 'getSubCategory':
        $responseReq = $getSubCategory;
        break;

    case 'getContent':
        $responseReq = $getContent;
        break;

    case 'getSubByCategory':
        $responseReq = $getSubByCategory;
        break;

    case 'getContentBySub':
        $responseReq = $getContentBySub;
        break;
    
    default:
        $responseReq = "Error";
        break;
}

?>