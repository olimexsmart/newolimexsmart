<?php
// Insert page request into database
require_once 'AccessLogger.php';
$page = isset($_GET['page']) ? $_GET['page'] : null;

if ($page == null) {
    $page = 'start';
}

$page = str_replace('/', '', $page);

if (!file_exists($page . '.html') || !file_exists('articleTemplate.html')) {
    $page = '404';
}

echo str_replace('§§§', file_get_contents($page . '.html'), file_get_contents('articleTemplate.html'));


$logger = new AccessLogger($page);
$logger->log();
