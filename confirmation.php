




<?php
try
{
    //connexion à la base de données
    $server = 'localhost';
    $username = 'root';
    $userpass = '';
    $dbname = 'Immo';
    
    $dbconn = new PDO("mysql:host=$server;dbname=$dbname", $username, $userpass);
    $dbconn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     
    if(isset($_POST['enregistrement']))
    {
        echo"Bonjour";
        $nom=$_POST['nom'];
        $prenom=$_POST['prenom'];
        $email=$_POST['email'];
        $telephone=$_POST['tel'];
        $age=$_POST['age'];
        $sexe=$_POST['sexe'];
        $password=$_POST['mdp'];
        $pseudo=$_POST['pseudo'];
    }
    
     
    function existePseudo($pseudo)
{   
    global $dbconn;
     
    $sql = "SELECT 1
            FROM utilisateurs
            WHERE pseudo = '$pseudo'";
     
    $res = $dbconn->query($sql);
    $row = $res->fetch();
     
    return !empty($row);
}
 
     
        
     
     
    if(existePseudo($pseudo) )
    {          
    
            header('Location: Pseudo.php' );
     
     }
      
     else
     {
         $req=$dbconn->prepare("INSERT INTO `utilisateurs`( `nom`, `prenom`, `email`,`tel`,`age`,`sexe`,`mdp`,`pseudo`) VALUES ('$nom','$prenom','$email','$telephone','$age','$sexe','$password','$pseudo')");
        $req->execute();
        echo" Félicitation  $prenom ! </br> Votre inscription a été enregistrer avec succes.";
    
       

      }
      
     
}  
      catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}
  
 ?>