<?php
	// configuration
	require("../includes/config.php"); 

	if($_SERVER["REQUEST_METHOD"] == "GET") {
		if(isset($_GET["SECRET"])) {
			// var_dump($GLOBALS); 
			// --> render("email_form.php", array("title" => "Email Form")); 
		}
		die(); 
	} else if ($_SERVER["REQUEST_METHOD"] == "POST") {
		var_dump($GLOBALS); 
		die(); 
	}
?>