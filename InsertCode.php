<?php

//create a variable and connect it to mysqli using localhost, your username and password
$connection = mysqli_connect("localhost","root",""); 
//calling DB with connection and and my DB name
$db = mysqli_select_db($connection, 'address-book');

if(isset($_POST['insertdata'])) //if I click the button(Save Data)
{
    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];
    $dob = $_POST['dob']; //calling all the fields from the form

    //giving a query 
    $query = "INSERT INTO `address-book` (`name`, `contact`, `address`, `dob`) VALUES ('$name', '$contact', '$address', '$dob')";
    $query_run = mysqli_query($connection, $query); //running the query

    if($query_run) //it the query is running then Data Saved
    {
        echo '<script> alert("Data Saved"); </script>';
        header('Location: index.php');
    }

    else //else Data Not saved
    {
        echo '<script> alert("Data Not Saved"); </script>';
    }
}

?>
