<?php 
	if (isset($_SESSION["admin"])) {
		require ("mysql-connect.php");

		$sql = "select * from message m order by m.id desc";
		$req = mysql_query($sql) or die(mysql_error());

		$num_rows = mysql_num_rows($req);

		if($num_rows == 0){
			$message = "Aucun message reçu";
		} else {
			while($data = mysql_fetch_assoc($req)){
				$message = '<div class="panel panel-default">
        						<div class="panel-heading">
						          		<h3 class="panel-title">De: '.$data["nomClient"].'</h3>
						          		Mail: <a href="mailto:'.$data["mailClient"].'">'.$data["mailClient"].'</a></br>
						          		Reçu le: '.$data["dateReception"].'
        						</div>
	        					<div class="panel-body">
	        						'.$data["contenu"].'
						        </div>
					        	<input type="hidden" name="id" id="id" value='.$data["id"].' /> 
					      	</div>';
				echo $message;
			}
		}
		

	} else {
		header("location:../peosol-admin.php");
	}
 ?>