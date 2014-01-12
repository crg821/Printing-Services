<?php

$method = $_SERVER['REQUEST_METHOD'];
if( strtolower($method) == 'post')
{
	echo "this is from post request";
}else{
	echo 'this is not from post request';	
}

?>