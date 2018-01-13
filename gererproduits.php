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
      <title>Gérer les Produits</title>
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
          <h4 class="brand-logo gerer">Gérer les produits</h4>
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

      <?php
        if (isset($_SESSION['id'])) {
          if ($_SESSION['type'] != "admin") {
            header("Location: acceuil.php");
          }
        }else {
          header("Location: acceuil.php");
        }

       ?>


      <div class="row">
            <div class="col s12 m4 l2">
              <a class="btn waves-effect waves-light blue bouttonadd" href="addproduct.php">Ajouter un produit</a>
            </div>
            <div class="col s12 m4 l8">
      <?php
       $req = $bdd->query('SELECT * FROM produit');
       $produits = $req->fetchAll();

       foreach ($produits as $produit):?>
<div class="row">
<?php $idproduit = $produit['id_pdt'] ?>
<?php $nomproduit = $produit['nom_pdt'] ?>
      <div class="col s6">
        <div class="card horizontal moyenne">
          <div class="petite_image">
            <img src="<?php echo $produit['image_pdt'] ?>" class="petite_image">
          </div>
          <div class="card-stacked">
            <div class="card-content">
              <p><?php echo $produit['nom_pdt'] ?></p>
            </div>
              <div class="card-action">
                <form action="" method="post">
                <div class="col s6">
                  <a type="submit" name="modifier" href="#modif<?php echo $idproduit ?>" class="btn waves-effect waves-light blue modal-trigger">Modifier</a>
                </div>
                <div class="col s6">
                  <button type="submit" name="supprimer<?php echo $idproduit ?>" href="" class="btn waves-effect waves-light red">Supprimer</a>
                </div>
              </div>
            </form>
            <?php
            if (isset($_POST['supprimer'.$idproduit.''])) {
              $requser = $bdd->prepare("DELETE FROM produit WHERE id_pdt = ?");
              $requser->execute(array($idproduit));
              $user = $requser->fetch();
             }
             ?>
          </div>
        </div>
      </div>
</div>


  <div id="modif<?php echo $idproduit ?>" class="modal">
      <div class="modal-content">
          <h4>Modifier ce produit</h4>
          <div class="row">
            <form class="" action="" method="post">
              <div class="input-field col s6">
                  <input id="1" type="text" name="idpdt" class="validate" readonly value="<?php echo $idproduit ?>">
                  <label for="1">ID produit</label>
              </div>

              <div class="input-field col s6">
                  <input id="1" type="text" name="newnompdt" class="validate" value="<?php echo $nomproduit ?>">
                  <label for="1">Nom produit</label>
              </div>
          </div>

          <div class="row">
              <div class="input-field col s12">
                  <input id="1" type="text" name="newimgpdt" class="" placeholder="Saisir l'URL de l'image du produit en .jpg" value="<?php echo $produit['image_pdt'] ?>">
                  <label for="1">Image Produit</label>
              </div>
          </div>

          <div class="row">
              <div class="input-field col s12">
                  <textarea id="textarea1" name="newdescription" class="materialize-textarea"><?php echo $produit['description'] ?></textarea>
                  <label for="textarea1">Description</label>
              </div>
          </div>
      </div>

      <div class="modal-footer">
          <button name="validermodif" class="modal-action modal-close btn waves-effect waves-light blue" type="submit">
              Envoyer
              <i class="material-icons right">send</i>
          </button>
      </div>
    </form>
  </div>

  <?php
  if (isset($_POST['validermodif'])) {

 if(isset($_SESSION['id'])) {
    $requser = $bdd->prepare("SELECT * FROM produit WHERE id_pdt = ?");
    $requser->execute(array($_POST['idpdt']));
    $user = $requser->fetch();
    if(isset($_POST['newnompdt']) AND !empty($_POST['newnompdt']) AND $_POST['newnompdt'] != $user['nom_pdt']) {
       $newnom=$_POST['newnompdt'];
       $insertnom = $bdd->prepare("UPDATE produit SET nom_pdt = ? WHERE id_pdt = ?");
       $insertnom->execute(array($newnom, $_POST['idpdt']));
    }
    if(isset($_POST['newimgpdt']) AND !empty($_POST['newimgpdt']) AND $_POST['newimgpdt'] != $user['image_pdt']) {
       $newimage=$_POST['newimgpdt'];
       $insertimage = $bdd->prepare("UPDATE produit SET image_pdt = ? WHERE id_pdt = ?");
       $insertimage->execute(array($newimage, $_POST['idpdt']));
    }
    if(isset($_POST['newdescription']) AND !empty($_POST['newdescription']) AND $_POST['newdescription'] != $user['description']) {
       $newdescription=$_POST['newdescription'];
       $insertdescription = $bdd->prepare("UPDATE produit SET description = ? WHERE id_pdt = ?");
       $insertdescription->execute(array($newdescription, $_POST['idpdt']));
    }
     }
      }
   ?>

<?php endforeach; ?>
</div>
<div class="col s12 m4 l2"></div>

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
