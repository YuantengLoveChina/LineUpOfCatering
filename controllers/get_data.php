<?php
require_once dirname(__FILE__)."/../utils/CRUDdatabase.php";
function get_data(){
    $crud = new CRUDdatabase();
    $arr  = $crud->getPageDataFromDatabase(0,15);
    return $arr;
}