<?php
 require('../index.php');

 require ('../include/database.php');

$smarty = new Smarty();
$smarty->assign('name',$username);
$smarty->display('vieuw/index.tpl');

