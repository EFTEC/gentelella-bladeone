# gentelella-bladeone
A bootstrap 3 admin using bladeone template (php).

Unlikely other products, it only requires a single file BladeOne.php to runs. So it could runs in vanilla php without any framework.




![Gentelella Bootstrap Admin Template](https://cdn.colorlib.com/wp/wp-content/uploads/sites/2/gentelella-admin-template-preview.jpg "Gentelella Theme Browser Preview")

**[Live template Running on heroku](https://gentella-bladeone.herokuapp.com/index.php)**

# Install using composer
``` 
composer require EFTEC/gentelella-bladeone
```
# Install plain PHP
_All the references and resources are included in this project._
``` 
Just download the folder to a web server and run /index.php
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
* **\\** = Controllers files.  They simply use Bladeone and reder the views.  
* **\views** = The templates based in gentelella. The templates are compatible with Laravel's Blade  
* **\images** = images used by the views.   
* **\js** = Custom javascript.   
* **\css** = Custom stylesheet   
* **\vendor** = third party php libraries (BladeOne)
* **\vendors** = third party javascript libraries   
* **\compiled** = a folder when the compiled \views are created. It auto generates.   



# Dependencies PHP

* It requires BladeOne (PHP) 1.8 or higher.  Included in the project.
* PHP 5.5 or higher.

# Dependencies Javascript / Css 
_(all included)_  

* JQuery
* Bootstrap
* TODO: Others.

# Important!:
The files:   
**\views\\_shared\master.blade.php    
\views\\_shared\masterfull.blade.php** 

contain a code to Google analytics. You could remove it.
Google analytics is used for the heroku demo.

``` 
<!-- google analytics, please remove it -->
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-99820696-1', 'auto');
    ga('send', 'pageview');

</script>
<!-- google analytics, please remove it -->
```


# Version

* 0.1 - 2017-05-21 first version (beta)   
* 0.2 - 2017-05-24 second version. 99% its up and running. SCSS fixes.      


# Todo

## templates
| Template | Version/Status |
|---------|--------|
| index.blade.php | 0.1 OK|
| calendar.blade.php | 0.1 OK  |
| chartjs.blade.php | 0.1 OK|
| chartjs2.blade.php | 0.1 OK|
| contacts.blade.php | 0.1 OK|
| echarts.blade.php | 0.1 OK|
| e_commerce.blade.php | 0.2 OK|
| fixed_footer.blade.php | 0.2 OK|
| fixed_sidebar.blade.php | 0.2 OK|
| form.blade.php | 0.1 OK|
| form_advanced.blade.php | 0.1 OK|
| form_buttons.blade.php | 0.1 OK|
| form_upload.blade.php | 0.1 OK|
| form_validation.blade.php | 0.2 OK|
| form_wizards.blade.php | 0.2 OK|
| general_elements.blade.php | 0.2 OK|
| glyphicons.blade.php | 0.2 OK|
| icons.blade.php | 0.2 OK|
| inbox.blade.php | 0.2 OK|
| index.blade.php | 0.1 OK|
| index2.blade.php | 0.2 OK|
| index3.blade.php | 0.2 OK|
| invoice.blade.php | 0.2 OK|
| level2.blade.php | 0.2 OK|
| login.blade.php | 0.2 OK|
| map.blade.php | 0.1 NOT TESTED|
| media_gallery.blade.php | 0.2 OK|
| morisjs.blade.php | 0.2 OK|
| other_charts.blade.php | 0.2 OK|
| page_403.blade.php | 0.1 OK|
| page_404.blade.php | 0.1 OK|
| page_500.blade.php | 0.1 OK|
| plain_page.blade.php | 0.1 OK|
| pricing_tables.blade.php | 0.1 OK|
| profile.blade.php | 0.2 OK|
| projects.blade.php | 0.2 OK|
| project_detail.blade.php | 0.2 OK|
| tables.blade.php | 0.2 OK|
| tables_dynamic.blade.php | 0.2 OK|
| typography.blade.php | 0.2 OK|
| widgets.blade.php | 0.2 OK|
| xx.blade.php | 0.1 What is that? |

## License information


BladeOne is licensed under The MIT License (MIT). Which means that you can use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software. But you always need to state that Jorge Castro Castillo is the original author of this library.

Gentelella copyright Colorlib (https://colorlib.com/). Licensed under The MIT License (MIT).   

Animate copyright Daniel Eden (https://daneden.github.io). Licensed under The MIT License (MIT).   

Autosize copyright Jack Moore. Licensed under The MIT License (MIT).   

TODO: other licenses.
