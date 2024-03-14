<?php

    session_start();  

    if(!isset($_SESSION["sessionUser"])){ 

        header("location:blog.html");  

    } else {  

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="reset.css">
    <link rel="stylesheet" type="text/css" href="blogpost.css">
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

    <p style = "text-align: left; position: absolute; right: 87%; top: 20%;">
        Welcome <?php echo($_SESSION["sessionUser"]); ?>!
    </p>

    <a href="logout.php" style = "text-align: left; position: absolute; right: 92%; top: 22%;"><u>
        Logout
    </u></a>

    <form id="blogdetails" action="blogsubmission.php" method="post">

        <br>

        <h2 style="text-align: center; ">
            Add Blog
        </h2>

        <br>

        <textarea placeholder="Title" id="blogtitle" name="Blogtitle"></textarea>

        <br>

        <textarea placeholder="Enter text here" id="blogtext" name="Blogtext"></textarea>

        <button type="button" onclick="ClearFields()" style="text-align: center; position: absolute; right: 53%; top: 69%;">Clear</button>

        <button type="submit" id="Submit" name="Submit" style="text-align: center; position: absolute; right: 50%; top: 69%;">Submit</button>

        <script src="clearbutton.js"></script>  

    </form>

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




<?php
    }
?>