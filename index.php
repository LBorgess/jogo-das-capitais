<?php

session_start();

$route = $_GET['route'] ?? 'start';

$script = null;

switch ($route) {
    case 'start':
        $script = 'start';
        break;
    case 'game':
        $script = 'game';
        break;
    case 'gameover':
        $script = 'gameover';
        break;
    default:
        $script = '404';
        break;
}

$capitals = require __DIR__ . '/data/capitals.php';

require_once __DIR__ . "/includes/header.php";
require_once __DIR__ . "/app/$script.php";
require_once __DIR__ . "/includes/footer.php";