<?php
require_once 'vendor/autoload.php';
use App\router;
use App\modules\searchData;

echo Router::getRouter($_SERVER['REQUEST_URI']);
