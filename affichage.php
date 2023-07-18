<?php 
	
	require 'connectionbd.php';


    
	$req = $dbconn->prepare("SELECT * FROM proprietes WHERE pseudo_proprio='$pseudoutilisateur' ORDER BY id ASC");
	$req->execute();
	$resultat = $req->fetchall(PDO::FETCH_OBJ);
	
 

 
?>
