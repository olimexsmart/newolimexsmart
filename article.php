<?php

$page = $_GET['article'];
//echo $page;

echo str_replace('§§§', file_get_contents($page . '.html'), file_get_contents('genericHeader.html'));
