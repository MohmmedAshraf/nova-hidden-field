# Laravel Nova Hidden Field
[![GitHub license](https://img.shields.io/github/license/MohmmedAshraf/nova-hidden-field.svg)](https://github.com/MohmmedAshraf/nova-hidden-field/blob/master/LICENSE.md)
[![GitHub issues](https://img.shields.io/github/issues/MohmmedAshraf/nova-hidden-field.svg)](https://github.com/MohmmedAshraf/nova-hidden-field/issues)
[![Total Downloads](https://poser.pugx.org/outhebox/nova-hidden-field/downloads)](https://packagist.org/packages/outhebox/nova-hidden-field)


## Description
This field give the ability to add a hidden fields to your resources.

## Requrements
* Laravel 5.7+ with [Nova](https://nova.laravel.com).

## Installation
This package can be installed through Composer.
```bash
composer require outhebox/nova-hidden-field
```

## Example Usage
Add the field to your resource in the ```fields``` method:
```php
use Outhebox\NovaHiddenField\HiddenField;

HiddenField::make('User', 'user_id')
    ->current_user_id(),
```

Also you can override the default value:
```php
use Outhebox\NovaHiddenField\HiddenField;

HiddenField::make('User', 'column_name')
    ->default($this->get_client_id()),

/**
 * Function will return your value
 * the returned value should be string
 * 
 * @return string
 */
public function get_client_id()
{
    $client = Client::find(1)->first();
    return $client->id;
}
```

Another option you may like if you want to use the relationship fields:
```php
use Laravel\Nova\Fields\BelongsTo;
use Outhebox\NovaHiddenField\HiddenField;

HiddenField::make('User', 'user_id')
    ->hideFromIndex(),
    ->hideFromDetail(),
    ->current_user_id()

BelongsTo::make('User')
    ->hideWhenCreating(),
    ->hideWhenUpdating(),
```

## License
The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
