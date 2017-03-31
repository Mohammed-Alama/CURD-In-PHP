<?php


function Show_Id_Of_Data()
{
    global $connection;

    $query = "SELECT * FROM users ";
    $result= mysqli_query($connection, $query);



    while($row = mysqli_fetch_assoc($result))
    {

        $id = $row["user_id"];
        echo $id;

        echo "<option value='$id'>$id</option>";
        echo "There Is An Error ";
    }

}

function Create_Data()
{
    global $connection;

    if(isset($_POST['submit']))
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
    }

    $query  = "INSERT INTO users (user_name , password)
              VALUES ('$username' , '$password') ";

    $result = mysqli_query($connection, $query);


    if (!$result)
    {
        die( 'Query Failed' . mysqli_error($query));
    }
}

function Read_Data()
{
    global $connection;

    $query = "SELECT * FROM users";

    $result=mysqli_query($connection,$query);

    if(!$result)
    {
        die( 'Query Failed');
    }



    while($row = mysqli_fetch_assoc($result))
    {

        print_r($row);
    }

}

function Update_Data()
{
    global $connection;

    if(isset($_POST['submit']))
    {
        $user_name = $_POST['username'];
        $password = $_POST['password'];
        $id = $_POST['id'];

        $query = "UPDATE users SET ";
        $query .= "user_name = '$user_name', ";
        $query .= "password = '$password' ";
        $query .= "WHERE user_id = $id ";

        $result = mysqli_query($connection, $query);

        if (!$result)
        {
            die("Query Failed Thare Is An Error In connection " . mysqli_error($connection));
        }
        else
        {
            echo 'The Databases Updated';
        }
    }
}

function Delete()
{
    global $connection;

    if(isset($_POST['submit']))
    {
        $user_name = $_POST['username'];
        $password = $_POST['password'];
        $id = $_POST['id'];

        $query = "DELETE FROM users ";
        $query .= "WHERE user_id = $id ";

        $result = mysqli_query($connection, $query);

        if (!$result)
        {
            die("Query Failed Thare Is An Error In connection " . mysqli_error($connection));
        }

    }
}

?>
