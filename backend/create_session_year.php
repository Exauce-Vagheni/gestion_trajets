<?php 
session_start();
if(isset($_GET['year'])){
	$_SESSION['year']=htmlspecialchars($_GET['year']);
	header("location:liste_voyageurs.php");
}

?>