<?php
function debug($data){
        echo '<pre>';
        var_dump($data);
        echo '</pre>';
}

/**
* function dataTableCategory()
* @param Json = list category
* @return String = list of content with tr td balise
* @date 08-10-2018
* @author Samuel Ethève - https://ethsam.fr
*/
function dataTableCategory($json) {
        foreach ($json as $key => $value) {
                $var .= "<tr><td>".$value->id_category."</td><td>".$value->designation_cat."</td><td>";
                $var .= '
                        <div class="col-lg-3">
                        <button type="button" class="btn btn-large btn-block btn-info" onclick="postUpdateShow(\'modal_update_categories\')"><i class="fa fa-pencil-square" aria-hidden="true"></i> Edit</button>
                        </div>
                        <div class="col-lg-3">
                        <button type="button" class="btn btn-large btn-block btn-danger" onclick="postDeleteCategory('.$value->id_category.')"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button>
                        </div>
                        </td></tr>';
        }
        return $var;
}


/**
* function dataTableSubCategory()
* @param Json = list subcategory
* @return String = list of content with tr td balise
* @date 08-10-2018
* @author Samuel Ethève - https://ethsam.fr
*/
function dataTableSubCategory($json) {
        foreach ($json as $key => $value) {
                $var .= "<tr><td>".$value->id_subCategory."</td><td>".$value->designation_subcat."</td><td>";
                $var .= '
                        <div class="col-lg-3">
                        <button type="button" class="btn btn-large btn-block btn-info" onclick="postUpdateShow(\'modal_update_subcategories\')"><i class="fa fa-pencil-square" aria-hidden="true"></i> Edit</button>
                        </div>
                        <div class="col-lg-3">
                        <button type="button" class="btn btn-large btn-block btn-danger" onclick="postDeleteSubCategory('.$value->id_subCategory.')"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button>
                        </div>
                        </td></tr>';
        }
        return $var;
}

/**
* function dataTableCity()
* @param Json = list cities
* @return String = list of content with tr td balise
* @date 08-10-2018
* @author Samuel Ethève - https://ethsam.fr
*/
function dataTableCity($json) {
        foreach ($json as $key => $value) {
                $var .= "<tr><td>".$value->id_city."</td><td>".$value->cityName."</td>";
                $var .= '<td>
                        <div class="col-lg-4">
                        <button type="button" class="btn btn-large btn-block btn-info" onclick="postUpdateShow(\'modal_update_cities\')"><i class="fa fa-pencil-square" aria-hidden="true"></i> Edit</button>
                        </div>
                        <div class="col-lg-4">
                        <button type="button" class="btn btn-large btn-block btn-danger" onclick="postDeleteCity('.$value->id_city.')"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button>
                        </div>
                        </td></tr>';
        }
        return $var;
}
/**
* function dataTableUser()
* @param Json = list user
* @return String = list of content with tr td balise
* @date 08-10-2018
* @author Samuel Ethève - https://ethsam.fr
*/
function dataTableUser($json) {
        foreach ($json as $key => $value) {
                $var .= "<tr><td>".$value->id_user."</td><td>".$value->name."</td>";
                $var .= "<td>".$value->email."</td><td>".getRoleName($value->role_id)."</td>";
                $var .= '<td>
                        <div class="col-lg-4">
                        <button type="button" class="btn btn-large btn-block btn-info" onclick="postUpdateShow(\'modal_update_users\')"><i class="fa fa-pencil-square" aria-hidden="true"></i> Edit</button>
                        </div>
                        <div class="col-lg-4">
                        <button type="button" class="btn btn-large btn-block btn-danger" onclick="postDeleteUser('.$value->id_user.')"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button>
                        </div>
                        </td></tr>';
        }
        return $var;
}

/**
* function dataTableContents()
* @param Json = list subcategory
* @return String = list of content with tr td balise
* @date 09-10-2018
* @author Samuel Ethève - https://ethsam.fr
*/
function dataTableContent($json) {
        $database = new Database;
        foreach ($json as $key => $value) {
                $category = $database->readAllCategory($value->category);
                $subCategory = $database->readAllSubCategory($value->subCategory);
                $city = $database->readAllCity($value->city);

                $var .= "<tr>
                                <td>".$value->id_content."</td>
                                <td>".$value->title."</td>
                                <td>".$value->content."</td>
                                <td style='display:none'>".$value->img."</td>
                                <td>".$category[0]->designation_cat."</td>
                                <td>".$subCategory[0]->designation_subcat."</td>
                                <td>".$city[0]->cityName."</td>
                                <td>".$value->adress."</td>
                                <td>".$value->phone."</td>
                                <td style='display:none'>".$value->lat."</td>
                                <td style='display:none'>".$value->long."</td>
                        ";
                $var .= '<td style="padding-left:0; padding-right:0;">
                        <div class="col-lg-6">
                        <button type="button" class="btn btn-large btn-block btn-info" onclick="postUpdateShow(\'modal_update_contents\')"><i class="fa fa-pencil-square" aria-hidden="true"></i></button>
                        </div>
                        <div class="col-lg-6">
                        <button type="button" class="btn btn-large btn-block btn-danger" onclick="postDeleteContent('.$value->id_content.')"><i class="fa fa-trash" aria-hidden="true"></i></button>
                        </div>
                        </td>
                        </tr>';
        }
        return $var;
}


function getRoleName($int){
        switch ($int) {
                case 1:
                        return "Administrator";
                        break;
                case 2:
                        return "Member";
                        break;
                default:
                        return "Member";
                        break;
        }
}

/*
 * listAllSelectCategory
 * list all type options for the content Update Form
 */
function listAllSelectCategory($categoryList){
    foreach ($categoryList as $itemSelectCategory) {
        $var .= '<option id="'.$itemSelectCategory->id_category.'" value="'.$itemSelectCategory->id_category.'">'.$itemSelectCategory->designation_cat.'</option>';
    }
    return $var;
}

/*
 * listAllSelectSubCategory
 * list all type options for the content Update Form
 */
function listAllSelectSubCategory($subCategoryList){
    foreach ($subCategoryList as $itemSelectSubCategory) {
        $var .= '<option id="'.$itemSelectSubCategory->id_subCategory.'" value="'.$itemSelectSubCategory->id_subCategory.'">'.$itemSelectSubCategory->designation_subcat.'</option>';
    }
    return $var;
}
/*
 * listAllSelectCity
 * list all city options for the content Update Form
 */
function listAllSelectCity($cityList){
    foreach ($cityList as $itemSelectCity) {
        $var .= '<option id="'.$itemSelectCity->id_city.'" value="'.$itemSelectCity->id_city.'">'.$itemSelectCity->cityName.'</option>';
    }
    return $var;
}
/*
 * listAllSelectUser
 * list all user's  options for the content Update Form
 */
function listAllSelectUser($userList){
    foreach ($userList as $itemSelectUser) {
        $var .= '<option id="'.$itemSelectUser->id_user.'" value="'.$itemSelectUser->id_user.'">'.$itemSelectUser->name.'</option>';
    }
    return $var;
}

/*
 * listAllSelectUserRole
 * list all user's Role options for the content Update Form
 */
function listAllSelectUserRole($userRoleList){
    foreach ($userRoleList as $itemSelectUserRole) {
        $var .= '<option id="'.$itemSelectUserRole->id_role.'" value="'.$itemSelectUserRole->id_role.'">'.$itemSelectUserRole->roleName.'</option>';
    }
    return $var;
}
?>