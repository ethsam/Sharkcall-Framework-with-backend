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
    
    default:
        # code...
        break;
}

?>