<?php
session_start();

$page = filter_input(INPUT_GET, "page", FILTER_SANITIZE_STRING)?? "home";

define("SRC_PATH", dirname(__DIR__)."/src");

require SRC_PATH."/config.php";
require "../framework/framework.php";

require MODELS_PATH."/userModel.php";

$user = getAuthenticatedUser();

$publicRoutes = ["login", "home", "register"];

if(!$user && ! in_array($page, $publicRoutes)){
   header("location:index.php?page=login");
}

require getPage($page);


