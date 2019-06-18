<?php
$page = filter_input(INPUT_GET, "page", FILTER_SANITIZE_STRING)?? "home";

define("SRC_PATH", dirname(__DIR__)."/src");
define("PAGES_PATH", SRC_PATH. "/pages");
define("VIEWS_PATH", SRC_PATH. "/views");

require "../framework/framework.php";

require getPage($page);


