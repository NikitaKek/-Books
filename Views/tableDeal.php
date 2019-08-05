<?php
__autoload('Deal');


if($_POST) {

    //DealController::addDeal($_POST['date'], $_POST['store']);
    DealController::deleteDeal($_POST['id']);
    //DealController::editDeal($_POST['id'],$_POST['date'], $_POST['store']);
}

