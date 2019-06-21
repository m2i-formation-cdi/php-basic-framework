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

function setFlash($message){
   $_SESSION["flash"] = $message;
}

function getFlash(){
   $message = $_SESSION["flash"] ?? "";
   unset($_SESSION["flash"]);
   return $message;
}

function browseFolder($path){
   $html = "<ul>";

   foreach(scandir($path) as $item){
      if($item == "." || $item == ".."){

      } else if (is_file("$path/$item")){
         $html .= "<li>$item</li>";
      } else if (is_dir("$path/$item")){
         $html .= "<li><strong>$item</strong>";
         $html .= browseFolder("$path/$item");
         $html .= "</li>";
      }
   }

   $html .= "</ul>";

   return $html;
}

function getPDO():PDO{
   $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
   return new PDO(DB_DSN,DB_USER,DB_PASS, $options);
}