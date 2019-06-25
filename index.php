<?php
include_once('include/database.php');
require_once('include/smarty/libs/Smarty.class.php');

$template = new Smarty();

if(isset($_GET['action]'])){
    $action = $_GET['action'];
}else{
    $action = NULL;
}
switch($action){
    case 'create':
        break;
    case 'store':
        break;
    case 'edit':
        break;
    case 'update':
        break;
    case 'destroy':
        break;
    default:
        $getPersons = $conn->query("SELECT * FROM naamtest");
        $persons = $getPersons->fetchAll(PDO::FETCH_ASSOC);


//        $template->assign('naamtests', $naamtests);
}



$template->display('template/index.tpl');