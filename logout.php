<?php 

	session_start();

	unset($_SESSION["user_portal"]);

	header("location: http://omeucandidato.com/");

 ?>