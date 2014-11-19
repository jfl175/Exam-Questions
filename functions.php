<?php
    // function to check if the selected details are valid or not
    function validate($element,$type)
    {
        if(empty($element)||!isset($element))
        {
            $test = false;
        }
        else
        {
            switch($type)
            {
                case 'university':
                {
                    if ($element === 'MDU'|| $element === 'IP') 
                        $test = TRUE;
                    else
                        return FALSE;
                }
                break;
                case 'course':
                {
                    if($element === 'B. Tech.')
                        $test = TRUE;
                    else
                        return FALSE;
                }
                break;
                case 'stream':
                {
                    if ($element === 'CSE'||$element === 'ECS')
                        $test = TRUE;
                    else
                        return FALSE;
                }
                break;
                case 'semester':
                {
                    if ($element >= 1 && $element <= 8) 
                        $test = TRUE;
                    else
                        return FALSE;
                }
                break;
            }
        }
        if($test)
            return TRUE;
        else
            return FALSE;
    }

    function sign($var)
    {
        if(isset($_POST['submit']))
        {   if($var)
                return '<font color = "darkgreen">' . '&#10004' . '</font>';
            else
                return '<font color = "red">' . '&#10006' . "\tNot valid!" . '</font>' ;
        }
    }
?>