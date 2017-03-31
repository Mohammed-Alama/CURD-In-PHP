<?php
$connection = mysqli_connect('localhost', 'root', '', 'loginapp');

if (!$connection)
    {

        die("Sorry Connecting Is Feild..:(") . mysqli_error($connection);

    }



?>
