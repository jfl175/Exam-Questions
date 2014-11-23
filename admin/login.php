<?php 
    $page_title = "Exam-Questions | Admin Login";
    $nav_title  = "Admin Login"
?>

<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title><?=$page_title?></title>
        <link rel="stylesheet" href="../css/foundation.css" />
        <style>
        	body, .panel
        	{
        		background: #333333;
        	}
        	body, h3
        	{
        		color: #AAAAAA;
        	}
            h3
            {
              margin-left: 15px;
              margin-right: 15px;
            }
            label
            {
              color: #AAAAAA;
              cursor: default;
            }
            footer
            {
                position: fixed;
                bottom: 0;
                left: 0;
                width: 100%;
                background: #333333;
            }
            footer p
            {
                text-align: right;
            }
            .custom
            {
                border: 0px;
            }
        </style>
    </head>
    <div class="fixed">
        <nav class="top-bar" data-topbar role="navigation" data-options="sticky-on: large" >
            <ul class="title-area">
                <li class="name">
                    <h1><a href="../../exam-questions/"><?=$nav_title?></a></h1>
                </li>
                <li class="divider"></li>
                <!-- <li class="toggle-topbar menu-icon"><a href="#"><span>menu</span></a></li> -->
            </ul>
        </nav> 
    </div>
    <body>
    <div class="row">
        <br><br><br><br><br><br><br><br><br>
        <div class="hide-for-small-only hide-for-medium-only">
            <br><br><br><br><br>
        </div>
        <div class="panel custom large-4 medium-6 small-11 small-centered columns">
            <form method="POST" action="<?$_SERVER['PHP_SELF']?>">
                <input type="text" placeholder="Username">                        
                <input type="password" placeholder="Password">
                <input type="submit" class="button small success" value="Login">
            </form>
        </div>
        <br><br><br><br><br><br><br>

    </div>
    <footer>
        <br>
        <div class="large-12 columns">
            <!-- <div class="large-6 columns"> -->
                <p>John<br>Copyright ©2014, All Rights Reserved</p>
            <!-- </div> -->
        </div>
        <script src="../js/vendor/modernizr.js"></script>
        <script src="../js/vendor/jquery.js"></script>
        <script src="../js/foundation/foundation.js"></script>
        <script src="js/foundation/foundation.topbar.js"></script>
        <script>
            $(document).foundation();
        </script>
    </footer>       
    </body>
</html>