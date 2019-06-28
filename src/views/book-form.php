<div>
   <form method="post">
      <div class="form-group">
         <label>Titre</label>
         <input type="text" name="livre[titre]" class="form-control">
      </div>
      <div class="form-group">
         <label>Prix</label>
         <input type="number" name="livre[prix]" class="form-control" step=".1">
      </div>

      <div class="form-group">
         <label>Éditeurs</label>
         <select name="livre[editeur]" class="form-control">
            <?php foreach($publishers as $publisher): ?>
               <option value="<?=$publisher["id"]?>">
                  <?= $publisher["nom"] ?>
               </option>
            <?php endforeach ?>
         </select>
      </div>

      
      <div class="row">
         <h2 class="col-8">Auteurs</h2>
         <div class="col-4 text-right">
            <button type="button" id="addAuthor" class="btn btn-secondary">
               Ajouter un auteur au livre
            </button>
         </div>
      </div>
      <fieldset id="authorList">
         <legend>liste des auteurs</legend>
         <div class="form-group row" id="author">
            <div class="col-7">
               <select name="auteur[nom]" class="form-control" >
                  <option value="">Choisissez un auteur</option>
                  <?php foreach($authors as $author): ?>
                     <option value="<?= $author["id"]?>">
                        <?=$author["nom"]?>
                     </option>
                  <?php endforeach ?>
               </select>
            </div>
            <div class="col-4">
               <select name="auteur[role]" class="form-control" >
                  <option value="">Choisissez un role</option>
                  <?php foreach($roles as $role): ?>
                     <option value="<?= $role["id"]?>">
                        <?=$role["libelle"]?>
                     </option>
                  <?php endforeach ?>
               </select>
            </div>
            <div class="col-1">
               <button class="btn btn-danger delete-author">
                  delete
               </button>
            </div>
         </div>
      </fieldset>


      <div class="form-group">
         <button type="submit" name="submit" class="btn btn-primary btn-block">
            Valider
         </button>
      </div>
   </form>

</div>

<script>

$authorList = $("#authorList");
$authorForm = $("#author");
$authorButton = $("#addAuthor");
$authorDeleteButtons = $(".delete-author");

$shadowForm = $authorForm.clone().removeAttr("id");

$authorButton.click(function(){
   $authorList.append($shadowForm.clone());
});

$authorList.delegate(".delete-author", "click", function(){
   if($authorList.children().length >2){
      $(this).parent().parent().remove();
   }
});


</script>
