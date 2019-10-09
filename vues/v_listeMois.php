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
            <option selected value="<?php echo $mois ?>"><?php echo  $numMois."/".$numAnnee ?> </option>
        <?php 
            }
            else{ 
        ?>
            <option value="<?php echo $mois ?>"><?php echo  $numMois."/".$numAnnee ?> </option>
        <?php 
            }
          
          }
        ?>    
        </select>
      </div>
        <button type="submit" id="ok" class="btn btn-primary">Valider</button>
        <button type="reset" id="annuler" class="btn btn-primary">Effacer</button>

  </div>
</div>        
      </form>