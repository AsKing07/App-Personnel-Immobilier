<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="inscription.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/font-awesome.css">
    <title>Nos Propriétés Vedettes</title>
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







    <div class="formulaire" >

         <h4>Pour verifier votre pseudo</h4>
         <form  method="POST" action="Pseudo.php"  >
         <label for="pseudo">Pseudo:</label><br> <input type="text" name="pseudo" id="pseudo" placeholder="Ex:Bigman" required> <br>
         <input type="submit" value="Verifier le pseudo" ><br><br>
        
        </form>
        <br><br>


     <h4> Abonnez-vous à la Newlesters: <strong>Inscrivez-vous!</strong></h4>
        <form class="Inscription" method="post" action="confirmation.php">
           
             <p><strong class="Inscrire">S'inscrire </strong><br>
                 Veuillez renseigner les champs ci-après pour finaliser votre inscription.<br>
               
                 <label for="Nom">Nom:</label><br> <input type="text" name="nom" id="Nom" placeholder="Ex:MACRON"  required><br><br>
                 
                 <label for="prenom">Prénom:</label><br> <input type="text" name="prenom" id="prenom" placeholder="Ex:Emmanuel" required><br><br>

                 <label for="pseudo">Pseudo:</label><br> <input type="text" name="pseudo" id="pseudo" placeholder="Ex:Bigman" required><br><br>
               
                 <label for="email">E-mail:</label><br> <input type="email" name="email" id="email" placeholder="Ex:Charbelsnn@gmail.com"required><br><br>
         
                 <label for="Téléphone">Numéro de Téléphone:</label> <br> <input type="tel" name="tel" id="Téléphone" placeholder="Ex:+22965861948"><br><br>
         
                 <label for="Age">Age:</label><br><input type="number" ; name="age" id="Age" min="10"required> <br>
                 <br>

                 <label for="Sexe">Sexe:</label><br>
                 <input type="radio" id="Masculin" value="Masculin" name="sexe">  
                 <label for="sexe">Masculin</label><br>  
                 <input type="radio" id="Feminin" value="Féminin" name="sexe"> 
                 <label for="sexe">Feminin</label><br><br>
          
          
                  <label for="mdp"> Mot de passe:</label><br><input name="mdp" type="password" id="mdp"required><br><br>
               
                <br><br>
                <input type="submit" name="enregistrement" value="Valider l'inscription">
                <input type="reset" value="Réinitialiser le formulaire">
                </form>
                <p>En confirmant votre inscription vous acceptez les <a href="#">Termes et Conditions d'Utilisation</a></p>
     </div>

      <?php include 'footer.php' ?>




     </body>
</html>