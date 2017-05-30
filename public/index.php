<?php
require_once __DIR__ . '/../config.php';

$user = [
    'name' => 'isaac david',
    'lastName' => 'cantun manzanero',
    'email' => 'isaac@grupoicarus.com.mx'
];

$online = true;

echo $twig->render('view1.twig', compact('user', 'online'));