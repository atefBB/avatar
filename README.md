Avatar Component for Orchestra Platform
==============

Avatar Component provide support for driver based avatar provider for your Laravel, PHP or Orchestra Platform application.

[![Latest Stable Version](https://img.shields.io/github/release/orchestral/avatar.svg?style=flat)](https://packagist.org/packages/orchestra/avatar)
[![Total Downloads](https://img.shields.io/packagist/dt/orchestra/avatar.svg?style=flat)](https://packagist.org/packages/orchestra/avatar)
[![MIT License](https://img.shields.io/packagist/l/orchestra/avatar.svg?style=flat)](https://packagist.org/packages/orchestra/avatar)
[![Build Status](https://img.shields.io/travis/orchestral/avatar/master.svg?style=flat)](https://travis-ci.org/orchestral/avatar)
[![Coverage Status](https://img.shields.io/coveralls/orchestral/avatar/master.svg?style=flat)](https://coveralls.io/r/orchestral/avatar?branch=master)
[![Scrutinizer Quality Score](https://img.shields.io/scrutinizer/g/orchestral/avatar/master.svg?style=flat)](https://scrutinizer-ci.com/g/orchestral/avatar/)

## Table of Content

* [Version Compatibility](#compatibility)
* [Installation](#installation)
* [Configuration](#configuration)
* [Usage](#usage)
* [Change Log](http://orchestraplatform.com/docs/latest/components/avatar/changes#v3-0)

## Version Compatibility

Laravel  | Avatar
:--------|:---------
 4.1.x   | 2.1.x
 4.2.x   | 2.2.x
 5.0.x   | 3.0.x
 5.1.x   | 3.1.x@dev

## Installation

To install through composer, simply put the following in your `composer.json` file:

```json
{
	"require": {
		"orchestra/avatar": "3.1.*"
	}
}
```

And then run `composer install` to fetch the package.

### Quick Installation

You could also simplify the above code by using the following command:

```
composer require "orchestra/avatar=3.1.*"
```

### Configuration

Add `Orchestra\Avatar\AvatarServiceProvider` service provider in `config/app.php`.

```php
'providers' => [

	// ...

	'Orchestra\Avatar\AvatarServiceProvider',
],
```

You might also want to add `Orchestra\Support\Facade\Avatar` to class aliases in `config/app.php`:

```php
'aliases' => [

	// ...

    'Avatar' => 'Orchestra\Support\Facade\Avatar',
],
```

## Usage

You can easily display an avatar by passing a `User` instance.

```php
<?php

$user = User::find(1);

$avatar = Avatar::user($user)->render();
```
