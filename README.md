yii2-ajaxcrud-bs5
=============

[![Latest Stable Version](https://poser.pugx.org/s4studio/yii2-ajaxcrud-bs5/v/stable)](https://packagist.org/packages/s4studio/yii2-ajaxcrud-bs5)
[![License](https://poser.pugx.org/s4studio/yii2-ajaxcrud-bs5/license)](https://packagist.org/packages/s4studio/yii2-ajaxcrud-bs5)
[![Total Downloads](https://poser.pugx.org/s4studio/yii2-ajaxcrud-bs5/downloads)](https://packagist.org/packages/s4studio/yii2-ajaxcrud-bs5)

Gii CRUD template for Single Page Ajax Administration for yii2

![yii2 ajaxcrud extension screenshot](https://c1.staticflickr.com/1/330/18659931433_6e3db2461d_o.png "yii2 ajaxcrud extension screenshot")


Features
------------
+ Create, read, update, delete in onpage with Ajax
+ Bulk delete suport
+ Pjax widget suport
+ Export function(pdf,html,text,csv, excel,json)

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist s4studio/yii2-ajaxcrud "dev-master"
```

or add

```
"s4studio/yii2-ajaxcrud": "dev-master"
```

to the require section of your `composer.json` file.


Usage
-----
For first you must enable Gii module Read more about [Gii code generation tool](http://www.yiiframework.com/doc-2.0/guide-tool-gii.html)

Because this extension used [kartik-v/yii2-grid](https://github.com/kartik-v/yii2-grid) extensions so we must config gridview module before

Let 's add into modules config in your main config file
```php
'modules' => [
    'gridview' =>  [
        'class' => \kartik\grid\Module::class,
        'bsVersion' => '4.x', // or '5.x'
        // 'downloadAction' => 'gridview/export/download',
        // 'i18n' => [],
        // 'exportEncryptSalt' => 'tG85vd1',
    ]       
]
```
Note: Font Awesome icons not required! See [Bootstrap icons](https://demos.krajee.com/grid#bootstrap-icons)!

You can then access Gii through the following URL:

http://localhost/path/to/index.php?r=gii

and you can see <b>Ajax CRUD Generator</b>


Lets contibute to keep it updated and make it useful for all friends.
