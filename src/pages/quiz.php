<?php
require MODELS_PATH. "/quizModel.php";

$quiz = getQuizData();

$result = "";

if(filter_has_var(INPUT_POST, "submit")){
   $answers = filter_input(INPUT_POST, "question", FILTER_DEFAULT, FILTER_REQUIRE_ARRAY);

   $total = 0;

   foreach($answers as $index=>$answer){
      if($answer == $quiz[$index]["solution"]){
         $total++;
      }
   }

   $numberOfQuestions = count($quiz);
   $result = "Vous avez $total bonnes réponses sur $numberOfQuestions";
}

var_dump($result);


require VIEWS_PATH."/layout.php";