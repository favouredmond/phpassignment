<?php

include 'dbconnect.php';

if(!empty($_POST['email'])){
    $email = $_POST['email'];
    $first_name = $_POST['first_name'];
    $username = $_POST['username'];
    $password = $_POST['password'];
   
    $last_name = $_POST['last_name'];
    $phonenumber = $_POST['phonenumber'];
    $address = $_POST['address1'];
    $description = $_POST['description1'];

    //insert

    $sql ="INSERT INTO user_table( username, first_name, last_name, password, email, phonenumber,address, description)
    VALUES('$username','$first_name','$last_name','$password','$email','$phonenumber','$address','$description');";
    if(mysqli_query($conn, $sql) === TRUE){
        echo 'Your form was submitted successfully';
    }
    else{
        echo 'your form was not submitted';
    }
}

// else{
//     echo 'All field must be field completely';

// else{
//     echo "your";
// }



?>