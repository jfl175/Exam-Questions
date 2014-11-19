        <div class="row">
        <br>
          <h3>Enter the details and get all the answers you want!</h3>
          <hr> 
        </div>
<?php
    if (isset($_POST['submit']))
    {
        $university             = $_POST['university'];
        $course                 = $_POST['course'];
        $stream                 = $_POST['stream'];
        $semester               = $_POST['semester'];
        $is_valid_university    = validate($university, 'university');
        $is_valid_course        = validate($course, 'course');
        $is_valid_stream        = validate($stream, 'stream');
        $is_valid_semester      = validate($semester, 'semester');
        
        if ($is_valid_university && $is_valid_course && $is_valid_stream && $is_valid_semester) 
        {
            $_SESSION   =   $_POST;
            var_dump($_SESSION);
            header("location: process_info.php");
        }
        else
        {
            echo "<script>alert('The details were not acceptable!');</script>";
        }
    }
    else
    {
        $university             = "";
        $course                 = "";
        $stream                 = "";
        $semester               = "";         
        $is_valid_university    = "";
        $is_valid_course        = "";
        $is_valid_stream        = "";
        $is_valid_semester      = "";
    }
?>
        <div class="row">
            <br>
            <div class="large-8 large-offset-2 columns">
              <div class="panel">
                <form method="post" action = "<?=$_SERVER['PHP_SELF']?>">
                  <div class="row collapse">
                  <label class="my_class" for="university">University</label>
                  <select name="university" required autofocus>
                    <?php
                        if (!isset($university)||empty($university)) 
                        {
                            echo '<option value="">Choose your University</option>';
                        }
                        else
                        {
                            echo '<option value="'.$university.'">'.$university.'</option>';
                        }
                    ?>
                    <option value="MDU">MDU</option>
                    <option value="IP">IP</option>
                  </select>

                  <label class="my_class" for="course">Course</label>
                  <select name="course" required>
                  <?php
                        if (!isset($course)||empty($course)) 
                        {
                            echo '<option value="">Choose your Course</option>';
                        }
                        else
                        {
                            echo '<option value="'.$course.'">'.$course.'</option>';
                        }
                    ?>
                    <option value="B. Tech.">B. Tech.</option>
                  </select>

                  <label class="my_class" for="stream">Stream</label>
                  <select name="stream" required>
                    <?php
                        if (!isset($stream)||empty($stream)) 
                        {
                            echo '<option value="">Choose your Stream</option>';
                        }
                        else
                        {
                            echo '<option value="'.$stream.'">'.$stream.'</option>';
                        }
                    ?>
                    <option value="CSE">CSE</option>
                    <option value="ECS">ECS</option>
                  </select>

                  <label class="my_class" for="semester">Semester</label>
                  <select name="semester" required>
                  <?php
                        if (!isset($semester)||empty($semester)) 
                        {
                            echo '<option value="">Choose your Semester</option>';
                        }
                        else
                        {
                            echo '<option value="'.$semester.'">'.$semester.'</option>';
                        }
                    ?>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                  </select>

                  <div style="display:inline-block;width: 49.6%;"><input type="submit" name="submit" class="small button success show-for-medium-up" style="width: 100%;" value="Get my question papers!"></div>
                  <div style="display:inline-block;width: 49.6%;"><input type="reset" name="reset" class="small button alert show-for-medium-up" style="width: 100%;" value="Reset"></div>
                  <input type="submit" name="submit" class="small button success show-for-small-only" style="width: 100%" value="Get my question papers!">
                  <input type="reset" name="reset" class="small button alert show-for-small-only" style="width: 100%" value="Reset">
                  </div>
                </form>
              </div>
            </div> 
        </div>