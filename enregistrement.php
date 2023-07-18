<?php

 require 'connectionbd.php';

	$req = $dbconn->prepare("SELECT * FROM proprietes ORDER BY id ASC");
	$req->execute();
	$resultat = $req->fetchall(PDO::FETCH_OBJ);


 if (isset($_POST['ajout'])) {

 	
    $pseudo= $_POST['pseudo'];
  	$type = $_POST['type'];
    $description = $_POST['description'];
    $localisation = $_POST['localisation'];
    $nom_image=$_FILES["image"]["name"];
    $tmpnom= $_FILES["image"]["tmp_name"];
    move_uploaded_file($tmpnom, "poster/$nom_image");
    
 
          $req = $dbconn->prepare("INSERT INTO proprietes (`type`,`description`,`localisation`,`image`,pseudo_proprio) VALUES('$type','$description','$localisation','$nom_image', '$pseudo')");
			$req->execute();
			$req->closeCursor();

			header('Location: utilisateur.php?id=<?php echo $pseudo ?>');

        

        echo 'Ajout éffectué avec succès ! <br> ';
   }
