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
      <title>Requêtes</title>
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
          <h4 class="brand-logo center">Requêtes</h4>
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
       <div class="col s12">
         <?php
         if (isset($_SESSION['id'])): ?>

        <?php  $req = $bdd->query('SELECT * FROM requete WHERE id_emetteur = '.$_SESSION['id'].'');
          $requetes = $req->fetchAll();


          foreach ($requetes as $requete):?>


          <div class="row">
            <div class="col s12 m7">
              <div class="card horizontal petite">
                <div class="card-stacked">
                  <div class="card-content">
                    <div class="col s3">
                      <p><b>ID requête :</b> <?php echo $requete['id_requete']; ?></p>
                      <?php $requeteid = $requete['id_requete']; ?>
                    </div>
                    <div class="col s3">
                      <p style="float:left"><b>Statut de la requête :</b> <?php
                      if ($requete['statut_requete'] == "en attente") {
                      echo '<p class="orange-text"> &nbsp En attente</p>';
                      }

                      if ($requete['statut_requete'] == "valide") {
                      echo '<p class="green-text"> &nbsp Validé</p>';
                      }

                      if ($requete['statut_requete'] == "refuse") {
                      echo '<p class="red-text"> &nbsp Refusé</p>';
                      }

                      ?></p>
                </div>
                    <div class="col s12">
                    </br>
                      <h5 class="blue-text">Produit :</h5>
                    </br>
                    </div>
                    <div class="col s3">
                      <p style="float:left"><b>ID Produit :</b> <?php echo '<p class="blue-text"> &nbsp' .$requete['id_pdt']. '</p>' ?></p>
                    </div>
                    <div class="col s3">
                      <p style="float:left"><b>Nom :</b> <?php echo '<p class="blue-text"> &nbsp' .$requete['nom_pdt']. '</p>' ?></p>
                    </div>
                    <div class="col s12">
                    </br>
                    <p style="float:left"><b>Date Retour du Produit :</b> <?php echo '<p class="blue-text"> &nbsp' .$requete['date_retour']. '</p>' ?></p>
                </div>
                    <div class="col s12">
                      </br>
                      <p style="float:left"><b>Commentaires :</b> <?php echo '<p class="blue-text"> &nbsp' .$requete['commentaires']. '</p>' ?></p>
                    </div>
                  </div>

                  <form action="" method="post">
                  <div class="card-action">
                    <div class="col s12 row">
                      <button href="" type="submit" name="annuler<?php echo $requeteid ?>" class="btn waves-effect waves-light red">Annuler ma requête</button>
                    </div>
                    </form>
                    <?php

                        if (isset($_POST['annuler'.$requeteid.''])) {
                          $requser = $bdd->prepare("DELETE FROM requete WHERE id_requete = ?");
                          $requser->execute(array($requeteid));
                          $user = $requser->fetch();
                        }


                     ?>
                  </div>
                </div>
            </div>
          </div>
        </div>

          <?php endforeach ?>
<?php else: ?>
  <div class="row center blue-text">
    <h1>Veuillez vous connecter à votre compte pour acceder a vos requêtes !</h1>

  </div>
  <?php endif; ?>
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
