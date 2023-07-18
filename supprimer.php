<?php 

require 'connectionbd.php';

if (isset($_GET['user']) AND isset($_GET['id']) )
 {
    $id_propriete=$_GET['id'];

    $pseudo_proprio=$_GET['user'];


	$req=$dbconn->prepare("DELETE  FROM proprietes WHERE pseudo_proprio='$pseudo_proprio' AND id='$id_propriete'");
	$req->execute();


	header('Location: utilisateur.php?id=<?php echo $pseudo ?>');


}


?> 