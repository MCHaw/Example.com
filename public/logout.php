<?php


require '../core/session.php';
require '../core/functions.php';
session_destroy();
header('LOCATION: /');


