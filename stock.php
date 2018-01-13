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
      <title>Produits</title>
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
          <h4 class="brand-logo center">Produits</h4>
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
   <!-- Page Layout here -->
   <div class="row">

     <div class="col s12 m4 l3"> <!-- Note that "m4 l3" was added -->
       <!-- Grey navigation panel

             This content will be:
         3-columns-wide on large screens,
         4-columns-wide on medium screens,
         12-columns-wide on small screens  -->
         <nav>
         <div class="nav-wrapper blue">
               <form>
                 <div class="searchbar">
                 <div class="input-field">
                   <input id="search" type="search" required>
                   <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                   <i class="material-icons">close</i>
                 </div>
               </form>
             </div>
        </nav>
     </div>

     <div class="col s12 m8 l9">

       <?php


        $req = $bdd->query('SELECT * FROM produit');
        $produits = $req->fetchAll();

        foreach ($produits as $produit):?>


        <div class="row">
    <div class="col s12 m6">
      <div class="card z-depth-4">
        <div class="card-image">
          <img src=<?php echo $produit['image_pdt'] ?> class="materialboxed">
        </div>
        <div class="card-content">
          <span class="card-title blue-text"><?php echo $produit['nom_pdt'] ?></span>
          <p><?php echo $produit['description'] ?></p>
          <p><?php $idproduit = $produit['id_pdt'] ?></p>
          <p><?php $nomproduit = $produit['nom_pdt'] ?></p>
        </div>
        <form action="" method="post">
          <?php if (isset($_SESSION['id'])): ?>
        <div class="card-action">
          <a type="submit" name="reserver" class="waves-effect waves-light btn modal-trigger blue" href="#avis<?php echo $idproduit ?>">Réserver ce produit</a>
        </div>

        <?php else: ?>
          <div class="card-action">
            <a class="waves-effect waves-light btn modal-trigger blue" href="#" onclick="return false;">Connectez vous pour reserver ce produit</a>
          </div>

        <?php endif; ?>
        </form>
      </div>
    </div>
    <div id="avis<?php echo $idproduit ?>" class="modal">
        <div class="modal-content">
            <h4>Réserver ce produit</h4>
            <div class="row">
              <form class="" action="" method="post">
                <div class="input-field col s6">
                    <input id="1" type="text" name="idpdt" class="validate" readonly value="<?php echo $idproduit ?>">
                    <label for="1">ID produit</label>
                </div>

                <div class="input-field col s6">
                    <input id="1" type="text" name="nompdt" class="validate" readonly value="<?php echo $nomproduit ?>">
                    <label for="1">Nom produit</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s12">
                    <input id="1" type="text" name="dateretour" class="datepicker">
                    <label for="1">Date retour emprunt</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s12">
                    <textarea id="textarea1" name="comment" class="materialize-textarea"></textarea>
                    <label for="textarea1">Commentaires</label>
                </div>
            </div>
        </div>

        <div class="modal-footer">
            <button name="valider" class="modal-action modal-close btn waves-effect waves-light blue" type="submit" name="action">
                Envoyer
                <i class="material-icons right">send</i>
            </button>
        </div>
      </form>
    </div>
  </div>

<?php endforeach; ?>
<?php
  if (isset($_POST['valider'])) {
    $idpdt = $_POST['idpdt'];
    $nompdt = $_POST['nompdt'];
    $dateretour = $_POST['dateretour'];
    $comment = $_POST['comment'];
    $idpersonne = $_SESSION['id'];
    $nompersonne = $_SESSION['nom'];
    $prenompersonne = $_SESSION['prenom'];
    $classepersonne = $_SESSION['classe'];
    $statut = 'en attente';

    if (!empty($_POST['dateretour'])) {
      $requete="INSERT INTO requete (id_pdt, nom_pdt, date_retour, commentaires, id_emetteur, nom_emetteur, prenom_emetteur, classe_emetteur, statut_requete)
      VALUES ('$idpdt' ,'$nompdt' ,'$dateretour' ,'$comment' ,'$idpersonne' ,'$nompersonne' ,'$prenompersonne' ,'$classepersonne', '$statut')";
      $bdd->query($requete);
    }
  }
 ?>
     </div>

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
      <script>
          $(document).ready(function(){
              $(".modal").modal();
          });
      </script>
      <script>
      $('.datepicker').pickadate({
  selectMonths: true, // Creates a dropdown to control month
  selectYears: 15, // Creates a dropdown of 15 years to control year,
  today: 'Today',
  clear: 'Clear',
  close: 'Ok',
  closeOnSelect: false // Close upon selecting a date,
});
      </script>
    </body>
  </html>
