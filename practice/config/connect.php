<?php 

	// connecting to database
    $conn = mysqli_connect('localhost', 'adam', 'test', 'superstars');

    // checking connection
    if (!$conn){

        echo 'Database connection error: ' . mysqli_connect_error();
    }


 ?>