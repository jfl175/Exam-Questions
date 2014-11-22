<?php 
    $page_title = "Admin Login";
?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?=$page_title?></title>
    <link rel="stylesheet" href="../css/foundation.css" />
    <script src="../js/vendor/modernizr.js"></script>
    <style>
    	body, .panel
    	{
    		background: #222222;
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
    </style>
  </head>

<!--     <nav class="top-bar" data-topbar>
        <ul class="title-area">
          <li class="name">
            <h1>
              <a href="../examquestions/">
                
              </a>
            </h1>
          </li>
          <li class="toggle-topbar menu-icon"><a href="#"><span>menu</span></a></li>
        </ul>
    </nav>  -->
<body>
<div class="row">
<br><br><br><br>
    <div class="large-8 columns">
        <ul class="small-block-grid-1 medium-block-grid-3">
          <li>
            <dl class="accordion" data-accordion="myAccordionGroup">
              <dd class="accordion-navigation">
                <a href="#panel1c">Login</a>
                <div id="panel1c" class="content">
                  <div class="panel callout raduis">
                      
                  </div>
                </div>
              </dd>
              <dd class="accordion-navigation">
                <a href="#panel2c">Forgot Password</a>
                <div id="panel2c" class="content">
                    If you've forgotten password, please contact any other website adminstrator.
                </div>
              </dd>
            </dl>
          </li>
        </ul>
    </div>
</div>
<script src="../js/vendor/jquery.js"></script>
<script src="../js/foundation/foundation.js"></script>
<script src="../js/foundation/foundation.accordion.js"></script>
<script>
  $(document).foundation({
    accordion: {
      callback : function (accordion) {
        console.log(accordion);
      }
    }
  });
</script>
</body>