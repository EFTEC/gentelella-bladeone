# gentelella-bladeone
A bootstrap 3 admin using bladeone template (php)


![Gentelella Bootstrap Admin Template](https://cdn.colorlib.com/wp/wp-content/uploads/sites/2/gentelella-admin-template-preview.jpg "Gentelella Theme Browser Preview")

**[Template Demo](https://colorlib.com/polygon/gentelella/index.html)**

# Install using composer
``` 
composer require EFTEC/gentelella-bladeone
```

# How it works: 

```
<?php
include "vendor/eftec/bladeone/BladeOne.php";
use eftec\bladeone;

$blade=new bladeone\BladeOne(__DIR__.'/views',__DIR__ . '/compiled');
define("BLADEONE_MODE",1);

$values=['title'=>'Gentelella-bladeone | index ','username'=>'Hillary Trump'];

echo $blade->run("home.index",$values);

```
where **home.index** is the index template located in the folder **\views\home**


# folders
\views = the blade templates views used.   
\images = images used by the views.   
\js = javascript used.   
\css = stylesheet used   
\vendor = php libraries (BladeOne)
\vendors = javascript libraries   
\compiled = a folder when the compiled \views are created.   


# Versions

0.1 first version (beta)

## License information


BladeOne is licensed under The MIT License (MIT). Which means that you can use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software. But you always need to state that Jorge Castro Castillo is the original author of this library.

Gentelella is licensed under The MIT License (MIT). Which means that you can use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software. But you always need to state that Colorlib is the original author of this template.

