<?php 
	if (isset($_POST["login"]) && isset($_POST["mdp"])) {
		$login = $_POST["login"];
		$mdp = $_POST["mdp"];

		if($login == "admin" && $mdp == "123456"){
			session_start();
			$_SESSION["admin"] = "admin";
			header("location:../peosol-admin.php");
		}
	}
?>