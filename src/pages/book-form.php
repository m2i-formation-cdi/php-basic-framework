<?php
require MODELS_PATH. "/bookModel.php";

try {
   $pdo = getPDO();
   $publishers = getAllPublishers($pdo);
   $authors = getAllAuthors($pdo);
   $roles = getAllRoles($pdo);
} catch(PDOException $ex){
   setFlash("Impossible de récupérer les référentiels");
}


require VIEWS_PATH. "/layout.php";

