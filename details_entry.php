<?php
$servername="localhost";
$username="root";
$password="";
$database_name="database123";

// establish a connection
$conn=mysqli_connect($servername,$username,$password,$database_name);

// check the connection
if(!$conn) 
{
    die("Connection Failed:" .mysqli_connect_error());
}

// if(isset($_POST[`save`]))  // on submission
// {
    $first_name = $_POST[`first_name`];
    $last_name = $_POST[`last_name`];
    $gender = $_POST[`gender`];
    $email = $_POST[`email`];
    $phone = $_POST[`phone`];

    $sql_query = "INSERT INTO entry_details(first_name,last_name,gender,email,phone) VALUES ('$first_name','$last_name','$gender','$email','$phone')";

    if(mysqli_query($conn, $sql_query)) 
    {
       echo "New details inserted successfully!" ;
    } 
    else
    {
        echo "Error: " .$sql . "". mysqli_error($conn);
    }

    mysqli_close($conn);
// }
?>
