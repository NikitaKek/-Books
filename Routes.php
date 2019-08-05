<?php
    Route::set('tableAuthor', function() {
        AuthorController::CreateView(tableAuthor);

    });

    Route::set('tableCustomer', function() {
                CustomerController::CreateView(tableCustomer);
    });


     Route::set('tableBook', function() {
                    BookController::CreateView(tableBook);
        });

     Route::set('viewbook', function() {
                viewBookController::CreateView(viewbook);
     });

     Route::set('viewDeal', function() {
                     viewBookController::CreateView(viewDeal);
          });

      Route::set('tableDeal', function() {
                     DealController::CreateView(tableDeal);
          });

    ?>