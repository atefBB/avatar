Multiple Avatar Provider for Laravel
==============

`Orchestra\Avatar` provide support for driver based avatar provider for your Laravel application.

[![Latest Stable Version](https://poser.pugx.org/orchestra/avatar/v/stable.png)](https://packagist.org/packages/orchestra/avatar) 
[![Total Downloads](https://poser.pugx.org/orchestra/avatar/downloads.png)](https://packagist.org/packages/orchestra/avatar) 
[![Build Status](https://travis-ci.org/orchestral/avatar.svg?branch=2.1)](https://travis-ci.org/orchestral/avatar) 
[![Coverage Status](https://coveralls.io/repos/orchestral/avatar/badge.png?branch=2.1)](https://coveralls.io/r/orchestral/avatar?branch=2.1) 
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/orchestral/avatar/badges/quality-score.png?b=2.1)](https://scrutinizer-ci.com/g/orchestral/avatar/?branch=2.1) 

## Version Compatibility

Laravel      | Avatar
:--------------|:---------------
 4.1.x	    | 2.1.x

## Installation

To install through composer, simply put the following in your `composer.json` file:
 
```json
{
	"require": {
		"orchestra/avatar": "2.1.*"
	}	
}
```

And then run `composer install` to fetch the package.

### Quick Installation

You could also simplify the above code by using the following command:

```
composer require "orchestra/avatar=2.1.*"
```

### Setup

Add `Orchestra\Avatar\AvatarServiceProvider` service provider in `app/config/app.php`.

```php
'providers' => array(

	// ...
	'Orchestra\Avatar\AvatarServiceProvider`,
),
```

You might also want to add `Orchestra\Avatar\Facade` to class aliases in `app/config/app.php`:

```php
'aliases' => array(
	
	// ...
	'Avatar' => 'Orchestra\Avatar\Facade`,
),
```

## Usage

```php
$user = User::find(1);

$avatar = Avatar::user($user)->render();
```