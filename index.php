<?php

use GodsDev\TempFireIceArda1\Union;

// The Composer auto-loader (official way to load Composer contents) to load external stuff automatically
require_once __DIR__ . '/vendor/autoload.php';

$a = [1 => 'a', 'b', 'c'];
$b = [2 => 'u', 'v', 'w'];
$t = new Union($a, $b);

echo '<pre>';
var_dump($t->getAll('self-test'));
