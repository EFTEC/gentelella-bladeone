<?php
// Copyright (c) Jorge Castro Castillo.  All rights reserved. MIT License

use eftec\bladeone\BladeOne;

include "vendor/autoload.php";

$blade=new BladeOne(__DIR__.'/views',__DIR__ . '/compiled');
define("BLADEONE_MODE",1); // (optional) 1=forced (test),2=run fast (production), 0=automatic, default value.

$values=['title'=>'Gentelella-bladeone | form_advanced.blade.php ','username'=>'Hillary Trump'];
echo $blade->run("home.form_advanced",$values);
