<?php

    $servername = "127.0.0.1";
    $username = "root";
    $password = "";
    $dbname = "login";
    
    $conn = new mysqli($servername, $username, $password, $dbname); 

    //Make a connection with the database

    if($conn -> connect_error){
        die("Connection Failed");
    }

    if(!mysqli_select_db($conn, $dbname))  
    {  
        die('Failed to connect to database');  
    }  

    $select = mysqli_query($conn, "SELECT * FROM user WHERE email = '".$_POST['email']."' AND password = '".$_POST['password']."'");

    //Select the database entry using the users inputted details 

    if(mysqli_num_rows($select)) {
        //If the entry exists then start a session with the users email as their name

        $email = $_POST['email'];

        session_start();

        $_SESSION['sessionUser'] = $email;

        header("refresh:0; url=blogpost.php");
        //Redirect page to blog posting page

    } else {
        //If it doesnt exist then remain on same page
        header("refresh:0; url=blog.php");

    }


?>