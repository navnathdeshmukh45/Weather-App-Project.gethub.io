<?php
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password);

    // Check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
     echo "Success connecting to the db";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $visit = $_POST[' visit '];
    $comments = $_POST['comments'];
    $sql="INSERT INTO `feedbackform` (`sr.no.`, `$name`, `$email`, ` $visit`, `$Comments:`) VALUES ('1', ' ram  sham rote', 'ram344@gmail.com', 'yes', ' best  project ');"
    echo $sql;
    
?>
