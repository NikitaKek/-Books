<?php
__autoload('Customer');
if($_POST) {

    //CustomerController::addCustomer($_POST['name']);
    //CustomerController::deleteCustomer($_POST['id']);
    CustomerController::editCustomer($_POST['id'], $_POST['name']);
}

?>