<?php

require("../include/database.php");

$update = $conn-> prepare("UPDATE pdo");
$update ->bindParam(":id", $_GET['id']);
$update ->bindParam(":firstname", $_GET['firstname']);
$update ->bindParam(":lastname", $_GET['lastname']);
$update ->execute();

