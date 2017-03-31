<?php

    include "connection.php";
    include "Query.php";

?>


    <html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Login Read</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>

    <body>
        <div class="container">
            <div class="col-sm-6">
                <h1 class="text-center">Read</h1>
                <pre>
                    <?php
                        Read_Data();
                    ?>
                </pre>

            </div>
        </div>
    </body>

    </html>
