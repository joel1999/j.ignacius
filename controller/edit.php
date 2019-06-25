<?php

require('../include/database.php');

$select = $conn->prepare("SELECT * FROM persons WHERE id");
$select->bindParam(":id", $_GET['id']);
$select->execute();

$users = $select->fetchAll(PDO::FETCH_OBJ);

require_once('../include/smarty/libs/Smarty.class.php');

$smarty = new smarty();
$smarty->assign('user',$users);
$smarty->display('view/index.tpl');
