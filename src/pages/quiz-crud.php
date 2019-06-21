<?php
require MODELS_PATH."/quizDatabaseModel.php";


$page = filter_input(INPUT_GET, "action", FILTER_SANITIZE_STRING);

if(filter_has_var(INPUT_POST, "submit")){
   $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING);

   try {
      $pdo = getPDO();
      if(insertQuiz($pdo,["name" => $name])){
         setFlash("Insertion ok");
         header("location:index.php?page=quiz-crud&action=quiz-list");
         exit;
      } else {
         setFlash("Impossible d'insérer le quiz");
      }
   } catch(PDOException $ex){
      setFlash("Erreur SQL". $ex->getMessage());
   }
   
}


require VIEWS_PATH. "/layout.php";

