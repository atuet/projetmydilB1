<?php
session_start();

  $bdd = new PDO('mysql:host=127.0.0.1;dbname=phpmyadmin', 'root', '');

            if(isset($_POST['valider'])) {
              $mailconnect=$_POST['mail'];
              $mdpconnect=$_POST['password'];
               if(!empty($mailconnect) AND !empty($mdpconnect)) {
                  $requser = $bdd->prepare("SELECT * FROM utilisateur WHERE mail = ? AND password = ?");
                  $requser->execute(array($mailconnect, $mdpconnect));
                  $userexist = $requser->rowCount();
                  if($userexist == 1) {
                     $userinfo = $requser->fetch();
                     $_SESSION['id'] = $userinfo['id'];
                     $_SESSION['nom'] = $userinfo['nom'];
                     $_SESSION['prenom'] = $userinfo['prenom'];
                     $_SESSION['mail'] = $userinfo['mail'];
                     $_SESSION['classe'] = $userinfo['classe'];
                     $_SESSION['type'] = $userinfo['type'];
                     header("Location: acceuil.php");
                  } else {
                     $erreur = "Mauvais mail ou mot de passe !";
                  }
               } else {
                  $erreur = "Tous les champs doivent être complétés !";
               }
            }


?>  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection"/>
      <link rel="stylesheet" type="text/css" href="styleau.css"/>
<title>Connexion</title>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
      <!--Import jQuery before materialize.js-->
      <ul id="dropdown1" class="dropdown-content">
        <?php if (isset($_SESSION['id'])): ?>
          <li><a class="modal-trigger blue-text" href="#profil1">Mon profil</a></li>
          <li><a class="modal-trigger blue-text" href="deconnexion.php">Me deconnecter</a></li>

          <?php else: ?>
            <li><a href="connexion.php" class="blue-text">Me connecter</a></li>
            <li><a href="creationcompte.php" class="blue-text">Créer un compte</a></li>
        <?php endif; ?>

      </ul>
      <?php if (isset($_SESSION['id'])): ?>
          <?php if ($_SESSION['type'] == "admin"): ?>
            <ul id="dropdown2" class="dropdown-content">
              <li><a href="gererproduits.php" class="blue-text">Gérer les produits</a></li>
              <li><a href="gererrequetes.php" class="blue-text">Gerer les demandes</a></li>
            </ul>
          <?php endif; ?>
      <?php endif; ?>
      <nav>
        <div class="nav-wrapper blue">
          <a href="acceuil.php" class="brand-logo"><img src="http://www.wis-ecoles.com/var/ezdemo_site/storage/images/media/images/mydil-logo-cmjn-large3/7409-1-fre-FR/MyDIL-Logo-CMJN-large_news.png" class="imglogo"></a>
          <h4 class="brand-logo center">Connexion</h4>
          <ul class="right hide-on-med-and-down">
            <?php
              $requser = $bdd->prepare("SELECT * FROM utilisateur ");
              if ($_SESSION)
             ?>
             <?php if (isset($_SESSION['id'])): ?>
                 <?php if ($_SESSION['type'] == "admin"): ?>
                   <li><a class="dropdown-button" href="#!" data-activates="dropdown2" name="administrer">Administration<i class="material-icons right">arrow_drop_down</i></a></li>
                 <?php endif; ?>
             <?php endif; ?>
            <li><a href="stock.php">Produits</a></li>
            <li><a href="requetes.php">Requetes</a></li>
            <!-- Dropdown Trigger -->
            <?php if (isset($_SESSION['id'])): ?>
              <li><a class="dropdown-button" href="#!" data-activates="dropdown1"><?php echo $_SESSION['nom']?><?php echo " "?><?php echo $_SESSION['prenom']; ?><i class="material-icons right">arrow_drop_down</i></a></li>

              <?php else: ?>
                <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Mon compte<i class="material-icons right">arrow_drop_down</i></a></li>
            <?php endif; ?>
          </ul>
        </div>
      </nav>
    <div class="container">
      <div class="row">
  <form class="col s12" method="post" action="">

    <div class="row">
      <div class="input-field col s6">
        <input id="email" type="email" class="validate" name="mail">
        <label for="email">Adresse Mail</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s6">
        <input id="password" type="password" class="validate" name="password">
        <label for="password">Mot de Passe</label>
      </div>
    </div>
    <button class="btn waves-effect waves-light blue" type="submit" name="valider">Valider
      <i class="material-icons right">send</i>
    </button>
  </form>
  <?php
   if(isset($erreur)) {
      echo '<font color="red">'.$erreur."</font>";
   }
   ?>
</div>
    </div>

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
<script type="text/javascript" src="materialize/js/app.js"></script>
<script>
    $(document).ready(function(){
        $(".modal").modal();
    });
</script>
  </body>
</html>
