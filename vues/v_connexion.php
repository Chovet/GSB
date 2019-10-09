<div class="container">
      <div class="jumbotron">
            <h2>Identification de l'utilisateur</h2>

            <form method="POST" action="index.php?uc=connexion&action=valideConnexion">
                  <div class="form-group">
                        <label for="nom">Login*</label>
                        <input id="login"  type="text" name="login" class="form-control" placeholder="Login">
                  </div>
                  
                  <div class="form-group">
                        <label for="mdp">Mot de passe*</label>
                        <input id="mdp" type="password" name="mdp" class="form-control"  placeholder="Mot de passe">
                  </div>

                  <button type="submit" value="Valider" name="valider"  class="btn btn-primary">Valider</button>
                  <button type="reset" value="Annuler" name="annuler" class="btn btn-primary">Annuler</button>
            </form>

      </div>     
</div>