# gentelella-bladeone
A bootstrap 3 admin using bladeone template (php).




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
* **\views** = The templates based in gentelella  
* **\images** = images used by the views.   
* **\js** = javascript used.   
* **\css** = stylesheet used   
* **\vendor** = php libraries (BladeOne)
* **\vendors** = javascript libraries   
* **\compiled** = a folder when the compiled \views are created.   



# Dependencies

* It requires BladeOne (PHP) 1.8 or higher.
* PHP 5.5 or higher.

# Versions

0.1 first version (beta)

# Todo

## templates
| Template | Version/Status |
|---------|--------|
| index.blade.php | 0.1 OK|
| calendar.blade.php | 0.1 OK  |
| chartjs.blade.php | 0.1 NOT TESTED|
| chartjs2.blade.php | 0.1 NOT TESTED|
| contacts.blade.php | 0.1 NOT TESTED|
| echarts.blade.php | 0.1 NOT TESTED|
| e_commerce.blade.php | 0.1 NOT TESTED|
| fixed_footer.blade.php | 0.1 NOT TESTED|
| fixed_sidebar.blade.php | 0.1 NOT TESTED|
| form.blade.php | 0.1 NOT TESTED|
| form_advanced.blade.php | 0.1 NOT TESTED|
| form_buttons.blade.php | 0.1 NOT TESTED|
| form_upload.blade.php | 0.1 NOT TESTED|
| form_validation.blade.php | 0.1 NOT TESTED|
| form_wizards.blade.php | 0.1 NOT TESTED|
| general_elements.blade.php | 0.1 NOT TESTED|
| glyphicons.blade.php | 0.1 NOT TESTED|
| icons.blade.php | 0.1 NOT TESTED|
| inbox.blade.php | 0.1 NOT TESTED|
| index2.blade.php | 0.1 NOT TESTED|
| index3.blade.php | 0.1 NOT TESTED|
| invoice.blade.php | 0.1 NOT TESTED|
| level2.blade.php | 0.1 NOT TESTED|
| login.blade.php | 0.1 NOT TESTED|
| map.blade.php | 0.1 NOT TESTED|
| media_gallery.blade.php | 0.1 NOT TESTED|
| morisjs.blade.php | 0.1 NOT TESTED|
| other_charts.blade.php | 0.1 NOT TESTED|
| page_403.blade.php | 0.1 NOT TESTED|
| page_404.blade.php | 0.1 NOT TESTED|
| page_500.blade.php | 0.1 NOT TESTED|
| plain_page.blade.php | 0.1 NOT TESTED|
| pricing_tables.blade.php | 0.1 NOT TESTED|
| profile.blade.php | 0.1 NOT TESTED|
| projects.blade.php | 0.1 NOT TESTED|
| project_detail.blade.php | 0.1 NOT TESTED|
| tables.blade.php | 0.1 NOT TESTED|
| tables_dynamic.blade.php | 0.1 NOT TESTED|
| typography.blade.php | 0.1 NOT TESTED|
| widgets.blade.php | 0.1 NOT TESTED|
| xx.blade.php | 0.1 What is that? |

## License information


BladeOne is licensed under The MIT License (MIT). Which means that you can use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software. But you always need to state that Jorge Castro Castillo is the original author of this library.

Gentelella copyright Colorlib. Licensed under The MIT License (MIT).   

Animate copyright Daniel Eden. Licensed under The MIT License (MIT).   

Autosize copyright Jack Moore. Licensed under The MIT License (MIT).   

TODO: other licenses.
