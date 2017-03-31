<?php
    include "Connection.php";
    include "Query.php";
    Create_Data();
?>
    <html lang="en">

    <head>

        <meta charset="utf-8">
        <title>Login Create</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


    </head>

    <body>

        <div class="container">

            <div class="col-sm-6">
                <h1 class="text-center">Create</h1>
                <form action="" method="post">


                    <div class="from-group">
                        <label for="username">User Name</label>
                        <input type="text" name="username" class="form-control">
                    </div>

                    <div class="from-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control">
                    </div>

                    <input class="btn btn-primary" type="submit" name="submit" value="Create">

                </form>

            </div>

        </div>

    </body>

    </html>
