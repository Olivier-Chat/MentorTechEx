<?php
require 'Arena.php';
$akali = new Character("Akali", 100,10);
$garen = new Character("Garen", 100,20);
$arena = new Arena($akali,$garen);
echo $arena->fight();