<table border = 1>
    <tr>
        <td><b>title</b></td>
        <td><b>Kol-vo stranic</b></td>
        <td><b>Price</b></td>
        <td><b>Avtor</b></td>
    </tr>
<?php
$result = DataBase::querySELECT("SELECT book.title,book.numPages,book.price, GROUP_CONCAT(author.name) as name
                                          FROM book LEFT JOIN bookauthor
                                                ON  book.id = bookauthor.book_id
                                                  LEFT JOIN author
                                                  ON author.ID =  bookauthor.author_id
                                                GROUP BY book.id");

foreach ($result as $row): ?>
<tr>
    <td><?=$row['title']?></td>
    <td><?=$row['numPages']?></td>
    <td><?=$row['price']?></td>
    <td><?=$row['name']?></td>
</tr>
<?php endforeach ?>
</table>