<h1>Formulaire quiz</h1>
<form method="post">
   <div class="form-group">
      <label>Nom du quiz</label>
      <input type="text" class="form-control" name="name"
      value="<?= $quiz?$quiz['name']:''?>">

      <input type="hidden" name="id"
      value="<?= $quiz?$quiz['id']:''?>">
   </div>
   <div class="form-group">
      <button type="submit" name="submit" class="btn btn-primary">
         Valider
      </button>
   </div>

</form>