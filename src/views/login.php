<div class="col-md-6">
   <h3>Login</h3>

   <?php if(isset($error)): ?>

      <div class="alert alert-danger">
         <?= $error ?>
      </div>

   <?php endif; ?>

   <form method="post">
      <div class="form-group">
         <label for="login">Identifiant</label>
         <input type="text" name="login" id="login" class="form-control">
      </div>
      <div class="form-group">
         <label for="password">Identifiant</label>
         <input type="password" name="password" id="password" class="form-control">
      </div>
      <div class="form-group">
         <button type="submit" name="submit" class="btn btn-block btn-primary">Connexion</button>
      </div>
   </form>
</div>