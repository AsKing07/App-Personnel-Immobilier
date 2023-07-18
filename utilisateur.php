<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="utilisateur.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/font-awesome.css">
    <title>Ma Page</title>
</head>
<body>
 <div id="tete">
  <header>
 
      <nav>
        <ul >
          <li id="logo" ><a href="#" style="font-family: 'Dancing Script', cursive;	font-weight: bold;font-size: 1.2em;">Soluce Immo</a></li>
          <li><a href="#contact">NOUS CONTACTER</a></li>
          <li><a href="inscription.php">INSCRIPTION</a></li>
          <li><a href="Connection.php">CONNECTION</a></li>
          <li><a href="#service">FAIRE LOUER/VENDRE</a></li>
          <li><a href="envedette.php">VEDETTE</a></li>
          <li><a href="accueil.php">ACCUEIL</a></li>
        </ul>
      </nav>
  </header>
 </div>

 <marquee behavior="scroll" direction="left">Bienvenue sur votre section. Depuis cette page, vous pouvez gérer vos propriétés commme vous le souhaitez.</marquee>


 <div id="content">
            <!-- tester si l'utilisateur est connecté -->
           


           <?php
                session_start();
                if(isset($_GET['deconnexion']))
                { 
                   if($_GET['deconnexion']==true)
                   {  
                      session_unset();
                      header("location:Connection.php");
                   }
                }
                else if($_SESSION['username'] !== ""){
                    $user = $_SESSION['username'];
                    // afficher un message
                    echo "<br>Bonjour $user, vous êtes connectés";
                     $pseudoutilisateur=$user;
                }
            ?>
  </div>          
            <br><br>




 
<div class="prop">
 <h1>LISTE DE VOS PROPRIETES</h1><br>  
    <table style="margin-left:30%;" class="tab" width="45%" border="" cellspacing="2" cellpadding="2" >
        <tr>
        	<th scope="col">Num Propriété</th>
            <th scope="col">Type Propriété</th>
            <th scope="col">Description</th>
            <th scope="col">Localisation</th>
            <th scope="col">Photo Propriété</th>
            <th scope="col">Modifier</th>
            <th scope="col">Suprimer</th>
            <th scope="col">Voir plus</th>
        </tr>


 <?php


require ('affichage.php');
	
        

        foreach ($resultat as $value) { ?>
            <tr>
                <td><?php echo $value->id?></td>
                <td><?php echo $value->type?></td>
                <td><?php echo $value->description?></td>
                <td><?php echo $value->localisation?></td>
                <td><img src="poster/<?php echo $value->image?>" width="45px" height="20px" ></td>
                <td><button><a href="modifier.php?user=<?php echo $pseudoutilisateur?>&id=<?php echo $value->id ?>">Modifier</a></button></td>
                <td><button><a href="supprimer.php?user=<?php echo $pseudoutilisateur?>&id=<?php echo $value->id ?>">Supprimer</a></button></td>
                <td><button><a href="detail.php?detail=<?php echo $value->id?>">Details</a></button></td>
                
            </tr>
        <?php
        }

        ?>
    </table>
</div>

    <br><br>


   <div class="ppte">
    <fieldset >
        <legend><h3>Pour ajouter une Propriété:</h4></legend><br>
        <form  action="enregistrement.php" method="POST" enctype= "multipart/form-data">
            <table >
                <tr>
                    <td> <label for="type">Type de Propriéte  : </label></td>
                    <td><input type="text" name="type" required><br></td>
                </tr>
                <tr>
                    <td><label for="description">Description : </label></td>
                    <td><input type="text" name="description" required><br></td>
                </tr>
                <tr>
                    <td><label for="localisation">Localisation : </label></td>
                    <td><input type="text" name="localisation" required><br></td>
                </tr>
                <tr>
                    <td><label for="image">Image  : </label></td>
                    <td><input type="file" name="image" required><br></td>
                </tr>
                <?php 
                
                
                
                    require 'connectionbd.php';


                    
                
                
                    $req = $dbconn->prepare("SELECT * FROM utilisateurs WHERE pseudo='$pseudoutilisateur'");
                    $req->execute();
                    $resultat = $req->fetchall(PDO::FETCH_OBJ);
                    $valuee=$resultat;
                
                
                
                
                
                
                foreach ($valuee as $result){ ?>
                <tr>
                   
                    <td><label for="login">Votre Pseudo : </label></td>
                    <td><input type="text" name="pseudo" value="<?php echo $result->pseudo ?>"  required><br></td>
                </tr>
                <?php } ?>
                

                <tr>
                    <td> <button type="submit" name="ajout">Ajouter</button><br></td>
                </tr>
               
            </table>
           
        </form>
    </fieldset>
    </div>

     <br>

           
            <div class="deco">
            <a  href='utilisateur.php?deconnexion=true'>Déconnexion</a>
            </div>
           
   
    <br>

    <?php include 'footer.php' ?>
     </body>
</html>