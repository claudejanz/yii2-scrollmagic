Yii2 ScrollMagic
================
[![Latest Stable Version](https://poser.pugx.org/claudejanz/yii2-scrollmagic/v/stable.svg)](https://packagist.org/packages/claudejanz/yii2-scrollmagic) [![Total Downloads](https://poser.pugx.org/claudejanz/yii2-scrollmagic/downloads.svg)](https://packagist.org/packages/claudejanz/yii2-scrollmagic) [![Latest Unstable Version](https://poser.pugx.org/claudejanz/yii2-scrollmagic/v/unstable.svg)](https://packagist.org/packages/claudejanz/yii2-scrollmagic) [![License](https://poser.pugx.org/claudejanz/yii2-scrollmagic/license.svg)](https://packagist.org/packages/claudejanz/yii2-scrollmagic)


Yii2 ScrollMagic integration

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist claudejanz/yii2-scrollmagic "*"
```

or add

```
"claudejanz/yii2-scrollmagic": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
<?php
// set Js controller
$controller = new ScrollController([
    'globalSceneOptions'=> [
        'triggerHook'=> "onEnter",
    ]
]);

$i = 0;
while ($i < 2) {
    // some tags
    echo Html::beginTag('section', ['class' => 'home_banner']);
    echo Html::img('@web/images/prangins.jpg', ['class' => 'img-responsive']);
    echo Html::beginTag('div', ['class' => 'container']);
    $title = 'Klod.ch';
    echo Html::tag('p', $title, ['class' => 'title', 'id' => 'title_' . $i]);
    $text = 'Une agence digitale';
    echo Html::tag('p', $text, ['class' => 'teaser']);
    $text = 'Nous développons des applications & des sites Web<br/>
Société Basée à Prangins';
    echo Html::tag('p', $text, ['class' => 'baseline']);
    echo Html::endTag('div');
    echo Html::endTag('section');
    
    // js 
    $scene = new ScrollScene(['triggerElement'=>'#title_'.$i]);
    $scene->setTween('#title_' . $i, 4, ['backgroundColor'=>'red']);
    $scene->addIndicators(['name' => $i . ' (duration: 0)']);
    $scene->addTo($controller);
    $i++;
}
?>
```