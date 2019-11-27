<div class="container" >
  <h2>Descriptif des éléments hors forfait</h2>
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">Date</th>
        <th scope="col">Libellé</th>
        <th scope="col">Montant</th>
        <th scope="col">Paiement</th>
        <th scope="col"></th>

      </tr>
    </thead>
    <tbody>

    <?php
    foreach( $lesFraisHorsForfait as $unFraisHorsForfait)
    {
      $idpaiement = $unFraisHorsForfait['idpaiement'];

      foreach($lesModesDePaiements as $unModeDePaiement){
        if($unModeDePaiement['idPaiement'] == $idpaiement){
          $libellePaiement = $unModeDePaiement['modePaiement'];
        }elseif ($unModeDePaiement['idPaiement'] == NULL) {
          echo "";
        }
      }

      $libelle = $unFraisHorsForfait['libelle'];
      $date = $unFraisHorsForfait['date'];
      $montant = $unFraisHorsForfait['montant'];
      $id = $unFraisHorsForfait['id'];
      ?>
        <tr>
          <!--Affiche les valeurs sous le tableau créé plus haut -->
            <td> <?php echo $date; ?></td>
            <td><?php echo $libelle; ?></td>
            <td><?php echo $montant; ?> €</td>
            <td>
              <?php
                echo "<option value='$iPaiement'>" . $libellePaiement . "</option>";
              ?>
            </td>
            <td style="float:right;"><a href="index.php?uc=gererFrais&action=supprimerFrais&idFrais=<?php echo $id ?>"
              onclick="return confirm('Voulez-vous vraiment supprimer ce frais?');">Supprimer ce frais</a></td>
        </tr>
            <?php
            }
            ?>
    </tbody>
  </table>	  
</div>

<form action="index.php?uc=gererFrais&action=validerCreationFrais" method="post">
  <div class="container" style="margin-top: 2em;">
    <div class="jumbotron">
      <h2 style="text-align:center;">Nouvel élément hors forfait</h2>
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text"  for="txtDateHF">Date (jj/mm/aaaa):</span>
        </div>
        <input type="text" id="txtDateHF" name="dateFrais" class="form-control">
      </div>

      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" for="txtLibelleHF">Libellé</span>
        </div>
        <input type="text" id="txtLibelleHF" name="libelle" class="form-control">
      </div>

      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" for="txtMontantHF">Montant:</span>
        </div>
        <input type="text" id="txtMontantHF" name="montant" class="form-control">
      </div>

      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <label class="input-group-text" for="txtPaiementHF">Paiement:</label>
        </div>
        <select class="custom-select" id="txtPaiementHF" name="paiement">
        <?php
          foreach($lesModesDePaiements as $unModeDePaiement) {
            $idPaiement = $unModeDePaiement['idPaiement'];
            $libelle = $unModeDePaiement['modePaiement'];
            echo "<option value='$idPaiement'>" . $libelle . "</option>";
          }
        ?>
        </select>
      </div>

      <button type="submit" id="ajouter" class="btn btn-primary">Ajouter</button>
      <button type="reset" id="effacer" class="btn btn-primary">Effacer</button>

    </div>
  </div>
        
      </form>
  </div>
  

