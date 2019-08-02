<?php

if($_POST) {

    CustomerController::addCustomer($_POST['id'], $_POST['title']);

}
?>