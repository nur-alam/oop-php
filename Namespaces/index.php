<?php 


include 'Java.php';
include 'Php.php';
include 'Ruby.php';

use nur\Java as j;
use laravel\nur\Php as p;
use laravel\nur as l;
use nur\Ruby as r;

new j;
new p;
new r;

$n = new j;
$n->yo()."<br>";

echo pi."<br>";
echo l\react."<br>";
echo l\getname("nur");
 

/*use laravel\nur\Php as p;
use nur\Java as j;
use nur\Ruby as r;

new p;
new j;
new r;

echo java;

echo nur\js;

nur\prog();*/

