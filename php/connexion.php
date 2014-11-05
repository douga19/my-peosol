<!DOCTYPE html>
<html>
<head>
	<title>Peosol | Panel d'administration</title>
	<meta charset="utf-8">
    
    <!-- IMPORT ASSETS  -->
    <link rel="shortcut icon" href="../assets/img/picto.ico">
    <link rel="stylesheet" type="text/css" href="../assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/admin.css">
    <script type="text/javascript" src="../assets/js/jquery.js"></script>
    <script type="text/javascript" src="../assets/bootstrap/js/bootstrap.js"></script>

    <!-- IMPORT GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,400' rel='stylesheet' type='text/css'>
</head>
<body>
	<div class="container-fluid">
		<div id="form-wrapper" class="row col-md-4 col-md-offset-4">
			<div class="header">
				<img src="../assets/img/logo.png">
				<h3>Panel d'administration de my-peosol</h3>
			</div>
			<form role="form" method="POST" action="login.php">
			  	<div class="form-group">
				    <label for="login">Identifiant</label>
				    <input type="text" class="form-control" id="login" name="login" placeholder="" required>
			  	</div>
				  	<div class="form-group">
				    <label for="mdp">Mot de passe</label>
			   		<input type="password" class="form-control" id="mdp" name="mdp" placeholder="" required>
			  	</div>
			 	<button type="submit" class="btn btn-default">Connexion</button>
			</form>
		</div>
	</div>
</body>
</html>
