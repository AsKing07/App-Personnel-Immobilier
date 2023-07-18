<?php 

require 'connectionbd.php';


if (isset($_GET['user']) and isset($_GET['id'])) {

	$pseudo=$_GET['user'];
    $id_propriete=$_GET['id'];


	$req = $dbconn->prepare("SELECT * FROM proprietes WHERE pseudo_proprio='$pseudo' AND id='$id_propriete' ");
	$req->execute();
	$resultat = $req->fetchall(PDO::FETCH_OBJ);
	$value=$resultat[0];


}

if (isset($_POST['modifier'])) {

    $pseudo=$_POST['pseudo_proprio'];
	$nom_image=$_FILES["image"]["name"];
    $tmpnom= $_FILES["image"]["tmp_name"];
    move_uploaded_file($tmpnom, "poster/$nom_image");

	$req=$dbconn->prepare("UPDATE `proprietes` SET `type`='{$_POST['type']}',`description`='{$_POST['description']}',`image`='$nom_image',`localisation`='{$_POST['localisation']}' WHERE pseudo_proprio='$pseudo'");
	$req->execute();


	header('Location: utilisateur.php?id=<?php echo $pseudo ?>');

}







?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
    <?php 
      $pseudo=$_GET['user'];
      ?>
	<h1>MODIFIER LE PRODUIT</h1><br>
    <fieldset>
        <legend>Modifier votre article</legend><br>
        <form action="" method="POST" enctype= "multipart/form-data">
            <table>
                <tr>
                    <td> <label for="type">Type Propriété : </label></td>
                    <td><input type="text" name="type" value="<?php echo $value->type ?>" required><br></td>
                </tr>
                <tr>
                    <td><label for="description">Description : </label></td>
                    <td><input type="text" name="description" value="<?php echo $value->description ?>" required><br></td>
                </tr>
                <tr>
                    <td><label for="localisation">localisation : </label></td>
                    <td><input type="text" name="localisation" value="<?php echo $value->localisation ?>" required><br></td>
                </tr>
                <tr>
                    <td><label for="image">Image Propriété : </label></td>
                    <td><input type="file" name="image" value="<?php echo $value->image ?>" required ><br></td>
                </tr>
                <tr>
                    <td><label for="proprio">Votre Pseudo : </label></td>
                    <td><input type="text" name="pseudo_proprio" value="<?php echo $pseudo ?>" required><br></td>
                </tr>
               
            </table>
            <button type="submit" name="modifier">Modifier</button><br>
        </form>
    </fieldset>
</body>
</html>