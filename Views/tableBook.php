<?php

if($_POST) {
    $BookController = new BookController();
    //$BookController->addBook($_POST['title'], $_POST['author'], $_POST['numPages'], $_POST['price']);
    //$BookController->editBook($_POST['id'], $_POST['title'] ,$_POST['numPages'], $_POST['price']);
    BookController::delBook($_POST['id']);

}
?>