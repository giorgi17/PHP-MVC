<?php



require "vendor/autoload.php";

use Illuminate\Database\Capsule\Manager as Capsule;



$capsule = new Capsule;



$capsule->addConnection([

   "driver" => "mysql",

   "host" =>"127.0.0.1",

   "database" => "acl",

   "username" => "giorgi",

   "password" => "giorgi17"

]);

//Make this Capsule instance available globally.
$capsule->setAsGlobal();

// Setup the Eloquent ORM.
$capsule->bootEloquent();
