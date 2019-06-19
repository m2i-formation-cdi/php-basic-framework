<?php

$content = browseFolder(
   dirname(dirname(__DIR__))
);

require VIEWS_PATH."/layout.php";