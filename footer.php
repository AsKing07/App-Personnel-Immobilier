<footer>
      <h2 id="contact">Contactez-nous</h2>
      <form method="post">
        <input name="nom" type="text" placeholder="Nom" required>
        <input name="email"type="email" placeholder="E-mail" required>
        <textarea name="msg" placeholder="Votre message ici..." required></textarea>
        <input class="submit" type="submit" onclick="myfunction()">
      </form>
      <div id="deuxiemeTrait"></div>
      <div id="copyrightEtIcons">
        <div id="copyright">
          <span>© fromSoluceImmo(); 2022 Tous droits Réservés</span>
        </div>
        <div id="icons">
          <a href="https://wa.me/22966309493/?text=Bonjour%20SolucImmo.%20Je%20voudrais%20me%20me%20renseigner%20sur%20vos%20services%20immobiliers."><i class="fa fa-whatsapp" style="color:green"></i></a>
          <a href="https://web.facebook.com/me/"><i class="fa fa-facebook" style="color:blue"></i></a>
          <a href="mailto:soluceimmo@gmail.com"><i class="fa fa-google" style="color:red;"></i></a>

        </div>
          
      </div>

    </footer>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="func.js"></script>

    
   
         <?php
         if (isset($_POST['msg']) and isset($_POST['email']) and isset($_POST['nom']))
          {
    $to      = 'soluceimmo@gmail.com';
    $message = $_POST['msg'];
    $from_email=$_POST['email'];
    $from_user =$_POST['nom'];

     $headers = "From: $from_user <$from_email>\r\n".   "MIME-Version: 1.0" . "\r\n" .
      "Content-type: text/html; charset=UTF-8" . "\r\n";

    if(mail($to, $message, $headers))
        {
          echo "<script>alert(\"Votre message a bien été envoyé.Merci!\")</script>";
        }
     else
         {
          echo "<script>alert(\"Votre message n'a pas pu être envoyé.\")</script> ";
         }
         }
            ?>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="func.js"></script>