<?php

function getRessource($page, $folder){
   $path = "$folder/$page.php";
   if(!file_exists($path)){
      $path = "$folder/404.php";
   }

   return $path;
}

function getPage($page){
   return getRessource($page, PAGES_PATH);
}

function getView($page){
   return getRessource($page, VIEWS_PATH);
}