<div class="col-md-6">
   <h3>Inscription</h3>

   <?php if(isset($error)): ?>

      <div class="alert alert-danger">
         <?= $error ?>
      </div>

   <?php endif; ?>

   <form method="post">
      <div class="form-group">
         <label for="userName">Nom</label>
         <input type="text" name="userName" id="userName" class="form-control">
      </div>
      <div class="form-group">
         <label for="login">Identifiant</label>
         <input type="text" name="login" id="login" class="form-control">
      </div>
      <div class="form-group">
         <label for="password">Mot de passe</label>
         <input type="password" name="password" id="password" class="form-control">
      </div>
      <div class="form-group">
         <label for="role">Role</label>
         <select name="role" id="role" class="form-control">
            <option>User</option>
            <option>Admin</option>
            <option>Super Admin</option>
         </select>
      </div>
      <div class="form-group">
         <button type="submit" name="submit" class="btn btn-block btn-primary">Valider</button>
      </div>
   </form>
</div>