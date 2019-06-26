<table class="table table-bordered table-striped mt-5">
   <tr>
      <th>Titre</th>
      <th>Prix</th>
      <th>Éditeur</th>
      <th>Auteurs</th>
      <th>Préfaceurs</th>
      <th>Actions</th>
   </tr>

   <?php foreach($bookList as $book): ?>
      <tr>
         <td><?= $book["titre"] ?> </td>
         <td><?= $book["prix"] ?> </td>
         <td><?= $book["editeur"] ?> </td>
         <td><?= $book["auteurs"] ?> </td>
         <td><?= $book["prefaceurs"] ?> </td>
         <td> </td>
      </tr>
   <?php endforeach ?>
</table>