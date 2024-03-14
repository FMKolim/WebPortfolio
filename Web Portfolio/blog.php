<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="reset.css">
    <link rel="stylesheet" type="text/css" href="blog.css">
    <title>Blog</title>
</head>
<body>

    <header>

        <br>

        <nav><p id="headerlinksright">
            <a href="introduction.html"> Home &nbsp; </a> <a href="aboutme.html"> About Me &nbsp; </a> <a href="education.html"> Education &nbsp;</a> <a href="http://localhost/blog/blog.php"> Blog &nbsp; </a> </a> <a href="portfolio.html"> Portfolio &nbsp; </a> <a href="#footer"> Contacts </a>
        </p></nav>

        <h1>
            𝑀𝑜𝓁𝓁𝒶 𝐹𝒶𝒽𝒶𝒹 <br>
            &nbsp;&nbsp;&nbsp;𝒦𝑜𝓁𝒾𝓂
        </h1>

    </header>

    <aside id="loginfunction">

        <h2 style="text-align: center;">
            &nbsp;&nbsp;&nbsp;Login Menu
        </h2>
        
        <form action="http://localhost/Blog/Login.php" method="post">

            <fieldset>

                <label>
                    Email
                </label>

                <p>
                    <input type="email" name="email" placeholder="Enter email address" required>
                </p>
                

                <br>
    
                <label>
                    Password
                </label>

                <p>
                    <input type="password" name="password" placeholder="Enter password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
                </p>

                <br>

                <p>
                    Password must contain:
                    <ul>
                        <li>
                            A lower case letter
                        </li>

                        <li>
                            An upper case letter
                        </li>

                        <li>
                            A number
                        </li>

                        <li>
                            Minimum of 8 characters
                        </li>
                    </ul>
                </p>

                <br>

                <input type="submit" name = "login" value="Log in">

                <input type="reset" value="Clear Form">

            </fieldset>

        </form>

        <br>

    </aside>


    <div id="blogposts" >
        Blog Posts:

        <?php

            echo "<br>";

            $servername = "127.0.0.1";
            $username = "root";
            $password = "";
            $dbname = "blogdetails";

            $conn = new mysqli($servername, $username, $password, $dbname); 

            if($conn -> connect_error){
                die("Connection Failed");
            }

            if(!mysqli_select_db($conn, $dbname))  
            {  
                die('Failed to connect to database');  
            } 

            //Connect to database if failed to do so then die and output error message

            $idArray = array();

            //Create an arrya variable

            $result = mysqli_query($conn, "SELECT `id` from content");

            while($row = mysqli_fetch_assoc($result)){

                $idArray[] = $row['id'];

            }

            //For every ID entry in the database save into array defined earlier


            $temp;

            for($i = 0; $i < sizeof($idArray); $i++){

                for($j = 0; $j<sizeof($idArray)-$i-1; $j++){

                    if($idArray[$j] < $idArray[$j+1]){

                        $temp = $idArray[$j];

                        $idArray[$j] = $idArray[$j+1];

                        $idArray[$j+1] = $temp;

                    }

                }

            }

            //Bubble sort algorithm that gets the array value that puts the highest ID valued one first, which will post the most recent blog entry first.

            for($i = 0; $i < sizeof($idArray); $i++){

                $sql = "SELECT * FROM content WHERE `id` = $idArray[$i] ";

                $result = mysqli_query($conn, $sql);

                while($row = mysqli_fetch_assoc($result)){
                    echo "<br>";
                    echo "<p style = 'text-decoration: underline;'>" . $row['title']. "<p style = 'text-align:right;'>" . $row['time']. " " . $row['date']. "</p>"; 
                    echo "<hr>";
                    echo "<p style='text-decoration: none;'>" . $row['text']. "</p>";
                    echo "<br>";
                }

            }

            //After array has been bubble sorted, for every element in array get its ID, compare with database ID's and print it out to the screen for user

        ?>
    </div>
    

    <footer id="footer">
        <br>
        <br>
        <hr>

        <p id="footerleft">
            © 2022 Molla Fahad Kolim
        </p>

        <p id="footerright">
            Email - fahadkolim@gmail.com 
        </p>

        <br>

        <p id="footerright">
            Github - https://github.com/FMKolim 
        </p>  
        
        <br>

        <p id="footerright">
            Phone - +447379144860 
        </p>

        <br>
        <br>
        
    </footer>


    
</body>
</html>