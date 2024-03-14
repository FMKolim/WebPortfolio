<?php

    $servername = "127.0.0.1";
    $username = "root";
    $password = "";
    $dbname = "blogdetails";

    $conn = new mysqli($servername, $username, $password, $dbname); 

    //Connects to database

    if($conn -> connect_error){
        die("Connection Failed");
    }

    if(!mysqli_select_db($conn, $dbname))  
    {  
        die('Failed to connect to database');  
    }  

    //If statements to die if failed to connect to the database

    $title = $_POST['Blogtitle'];
    $text = $_POST['Blogtext'];
    $time = date("h:i:sa");
    $date = date("Y/m/d");

    //Some variables storing the form data such as its title and text as well as date and time in UMT timezone

    $sql = "INSERT INTO `content` (`ID`, `title`, `text`, `time`, `date`) VALUES ('','$title','$text','$time','$date')";

    //If connected to database insert the data into the table content 

    $result = mysqli_query($conn, $sql);

    //mysqli_query used to add the data to table which is located within the $conn database

    if($result == true){
        header("location:blog.php");
    } else {
        header("location:blogpost.php");
    }

    //If managed to store into database then redirect to main blog page where it will be outputted else stay on blog writing page

?>