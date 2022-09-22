<?php
require_once "connection.php";
class CardModel {
    static public function mdlCreateCard($table, $data){
        $stmt = Connection::connect()->prepare("INSERT INTO $table(title, description)VALUES(:title, :description)");
        $stmt -> bindParam(":title", $data["title"], PDO::PARAM_STR);
        $stmt -> bindParam(":description", $data["description"], PDO::PARAM_STR);

        if($stmt -> execute()) {
            return "ok";
        } else {
            return "error";
        }
        $stmt = null;
    }

    //show card
    static public function mdlShowCard($table, $item, $value) {
        if($item != null) {
            $stmt = Connection::connect()->prepare("SELECT * FROM $table WHERE $item=:$item");
            $stmt->bindParam(":".$item, $value, PDO::PARAM_STR);
            $stmt -> execute();
            return $stmt->fetch();
        } else {
            $stmt = Connection::connect()->prepare("SELECT * FROM $table ORDER BY id DESC");
            $stmt -> execute();
            return $stmt->fetchAll();
        }

        $stmt = null;
    }
}