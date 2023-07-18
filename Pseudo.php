<?php
if(isset($_POST['pseudo']))
{
try
{
    //connexion à la base de données
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO('mysql:host=localhost;dbname=immo', 'root', '', $pdo_options);
     
    $pseudo = $_POST['pseudo'];
     
    function existePseudo($pseudo)
{   
    global $bdd;
     
    $sql = "SELECT 1
            FROM utilisateurs
            WHERE pseudo = '$pseudo'";
     
    $res = $bdd->query($sql);
    $row = $res->fetch();
     
    return !empty($row);
}
 
     
        
     
     
    if(existePseudo($pseudo) )
    {          
    ?>
            <p>ATTENTION Ce Pseudo est déjà utilisé. Veuillez le changer !</p>
     <?php
     }
      
     else
     {
          echo'Vous pouvez utiliser ce Pseudo!';
     }
}  
      catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}
}
else
{
    ?>
    <p>ATTENTION Ce Pseudo est déjà utilisé. Veuillez le changer !</p>
<?php
}
 ?>