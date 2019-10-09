  <div class="container" style="margin-top: 2em;" >
    <div class="jumbotron">
      <form method="POST"  action="index.php?uc=gererFrais&action=validerMajFraisForfait">
        <h2 style="text-align:center;">Renseigner ma fiche de frais du mois <?php echo $numMois."-".$numAnnee ?></h2>
        <h4>Eléments forfaitisés</h4>
        <?php
          foreach ($lesFraisForfait as $unFrais)
          {
            $idFrais = $unFrais['idfrais'];
            $libelle = $unFrais['libelle'];
            $quantite = $unFrais['quantite'];
          ?>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text"  for="idFrais"><?php echo $libelle ?></span>
            </div>
            <input class="form-control" type="text" id="idFrais" name="lesFrais[<?php echo $idFrais?>]" value="<?php echo $quantite?>" >
          </div>
          
          <?php
            }
          ?>
          
          <button id="ok" type="submit" class="btn btn-primary">Valider</button>
          <button id="annuler" type="reset" name="annuler" class="btn btn-primary">Effacer</button>
      </form>
    </div>
  </div>
  