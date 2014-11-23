<?php
    $page_title="Exam Questions";
    session_start();
    if (isset($_SESSION)) 
    {
        session_destroy();
        session_start();
    }
    require_once("header.php");
    require_once("functions.php");
    require_once("home.php"); 
    require_once("footer.php");
?>