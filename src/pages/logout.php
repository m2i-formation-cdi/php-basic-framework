<?php
session_destroy();
session_regenerate_id();

header("location:/home");