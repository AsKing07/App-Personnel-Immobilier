<?php
session_start();
if(isset($_POST['email']) && isset($_POST['mdp']))
{
    // connexion à la base de données
    $db_username = 'root';
    $db_password = '';
    $db_name     = 'Immo';
    $db_host     = 'localhost';
    $db = mysqli_connect($db_host, $db_username, $db_password,$db_name)
           or die('could not connect to database');
    
    // on applique les deux fonctions mysqli_real_escape_string et htmlspecialchars
    // pour éliminer toute attaque de type injection SQL et XSS
    $email = mysqli_real_escape_string($db,htmlspecialchars($_POST['email'])); 
    $mdp = mysqli_real_escape_string($db,htmlspecialchars($_POST['mdp']));
    
    if($email !== "" && $mdp !== "")
    {
        $requete = "SELECT count(*) FROM utilisateurs where 
              email = '".$email."' and mdp = '".$mdp."' ";
        $exec_requete = mysqli_query($db,$requete);
        $reponse      = mysqli_fetch_array($exec_requete);
        $count = $reponse['count(*)'];
        if($count!=0) // nom d'utilisateur et mot de passe correctes
        {

            $server = 'localhost';
            $username = 'root';
            $userpass = '';
            $dbname = 'immo';
            
            try {
                $dbconn = new PDO("mysql:host=$server;dbname=$dbname", $username, $userpass);
                $dbconn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
            } catch (PDOException $e) {
                echo 'Echec de connexion : ' . $e->getMessage();
            }
            

            $req = $dbconn->prepare("SELECT * FROM utilisateurs WHERE email='$email'");
            $req->execute();
            $resultat = $req->fetchall(PDO::FETCH_OBJ);
            $value=$resultat[0];

           $_SESSION['username'] = $value->pseudo;
           header('Location: utilisateur.php');
        }
        else
        {
           header('Location: Connection.php?erreur=1'); // utilisateur ou mot de passe incorrect
        }
    }
    else
    {
       header('Location: Connection.php?erreur=2'); // utilisateur ou mot de passe vide
    }
}
else
{
   header('Location: Connection.php');
}
mysqli_close($db); // fermer la connexion
?>