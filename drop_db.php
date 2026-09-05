<?php
$pdo = new PDO('mysql:host=127.0.0.1;port=3307', 'root', '');
$pdo->exec('DROP DATABASE IF EXISTS the_vision_classes');
$pdo->exec('CREATE DATABASE the_vision_classes');
echo "Done\n";
