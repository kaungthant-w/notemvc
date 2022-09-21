<?php
require "config.php";
$pdoStmt = $pdo->prepare("DELETE FROM note WHERE id=".$_GET['id']);
$pdoStmt->execute();
header("Location:index.php");