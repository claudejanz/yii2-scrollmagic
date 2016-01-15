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
// set Scrollmagic controller
$controller = new ScrollController([
//    'globalSceneOptions'=> [
//        'triggerHook'=> "onEnter",
//    ]
        ]);
$i = 0;

while ($i < 3) {

// some tags
    echo Html::beginTag('section', ['class' => 'home_banner']);
    echo Html::img('@web/images/prangins.jpg', ['class' => 'img-responsive']);
    echo Html::beginTag('div', ['class' => 'container']);
    $title = 'Klod.ch';
    echo Html::tag('p', $title, ['class' => 'title', 'id' => 'title_' . $i]);
    $teaser = 'Une agence digitale';
    echo Html::tag('p', $teaser, ['class' => 'teaser', 'id' => 'teaser_' . $i]);
    $text = 'Nous développons des applications & des sites Web<br/>
Société Basée à Prangins';
    echo Html::tag('p', $text, ['class' => 'baseline', 'id' => 'baseline_' . $i]);
    echo Html::endTag('div');
    echo Html::endTag('section');


// create a Screen
    $scene = new ScrollScene(['triggerElement' => '#title_' . $i]);
// create a Timeline
    $timeline = new TimelineMax(['yoyo' => true]);

// create Tweens
    $tween1 = TweenMax::from("#title_$i", 0.5, ['autoAlpha' => 0, 'scale' => 0]);
    $tween2 = TweenMax::to("#title_$i", 0.5, ['backgroundColor' => 'red', 'delay' => -0.25]);
    $tween3 = TweenMax::from("#teaser_$i", 0.5, ['autoAlpha' => 0, 'y' => 120]);
    $tween4 = TweenMax::to("#teaser_$i", 0.5, ['color' => 'darkgreen']);
    $tween5 = TweenMax::from("#baseline_$i", 0.5, ['autoAlpha' => 0, 'x' => 120]);

// add tweens to timeline
    $timeline->add($tween1)->add($tween2)->add($tween3)->add($tween4)->add($tween5);

// attach timeline to scene
    $scene->setTween($timeline);

// add indicator
    $scene->addIndicators(['name' => $i . ' (duration: 0)']);

//add to controller
    $scene->addTo($controller);
    $i++;
}
?>
```