<?php

require_once "controllers/templateController.php";
require_once "controllers/cardController.php";

require_once "models/templateModel.php";
require_once "models/cardModel.php";

$ctrlTemplate = new templateController();
$ctrlTemplate->ctrlTemplate();