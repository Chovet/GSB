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

<div class="container">
  <div class="jumbotron">
    <h2 style="text-align:center;">Mes fiches de frais</h2>
    <form action="index.php?uc=etatFrais&action=voirEtatFrais" method="post">
    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <label class="input-group-text" for="lstMois" accesskey="n">Mois:</label>
      </div>
      <select class="custom-select" id="lstMois" name="lstMois">

      <?php
        foreach ($lesMois as $unMois)
        {
          $mois = $unMois['mois'];
          $numAnnee =  $unMois['numAnnee'];
          $numMois =  $unMois['numMois'];
          if($mois == $moisASelectionner){
      ?>
          <option selected value="<?php echo $mois ?>"><?php echo $mouths[$mois]; ?></option>
      <?php 
          }
          else{ 
      ?>
          <option value="<?php echo $mois ?>"><?php echo $mouths[$mois]; ?></option>
      <?php 
          }
        
        }
      ?>    
      </select>
    </div>
      <div style="float: right;">
        <button type="submit" id="ok" class="btn btn-primary">Valider</button>
        <button type="reset" id="annuler" class="btn btn-primary">Effacer</button>
      </div>      
</form>