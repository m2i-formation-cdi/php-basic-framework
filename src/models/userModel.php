<?php

function authenticate($login, $password){
   $user = null;
   if($login == "admin" && $password == "123"){
      $user = [
         "userName" => "Joe Admin",
         "email" => "admin@monsite.com",
         "role" => "admin"
      ];
   }

   return $user;
}

function getAuthenticatedUser(){
   return $_SESSION["user"]?? null;
}