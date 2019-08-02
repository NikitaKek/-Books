<form action="" method="get">
<table border = 1>

    <tr>

        <td><b>Imia avtora</b></td>
        <td><b>DATA ROJDENIYA</b></td>
    </tr>
    <?php
    $result = DataBase::querySelect('SELECT * FROM author');
    foreach ($result as $row): ?>
        <tr>
            <td><?=$row['name']?></td>
            <td><?=$row['date']?></td>
            <td><a href="tableAuthor?onUpdate=<?=$row['ID']?>">Edit</a></td>
            <td><a href="tableAuthor?onDelete=<?=$row['ID']?>">Delete</a></td>
        </tr>
</form>
    <?php endforeach ?>
    <?php

    if ($_POST && isset($_GET['onUpdate'])) {
        AuthorController::editAuthor($_GET['onUpdate'], $_POST['name'], $_POST['date']);
    }

    if (isset($_GET['onDelete'])) {
        AuthorController::delAuthor($_GET['onDelete']);
    }
    if($_POST && !isset($_GET['onUpdate'])) {
        AuthorController::addAuthor($_POST['name'], $_POST['date']);
    }
    ?>
    <form action="" method="post">
        <table border = 1>

            <tr>
                <td><b>Imia avtora</b></td>
                <td><input type="text" name="name"></td>
                <td><b>Data Rozhdenia</b></td>
                <td><input type="text" name="date"></td>
            <tr>
                <td colspan="2"><input type="submit" value="Dobaviti"></td>
            </tr>
            </tr>
        </table>
    </form>
    <a href="tableAuthor">Obnovit Stranizu</a>
</table>

