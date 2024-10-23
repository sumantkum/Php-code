<?php
    // error handler function
    function customError($errno, $errorstr){
        echo"<b> Error </b>". $errno ."". $errorstr ."";
    }

    // set error handler
    set_error_handler("CustomError");

    // trigger error
    echo ($test);

    echo "</br>";

    $test = 2;
    if($test >= 1){
        trigger_error("value must be 1 or below");
    }
    if($test >= 1){
        trigger_error("User lavel error warning: ", E_USER_WARNING);
    }
    if($test >= 1){
        trigger_error("value must be 1 or below", E_USER_ERROR);
    }
    if($test >= 1){
        trigger_error("value must be 1 or below", E_USER_NOTICE);
    }



?>