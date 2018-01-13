<!DOCTYPE html>
<?php
session_start();

$bdd = new PDO('mysql:host=127.0.0.1;dbname=phpmyadmin', 'root', '', array (PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''));
 ?>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection"/>
      <link rel="stylesheet" type="text/css" href="styleau.css"/>
      <title>Ajouter un Produit</title>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>

      <?php
        if (isset($_SESSION['id'])) {
          if ($_SESSION['type'] != "admin") {
            header("Location: acceuil.php");
          }
        }else {
          header("Location: acceuil.php");
        }

       ?>


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

    <div class="row">
    <form class="col s12" method="post" action="">
      <div class="row">
        <div class="input-field col s6">
          <input id="first_name" type="text" class="validate" name="nom_pdt">
          <label for="first_name">Nom du produit</label>
        </div>
        <div class="input-field col s6">
          <input id="first_name" type="text" class="validate" name="quantite_pdt">
          <label for="first_name">Quantité</label>
        </div>
        <div class="input-field col s6">
          <input placeholder="Saisir ici l'url de l'image" id="first_name" type="text" class="validate" name="image_pdt">
          <label for="first_name">Image</label>
        </div>
        <div class="row">
   <form class="col s12">
     <div class="row">
       <div class="input-field col s12">
         <textarea id="textarea1" class="materialize-textarea" name="description"></textarea>
         <label for="textarea1">Description du produit</label>
       </div>
     </div>
     <button class="btn waves-effect waves-light blue" type="submit" name="valider">Valider
       <i class="material-icons right">send</i>
     </button>
     <?php
     $bdd = new PDO('mysql:host=127.0.0.1;dbname=phpmyadmin', 'root', '');

     if (!$bdd){
       die("Erreur de connection: "  .mysqli_connect_error());
     }

     if(isset($_POST['valider'])) {
     $nom=$_POST['nom_pdt'];
     $quantite=$_POST['quantite_pdt'];
     $image=$_POST['image_pdt'];
     $description=$_POST['description'];
      if(!empty($_POST['nom_pdt']) AND !empty($_POST['quantite_pdt']) AND !empty($_POST['image_pdt'])) {
                         $requete="INSERT INTO produit (nom_pdt, quantite_pdt, image_pdt, description)
                         VALUES ('$nom' ,'$quantite' ,'$image' ,'$description')";
                         $bdd->query($requete);
                         $erreur = "Le produit à bien été ajouté !";
      } else {
         $erreur = "Tous les champs doivent être complétés !";
      }
     }

     ?>
   </form>
 </div>
    </form>
    <?php
       if(isset($erreur)) {
          echo '<font color="red">'.$erreur."</font>";
       }
       ?>
  </div>
  <div id="profil1" class="modal">
      <div class="modal-content">
          <h4 class="center">Mon Profil</h4>
        </br>
          <div class="row">
              <div class="input-field col s6">
                  <label>Nom : <?php echo $_SESSION['nom'] ?></label>
              </div>

              <div class="input-field col s6">
                  <label>Prénom : <?php echo $_SESSION['prenom'] ?></label>
                </br>
              </div>
          </div>

          <div class="row">
              <div class="input-field col s12">
                  <label>Adresse mail : <?php echo $_SESSION['mail'] ?></label>
                </br>
              </div>
          </div>

          <div class="row">
              <div class="input-field col s12">
                  <label>Classe : <?php echo $_SESSION['classe'] ?></label>
              </div>
          </div>
      </div>

      <div class="modal-footer">
        <div class="input-field col s6">
          <a href="editionprofil.php" class="modal-action modal-close btn waves-effect waves-light blue" name="action">Modifier mon profil</a>
         </div>
         <div class="input-field col s6">
           <a href="deconnexion.php" class="modal-action modal-close btn waves-effect waves-light blue" name="action">Me deconnecter</a>
         </div>
      </div>
  </div>
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
	<script type="text/javascript" src="materialize/js/app.js"></script>
    </body>
  </html>
