<?php

if(! defined("USER_FILE")){
   define("USER_FILE", DATA_PATH. "/users.json");
}

function getUserData(){
   $data = json_decode(file_get_contents(USER_FILE), true) ?? [];
   return $data;
}


function authenticate($login, $password){
   $user = null;
   
   foreach(getUserData() as $dbUser){
      if(
         $login == $dbUser["login"] 
         && password_verify($password, $dbUser["password"])
         )
      {
         unset($dbUser["password"]);
         $user = $dbUser;
         break;
      }
   }

   return $user;
}

function getAuthenticatedUser(){
   return $_SESSION["user"]?? null;
}

function insertUser($userName, $login, $password, $role){
   $user = [
      "userName"  => $userName,
      "login"     => $login,
      "role"      => $role,
      "password"  => password_hash($password, PASSWORD_BCRYPT)
   ];

   $userList = getUserData();

   array_push($userList, $user);

   $success = file_put_contents(USER_FILE, json_encode($userList));

   if($success){
      unset($user["password"]);
      $_SESSION["user"] = $user;
   }

   return $success; 

}