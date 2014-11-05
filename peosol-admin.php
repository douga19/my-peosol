<?php 
	session_start();

	if (!isset($_SESSION['admin'])) {
		header("location:php/connexion.php");
		exit;
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Peosol | Panel d'administration</title>
	<meta charset="utf-8">
    
    <!-- IMPORT ASSETS -->
    <link rel="shortcut icon" href="assets/img/picto.ico">
    <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="assets/css/admin.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <script type="text/javascript" src="assets/js/jquery.js"></script>
    <script type="text/javascript" src="assets/bootstrap/js/bootstrap.js"></script>

    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,400' rel='stylesheet' type='text/css'>
</head>
<body>
<div class="container-fliud">
	<!-- navbar -->
	<nav id="nav" class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="container-fluid">
		    <div class="navbar-header">
		    	<a class="navbar-brand" href="#home">
		    		<img src="assets/img/logo.png" alt="logo" title="Assistance Intelligente">
		    	</a>
		    </div>

		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav navbar-right">
				<li><a href="">Bienvenue <?php echo $_SESSION["admin"]; ?></a></li>
		        <li><a href="php/deconnexion.php">Deconnexion <span class="glyphicon glyphicon-log-out"></span></a></li>
		      </ul>
		    </div>
		</div>
	</nav>
	<!-- contenu -->
	<div class="row contenu">
		<div class="col-md-6 col-md-offset-3">
			<h1>Les messages reçus</h1>
			<?php include ("php/get-message.php"); ?>
		</div>
	</div>
</div>
</body>
</html>