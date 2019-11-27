<?php
  $action = $_REQUEST['action'];
  $idVisiteur = $_SESSION['idVisiteur'];
?>   
    <!-- Division pour le sommaire -->
    <div id="menuGauche">
     <div id="infosUtil">
    
        <h2>
    
</h2>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarNav">
    <div class="navbar-nav">
      <a class="nav-item nav-link" href="#">Visiteur : <?php echo $_SESSION['prenom']."  ".$_SESSION['nom']  ?> <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="index.php?uc=gererFrais&action=saisirFrais">Saisie fiche de frais</a>
      <a class="nav-item nav-link" href="index.php?uc=etatFrais&action=selectionnerMois">Mes fiches de frais</a>
      <?php
        //Si la personne connecté est 'admin', il peut gerer les modes de paiements
        if ($idVisiteur == a131){
      ?>
      <a class="nav-link" href="index.php?uc=modePaiement&action=afficherModePaiement" title="Gérer les modes de paiements">Gérer les modes de paiements</a>
      <?php
      }
      ?>
      <a class="nav-item nav-link" href="index.php?uc=connexion&action=deconnexion">Déconnexion</a>
    </div>
  </div>
</nav>
    