<?php
require MODELS_PATH. "/bookModel.php";

$bookList = getAllBooks(getPDO());

require VIEWS_PATH. "/layout.php";