<?php
// Copyright (c) Jorge Castro Castillo.  All rights reserved. MIT License

include "vendor/autoload.php";
use eftec\bladeone;
$blade=new bladeone\BladeOne(__DIR__.'/views',__DIR__ . '/compiled');
define("BLADEONE_MODE",1); // (optional) 1=forced (test),2=run fast (production), 0=automatic, default value.

$values=['title'=>'Gentelella-bladeone | invoice.blade.php ','username'=>'Hillary Trump'];
echo $blade->run("home.invoice",$values);
