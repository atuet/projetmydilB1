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
      <title>Acceuil</title>
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
          <h4 class="brand-logo center">Acceuil</h4>
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
         <div class="col s12 m4 l2">
<img src="https://fr.mathworks.com/content/mathworks/fr/fr/products/connections/product_detail/nao-robot-api/_jcr_content/descriptionImageParsys/image.adapt.full.high.png/1469940860796.png" class="nao1">
         </div>
         <div class="row section">
         <div class="col s12 m4 l8">
             <h1 class="headeracceuil">Bienvenue dans le laboratoire MyDIL !</h1>
             <p class="pacceuil">Digital Innovation Lab</p>
             <p>Un lieu où le savoir à la demande est à la portée de tous nos élèves et où le matériel modulable et high-tech est mis au service de l'expérimentation pédagogique.
               Echanger, développer, accélérer, co-construire, favoriser l’émergence de projets innovants par un lieu de collaboration et de confrontation unique entre étudiants :</p>
               <p>- Espace, laboratoire dédié au codage, à l’innovation technologique.</p>
               <p>- « Bac à sable » animé par un coach.</p>
               <p>- Lieu de rendez-vous pour les GEEK.</p>
               <p>- Lieu de formation et d’initiation aux outils informatiques et numériques.</p>
               <p>- Lieu de réflexion et d’expérimentation des nouveaux usages.</p>
             </br>
             <img src="http://www.wis-ecoles.com/var/ezdemo_site/storage/images/media/images/13944710577_39b0ce417e_o/7414-1-fre-FR/13944710577_39b0ce417e_o_news.jpg">
           </br>
             <p class="pacceuil">Le premier laboratoire dédié à l'innovation</p>
             <p>Dans MyDil vous avez un accès illimité aux dernières technologies :</p>
             <p>
    -NAO, le robot humanoïde sur lequel vous inventez le compagnon de demain.</br>
    -L’oculus rift et sa nouvelle forme d’immersion en 3D.</br>
    -Les nouvelles technologies de réalité augmentée (hololens…).</br>
    -L’impression 3D pour le prototypage.</br>
    -Les objets connectés d’aujourd’hui, et surtout ceux de demain, bracelets, montres, balance tissu…</br>
    -Les nouvelles interfaces homme/machine, comme le leap motion.</br>
    -Les différentes formes de tablettes et Smartphones nécessaires au développement des applications du futur.</br>
    -Les technologies de système embarqué (raspberry py, arduino…).</br>
    -Les drônes et leurs nouvelles applications.</br>
    -Des outils collaboratifs innovants comme la surface hub. </br>
    -Et bien d’autres...</p>
  </br>
  <p>Sur ce site vous avez la possibilité de consulter le stock des produits présents dans MyDIL et de les emprunter !</p>

         </div>



         <div class="col s12 m4 l2">
           <img src="https://www.eduporium.com/store/media/catalog/product/r/e/red.png" class="nao1">
         </div>
       </div>

       </section>

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
    </body>
  </html>
