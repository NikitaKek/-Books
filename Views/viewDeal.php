<table border = 1>
    <tr>
        <td><b>title</b></td>
        <td><b>Avtor</b></td>
        <td><b>Data pokypki</b></td>
        <td><b>imya pokypatela</b></td>
        <td><b>Magazin</b></td>
    </tr>
    <?php
    $result = DataBase::query("SELECT book.title,GROUP_CONCAT(author.name) as name, deal.date, customer.name AS customerName, deal.store
                                            FROM deal LEFT JOIN CustomerDealBook
                                                      ON  deal.id = CustomerDealBook.id_deal
                                                      LEFT JOIN book
                                                      ON book.id =  CustomerDealBook.id_book
                                                      LEFT JOIN bookauthor
                                                      on book.id = bookauthor.book_id
                                                      LEFT JOIN author
                                                      ON author.ID =  bookauthor.author_id
                                                      LEFT JOIN customer
                                                      ON customer.id = CustomerDealBook.id_customer
                                            GROUP BY deal.id");
    //название книги, перечисление авторов, когда была куплена, кем куплена и в каком магазине
    foreach ($result as $row): ?>
        <tr>
            <td><?=$row['title']?></td>
            <td><?=$row['name']?></td>
            <td><?=$row['date']?></td>
            <td><?=$row['customerName']?></td>
            <td><?=$row['store']?></td>
        </tr>
    <?php endforeach ?>
</table>