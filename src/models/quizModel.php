<?php

if(! defined("QUIZ_PATH")){
   define("QUIZ_PATH", DATA_PATH."/quiz.json");
}

function getQuizData(){
   return json_decode(file_get_contents(QUIZ_PATH), true) ?? [];
}