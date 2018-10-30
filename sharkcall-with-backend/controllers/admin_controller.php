<?php
$sessionAdmin = $_SESSION['login'];

if ($sessionAdmin[4] != 1) {
    header('Location: login');
} else {
    if (empty($_SESSION['token'])) {
        $_SESSION['token'] = bin2hex(random_bytes(32));
    }
    $token = $_SESSION['token'];
}


//Ajax Post treatment
if (!empty($_SERVER['HTTP_X_REQUESTED_WITH'])
    && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {

    //$ajaxPostData = !empty($_POST) ? $_POST : 'NULL';
    $ajaxPostOrder = $_POST['order'];
    $ajaxPostData = $_POST['data'];
    $ajaxPostToken = $_POST['token'];

    if ($ajaxPostOrder != null && $token == $ajaxPostToken) {

        switch ($ajaxPostOrder) {
            /**
             * ! CATEGORY
             */
            case 'createCategory':
                $response = $dataBase->createCategory($ajaxPostData);
                echo $response;
                die;
                break;
            
            case 'updateCategory':
                $response = $dataBase->updateCategory($ajaxPostData);
                echo $response;
                die;
                break;

            case 'deleteCategory':
                $response = $dataBase->deleteCategory($ajaxPostData);
                echo $response;
                die;
                break;

            /**
             * ! SUBCATEGORY
             */
            case 'createSubCategory':
                $response = $dataBase->createSubCategory($ajaxPostData);
                echo $response;
                die;
                break;
            
            case 'updateSubCategory':
                $response = $dataBase->updateSubCategory($ajaxPostData[0], $ajaxPostData[1]);
                echo $response;
                die;
                break;

            case 'deleteSubCategory':
                $response = $dataBase->deleteSubCategory($ajaxPostData);
                echo $response;
                die;
                break;

            /**
             * ! USER
             */
            case 'createUser':
                $response = $dataBase->createUser($ajaxPostData);
                echo $response;
                die;
                break;

            case 'updateUser':
                $response = $dataBase->updateUser($ajaxPostData);
                echo $response;
                die;
                break;

            case 'deleteUser':
                $response = $dataBase->deleteUser($ajaxPostData);
                echo $response;
                die;
                break;
            
            /**
             * ! CITY
             */
            case 'createCity':
                $response = $dataBase->createCity($ajaxPostData);
                echo $response;
                die;
                break;

            case 'updateCity':
                $response = $dataBase->updateCity($ajaxPostData);
                echo $response;
                die;
                break;

            case 'deleteCity':
                $response = $dataBase->deleteCity($ajaxPostData);
                echo $response;
                die;
                break;
            
            /**
             * ! CONTENT
             */
            case 'createContent':
                $response = $dataBase->createContent($ajaxPostData);
                echo $response;
                die;
                break;

            case 'updateContent':
                $response = $dataBase->updateContent($ajaxPostData);
                echo $response;
                die;
                break;

            case 'deleteContent':
                $response = $dataBase->deleteContent($ajaxPostData);
                echo $response;
                die;
                break;

            /**
             * ! GET INFO MODAL
             */
            case 'getInfoModalUser':
                $response = $dataBase->readAllUser($ajaxPostData);
                echo json_encode($response);
                // echo $response;
                die;
                break;
            case 'getInfoModalCategory':
                $response = $dataBase->readAllCategory($ajaxPostData);
                echo json_encode($response);
                // echo $response;
                die;
                break;
            case 'getInfoModalSubCategory':
                $response = $dataBase->readAllSubCategory($ajaxPostData);
                echo json_encode($response);
                // echo $response;
                die;
                break;
            case 'getInfoModalCity':
                $response = $dataBase->readAllCity($ajaxPostData);
                echo json_encode($response);
                // echo $response;
                die;
                break;
            case 'getInfoModalUserRole':
                $response = $dataBase->readAllUserRole($ajaxPostData);
                echo json_encode($response);
                // echo $response;
                die;
                break;
            case 'getInfoModalContent':
                $response = $dataBase->readAllContent($ajaxPostData);
                echo json_encode($response);
                // echo $response;
                die;
                break;
            /**
             * ! UPLOAD MEDIA
             */
            case 'uploadMedia':
                if (!empty($_FILES)) {
                    $upload_dir = "assets/img/uploads/";
                    $fileName = $_FILES['file']['name'];
                    $uploaded_file = $upload_dir . $fileName;
                    if (move_uploaded_file($_FILES['file']['tmp_name'], $uploaded_file)) {
                        //insert file information into db table
                        // $mysql_insert = "INSERT INTO uploads (file_name, upload_time)VALUES('" . $fileName . "','" . date("Y-m-d H:i:s") . "')";
                        // mysqli_query($conn, $mysql_insert) or die("database error:" . mysqli_error($conn));
                        echo 'File Uploaded';
                    } else {
                        echo 'Error upload';
                    }
                }
            die;
            break;
            case 'readAllImg':
                $response = $dataBase->readAllImg($ajaxPostData);
                echo json_encode($response);
                // echo $response;
                die;
                break;

            case 'updateAltMedia':
                // $ajaxPostData = array_push($ajaxPostData, $uploaded_file);
                // debug($ajaxPostData);
                $response = $dataBase->updateAltMedia($ajaxPostData);
                echo json_encode($response);
                die;
                break;

            default:
                echo "Order Error : ".$ajaxPostOrder." don't exist";
                die;
                break;
        }
    } else {
        echo "Wrong Token";
    }

}


//Include View with switch
switch ($method) {
                case 'admin':
                    $pageAdmin = 'admin_dashboard';
                    break;

                case 'categories':
                    $pageAdmin = '/categories/admin_categories_crud_template';
                    break;

                case 'subcategories':
                    $pageAdmin = '/subcategories/admin_subcategories_crud_template';
                    break;

                case 'users':
                    $pageAdmin = '/users/admin_users_crud_template';
                    break;

                case 'cities':
                    $pageAdmin = '/cities/admin_cities_crud_template';
                    break;

                case 'contents':
                    $pageAdmin = '/contents/admin_contents_crud_template';
                    break;

                case 'img':
                    $pageAdmin = '/img/admin_img_crud_template';
                    break;


                default:
                    $pageAdmin = 'admin_dashboard';
                    break;
            }
?>