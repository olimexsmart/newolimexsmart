<?php

$page = $_GET['page'];

if ($page == null) {
    $page = 'start';
}

if (!file_exists($page . '.html') || !file_exists('articleTemplate.html')) {
    $page = '404';
}

echo str_replace('§§§', file_get_contents($page . '.html'), file_get_contents('articleTemplate.html'));

