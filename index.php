<?php

require('./Cat.php');
echo '<h1>Bienvenu dans le monde de Vincent et ses chats !</h1>';

$garfield = new Cat('Garfield', 'orange', 5);
$felix = new Cat('Felix', 'rouge', 6);

echo '<p>Bonjour, je m\'appelle ' . $garfield->getName() . ', je suis de couleur ' . $garfield->getColor() . ' qui a ' . $garfield->getAge() . ' ans</p>';
echo '<p>Bonjour, je m\'appelle ' . $felix->getName() . ', je suis de couleur ' . $felix->getColor() . '</p>';

echo '<p>' . $garfield->getName() . ' et ' . $felix->getName() . ' se balade dans la rue</p>';

echo '<p>Et l\'hiver passa.......</p>';
$garfield->setAge(6);
echo '<p>Bonjour, je m\'appelle ' . $garfield->getName() . ', je suis de couleur ' . $garfield->getColor() . ' qui a ' . $garfield->getAge() . ' ans</p>';
