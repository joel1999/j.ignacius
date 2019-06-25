<?php

require('../include/database.php');

$delete = $conn->prepare("");
$delete->bindParam(":id", $_GET['id']);
$delete->execute();