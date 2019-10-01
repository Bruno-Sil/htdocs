<?php

function error_handler($code, $message, $line, $file) {

	echo json_encode(array(
    
    "code"=>$code,
    "message"=>$message,
    "line"=>$line,
    "file"=>$file

	));
}

error_reporting("error_handler");

$total = 500 / 0;


?>