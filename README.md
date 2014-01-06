strawpool-php
=============

[![Downloads with Composer](https://poser.pugx.org/masnathan/strawpool-php/downloads.png)](https://packagist.org/packages/masnathan/strawpool-php)
[![SensioLabs Insight](https://insight.sensiolabs.com/projects/297d6f83-32a0-42a5-9386-8206f601c4c7/mini.png)](https://insight.sensiolabs.com/projects/297d6f83-32a0-42a5-9386-8206f601c4c7)
[![ReiDuKuduro @gittip](http://bottlepy.org/docs/dev/_static/Gittip.png)](https://www.gittip.com/ReiDuKuduro/)

Simple class that allows you to use strawpool on your website

# How to install via Composer

The recommended way to install is through [Composer](http://composer.org).

```sh
# Install Composer
$ curl -sS https://getcomposer.org/installer | php

# Add strawpool-php as a dependency
$ php composer.phar require masnathan/strawpool-php:*
```

Once it's installed, you need to require Composer's autoloader:

```php
require 'vendor/autoload.php';
```

#How to use

```php
$pool = new Strawpool('Title', array('option1', 'option2'), $multiple_choice = true, $permissive = false);

//you can can the iframe html doing this
echo $pool->getHtml($width = 600, $height = 332, $border = 0);
//or simply
echo $pool;

//The pool id is also available so you can do whatever you feel like
echo $pool->id;

```

# License

This library is under the MIT License, see the complete license [here](LICENSE)
