<?php
@session_start();
	if (!isset($_SESSION["id_admin"]) AND !isset($_SESSION["id_percepteur"])){
		header("location:index.php");
	}else{
		if (!isset($_SESSION["year"])) {
			header("location:liste_annees.php");
		}
	}
?>