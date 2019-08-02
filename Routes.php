<?php
    Route::set('tableAuthor', function() {
        AuthorController::CreateView(tableAuthor);

    });

    Route::set('tableCustomer', function() {
                tableCustomer::CreateView(tableCustomer);
    });


     Route::set('tableBook', function() {
                    BookController::CreateView(tableBook);
        });

     Route::set('viewbook', function() {
                viewbookController::Createview(viewbook);
     });

    ?>