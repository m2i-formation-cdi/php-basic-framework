<?php
session_destroy();
session_regenerate_id();

header("location:index.php?page=home");