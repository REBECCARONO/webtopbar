<?php
include "functions.php";
$selection=$_REQUEST['action'];

switch($selection){
	
	case "login":
	login();
	break;
	
	case "aboutme":
	aboutme();
	break;
	
	case "archive":
	archive();
	break;
	
	case "signout":
	signout();
	break;
	
	case "experience":
	experience();
	break;
	
	case "gallary":
	gallary();
	break;
	
	case "interest":
	interest();
	break;
	

	
	
	}






?>