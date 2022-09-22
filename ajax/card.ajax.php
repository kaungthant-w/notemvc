<?php

require_once "../controllers/cardController.php";
require_once "../models/cardModel.php";

class AjaxCard {
    public $idCard;
    public function ajaxEditCard(){
        $item = "id";
        $value = $this->idCard;
        $response = CardController::ctrlShowCard($item, $value);

        echo json_encode($response);
    }
}


// edit card
if(isset($_POST["idCard"])){
    $card = new AjaxCard;
    $card->idCard = $_POST["idCard"];
    $card->ajaxEditCard();
}