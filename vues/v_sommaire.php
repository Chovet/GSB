    <!-- Division pour le sommaire -->
    <div id="menuGauche">
     <div id="infosUtil">
    
        <h2>
    
</h2>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="#">Visiteur : <?php echo $_SESSION['prenom']."  ".$_SESSION['nom']  ?> <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="index.php?uc=gererFrais&action=saisirFrais">Saisie fiche de frais</a>
      <a class="nav-item nav-link" href="index.php?uc=etatFrais&action=selectionnerMois">Mes fiches de frais</a>
      <a class="nav-item nav-link" href="index.php?uc=connexion&action=deconnexion">Déconnexion</a>
    </div>
  </div>
</nav>
    