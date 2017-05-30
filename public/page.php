<?php
require_once __DIR__ . '/../config.php';

$people = [
    'Isaac',
    'Carolina',
    'David',
    'Dalia'
];

echo $twig->render('view3.twig', compact('people'));