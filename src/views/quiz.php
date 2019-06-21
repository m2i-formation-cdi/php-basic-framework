<h1>Quiz</h1>

<?php if(! empty($result)): ?> 
   <div class="alert alert-success">
      <?= $result ?>
   </div>
<?php endif ?>

<form method="post">
   <?php foreach($quiz as $questionIndex => $question): ?>
   <div class="form-group mt-3">
      <h2> <?= $question["question"] ?> </h2>
      <?php for($i=0; $i < count($question["answers"]); $i++): ?>
         <div class="form-check">
            <input   type="radio" 
                     class="form-check-input" 
                     value="<?=$i?>"
                     name="question[<?=$questionIndex?>]"> 
            <label class="form-check-label">
               <?= $question["answers"][$i] ?>
            </label>
         </div>
      <?php endfor ?>
   </div>
   <?php endforeach ?>

   <div class="form-group mt-4">
      <button  type="submit" name="submit" 
               class="btn btn-primary btn-block">
         Envoyer les réponses
      </button>
   </div>
</form>