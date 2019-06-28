<?php
require MODELS_PATH."/quizDatabaseModel.php";


$page = filter_input(INPUT_GET, "action", FILTER_SANITIZE_STRING);
$id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);
$quiz = null;

//Gestion de l'ajout ou de ma modification d'un quiz
if(filter_has_var(INPUT_POST, "submit")){
   $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING);
   $id = filter_input(INPUT_POST, "id", FILTER_SANITIZE_NUMBER_INT);

   //Modification du quiz
   if($id){
      try {
         $updateData = [
            "name" => $name,
            "id" => $id
         ];
         if(updateQuiz(getPDO(), $updateData)){
            setFlash("Mise à jour OK");
            header("location: /quiz-crud?action=quiz-list");
            exit;
         } else {
            setFlash("Impossible de modifier le quiz");
         }
      } catch(PDOException $ex){
         setFlash("Erreur SQL". $ex->getMessage());
      }
   //Ajout d'un quiz
   } else {
      try {
         $pdo = getPDO();
         if(insertQuiz($pdo,["name" => $name])){
            setFlash("Insertion ok");
            header("location:/quiz-crud?action=quiz-list");
            exit;
         } else {
            setFlash("Impossible d'insérer le quiz");
         }
      } catch(PDOException $ex){
         setFlash("Erreur SQL". $ex->getMessage());
      }
   }

   
   
}

//Récupération de la liste des quiz
if($page == "quiz-list"){
   try {
      $quizList = getAllQuiz(getPDO());
   } catch(PDOException $ex){
      setFlash("Erreur SQL". $ex->getMessage());
   }  
}

//Récupération des données d'un quiz 
if($id && $page=="quiz-form"){
   try {
      $quiz = getOneQuiz(getPDO(), $id);
   } catch(PDOException $ex){
      setFlash("Erreur SQL". $ex->getMessage());
   }   
}

//Suppression d'un quiz
if($id && $page == "quiz-delete"){
   try {
      deleteOneQuiz(getPDO(), $id);
      header("location:/quiz-crud?action=quiz-list");
      exit;
   } catch(PDOException $ex){
      setFlash("Erreur SQL". $ex->getMessage());
   }
}


require VIEWS_PATH. "/layout.php";

