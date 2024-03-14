<?php
    //Logout file that destroys the session when logout hyperlink is pressed

    session_start();

    unset($_SESSION["sessionUser"]);
    //Frees all the variables currently being used by session - so sessionUser in this case as holds their email

    session_destroy();
    //Destroys the session

    header("location:blog.php");
    //Redirects to main page after session unset and destroyed

?>