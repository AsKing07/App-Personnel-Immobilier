<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="utilisateur.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/font-awesome.css">
    <title>Se Connecter</title>
</head>


<style>
    nav 
  {
	overflow: hidden;
	background-color: #FFFAE1;
	
	width: 100%;
	opacity: 0.9;
  }

 
  header li 
  {
	float: right;
	font-size: 1.2em;
  }

  header li a 
  {
	text-decoration: none;
	display: block;
	text-align: center;
	padding: 18px 16px;
  }

  #logo 
  {
	font-family: 'Dancing Script', cursive;
	font-weight: bold;
	float: left;
  }



  ul {
    margin: 0;
    padding: 0;
  }
  li {
    list-style-type: none;
  }
  
  h2 {
      text-transform: uppercase;
      text-align: center;
      padding-top: 30px;
      font-size: 2em;
    }
    a 
    {
      text-decoration: none;
      color: black;
    }



.fa 
{
    padding: 20px;
    font-size: 30px;
    width: 50px;
    text-align: center;
    text-decoration: none;
  }

  #en_tete
    {
        display: flex;
        width: 100%;
	height: 300px;
	
	margin-bottom: 10px;
	
    }
    .ban
    { 
        padding-left: 28%;   
        width: 760px;
        height: 200px;
    }


.Connection
{
	text-align: center;
	border: 5px solid rgb(210, 210, 231);
	border-radius: 5%;
	width: 50%;
	height: auto;
	overflow: hidden;
}


.formulaire
{
    width:400px;
    margin:0 auto;
    margin-top:5%;
}

.formulaire form
{
    width:100%;
    padding: 30px;
    border: 1px solid #f1f1f1;
    background: #fff;
    box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}

.formulaire input[type=text], .formulaire input[type=password] 
{
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

.formulaire input[type=submit] 
{
    background-color: #53af57;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

.formulaire input[type=submit]:hover 
{
    background-color: white;
    color: #53af57;
    border: 1px solid #53af57;
}

.formulaire h1
{
    width: 38%;
    margin: 0 auto;
    padding-bottom: 10px;
}

.Connecter
{
	text-decoration: underline;
	color: blue;
}


footer
{
    background-color: #524A3A;
    color: #FFFAE1;
    padding: 20px 0 10px 0;
    text-align: center;
}

footer form
{
    margin: 0 auto ;
    max-width: 900px;
}

footer input, footer textarea, footer button
{
    border: none;
    width: 55%;
    padding: 15px 10px;
    margin: 1px 0;
    font-size: 1.2em;
    font-family: 'Advent Pro' , sans-serif;
    border-radius: 8px;
}

footer textarea
{
    height: 120px;
}

.submit
{
    font-size: 1.5em;
    background-color: #FFFAE1;
}

.submit:hover
{
    background-color: #e55039;
    color: #FFFAE1;
    cursor: pointer;
    transition: 0.3s ease-in-out;
}

#deuxiemeTrait
{
    height: 1px;
    width: 75%;
    background-color: #FFFAE1;
    margin: 60px auto;
}

#copyrightEtIcons {
    display: flex;
    margin-bottom: 20px;
    padding: 0 10%;
  }
  #copyright {
    width: 50%;
    text-align: left;
    color: #FFFAE1;
  }
  #icons {
    width: 50%;
    text-align: right;
  }
  #icons a {
    display: inline-block;
    padding: 0 15px;
    font-size: 1.3em;
    color: #FFFAE1;
  }
  #icons a:hover {
    transform: scale(1.5);
    transition: 0.1s;
  }

</style>






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



 <div class="formulaire">
     
           
            
             <!-- zone de connexion -->
            
            <form class="Connection" action="verification.php" method="POST">
                <h1>Connexion</h1>
                
                <label><b>Nom d'utilisateur</b></label>
                <input type="text" placeholder="Entrer l'email" name="email" required>

                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="mdp" required>

                <input type="submit" id='submit' value='CONNECTION' >
                <?php
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1 || $err==2)
                        echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                }
                ?>
                </form>
 </div>

 <?php include 'footer.php' ?>
     </body>
</html>