<?php
require "config.php";
if($_POST) {
    $title = $_POST["title"];
    $desc = $_POST["description"];

    $sql = "INSERT INTO note(title,description)VALUES(:title, :description)";
    $pdoStmt = $pdo->prepare($sql);
    $result = $pdoStmt->execute(
        array(
            ":title" => $title,
            ":description" => $desc
        )
    );

    if($result) {
        echo "<script>alert('Created Note');window.location.href='index.php';</script>";
    }

    print_r($result);

} 