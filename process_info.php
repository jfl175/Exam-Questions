<?php
    session_start();
    if (!isset($_SESSION['submit'])||empty($_SESSION['submit']))
    {
    	session_destroy();
    	header("location: ../examquestions");
    }
    else
    {
    	var_dump($_SESSION);
        $university = $_SESSION['university'];
        $course     = $_SESSION['course'];
        $stream     = $_SESSION['stream'];
        $semester   = $_SESSION['semester'];
        
        require_once('my_sql_config.php');

        // Name of the table
        $table = "question_paper";

        $query = "select * from $table where university = $university and 
        course = $course and stream = $stream and semester = $semester";

        if ($stmt = $mysqli->prepare($query))
        {
            $stmt->execute();

            $stmt->bind_result($)
        }



    }
    //check all the inputs again
    //perform sql quesries
    //send sql data to dynamic page creator
    //id aid university course stream subject semester date_added
    //id qpid question_no. sub_question question answer date_added


    //admin panel
    //users creation, admin, normal, password change, permissions change
    //content adding, modifying and deleting
?>