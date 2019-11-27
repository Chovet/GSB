<?php
  $mouths = array(
    '01' => 'janvier',
    '02' => 'fevrier',
    '03' => 'mars',
    '04' => 'avril',
    '05' => 'mai',
    '06' => 'juin',
    '07' => 'juillet',
    '08' => 'aout',
    '09' => 'septembre',
    '10' => 'octobre',
    '11' => 'novembre',
    '12' => 'decembre',
  );
?>
  <h3>Fiche de frais du mois
  <?php
    foreach ($lesMois as $unMois) {
      $mois = $unMois['mois'];
    }
    echo $mouths[$mois].' '.$numAnnee;
  ?>
  </h3>
  Etat : <?php echo $libEtat?> depuis le <?php echo $dateModif?> <br> Montant validé : <?php echo $montantValide?>
  
  <h4>Eléments forfaitisés</h4>
  <table class="table table-striped">
    <tr>
        <?php
        foreach ( $lesFraisForfait as $unFraisForfait )
        {
        $libelle = $unFraisForfait['libelle'];
        ?>
        <th> <?php echo $libelle?></th>
        <?php
        }
        ?>
    </tr>
    <tr>
        <?php
        foreach (  $lesFraisForfait as $unFraisForfait  )
        {
        $quantite = $unFraisForfait['quantite'];
        ?>
        <td class="qteForfait"><?php echo $quantite?> </td>
        <?php
        }
        ?>
    </tr>
  </table>

  <h4>Descriptif des éléments hors forfait</h4>
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
        foreach( $lesFraisHorsForfait as $unFraisHorsForfait) {
        $libelle = $unFraisHorsForfait['libelle'];
        $date = $unFraisHorsForfait['date'];
        $montant=$unFraisHorsForfait['montant'];
        $idpaiement=$unFraisHorsForfait['idpaiement'];
        $id = $unFraisHorsForfait['id'];
    ?>		
    <tr>
      <td> <?php echo $date ?></td>
      <td><?php echo $libelle ?></td>
      <td><?php echo $montant ?></td>
      <td>
        <?php
          if ($idpaiement == 3){
              echo "Carte Bancaire";
          } elseif ($idpaiement = 2){
              echo "Espèces";
          } else {
              echo "Chèque";
          }
        ?>
      </td>
      <td><a href="index.php?uc=gererFrais&action=supprimerFrais&idFrais=<?php echo $id ?>" 
        onclick="return confirm('Voulez-vous vraiment supprimer ce frais?');">Supprimer ce frais</a>
      </td>
      </tr>
    <?php		      
    }
    ?>	  
    </tbody>
  </table>













