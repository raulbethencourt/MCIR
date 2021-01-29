<?php

use App\Autoloader;

require '../app/Autoloader.php';
Autoloader::register();
require '../app/DataBase.php';

require '../templates/index.html.php';