<?php

$page = $_GET['article'];
//echo var_dump($page);

if ($page == null) {
    $page = '404';
}

if (file_exists($page . '.html') && file_exists('articleTemplate.html')) {
    echo str_replace('§§§', file_get_contents($page . '.html'), file_get_contents('articleTemplate.html'));
} else {
    echo "extremely bad error";
}
