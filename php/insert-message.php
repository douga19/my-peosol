<?php 
if (isset($_POST["nom"]) && isset($_POST["email"]) && isset($_POST["message"])) {
	$nom = $_POST["nom"];
	$mail = $_POST["email"];
	$message = $_POST["message"];

	$msg = "";
	$msg .= $nom." ";
	$msg .= $mail." ";
	$msg .= $message;

	require ("mysql-connect.php");
	$sql = "insert into message (id, nomClient, mailClient, contenu, dateReception) values( NULL, '".$nom."', '".$mail."', '".$message."', NOW())";

	if(mysql_query($sql)){
		echo "1";
	} else {
		echo "0";
	}
	
} else {
	echo "Erreur";
}




?>