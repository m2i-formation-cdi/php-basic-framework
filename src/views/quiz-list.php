<h1>Liste des quiz</h1>

<table class="table table-bordered table-striped">
   <tr>
      <th>Id</th>
      <th>Nom</th>
      <th>Actions</th>
   </tr>
   <?php foreach($quizList as $quiz): ?>
      <tr>
         <td> <?=$quiz["id"] ?> </td>
         <td> <?=$quiz["name"] ?> </td>
         <td> 
            <a href="/quiz-crud?action=quiz-form&id=<?=$quiz["id"] ?>">Modifier</a>

            <a href="/quiz-crud&action=quiz-delete&id=<?=$quiz["id"] ?>">Supprimer</a>
      
         </td>
      </tr>
   <?php endforeach ?>
</table>