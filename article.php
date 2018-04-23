<?php

$page = $_GET['site'];

echo str_replace('§§§', file_get_contents($page), file_get_contents('genericHeader.html'));