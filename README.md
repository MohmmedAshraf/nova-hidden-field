# Laravel Nova Hidden Field
[![GitHub license](https://img.shields.io/github/license/MohmmedAshraf/nova-hidden-field.svg)](https://github.com/MohmmedAshraf/nova-hidden-field/blob/master/LICENSE.md)
[![GitHub issues](https://img.shields.io/github/issues/MohmmedAshraf/nova-hidden-field.svg)](https://github.com/MohmmedAshraf/nova-hidden-field/issues)
[![Total Downloads](https://poser.pugx.org/outhebox/nova-hidden-field/downloads)](https://packagist.org/packages/outhebox/nova-hidden-field)


## Description
This field give the ability to add a hidden fields to your resources.

## Support

[<img src="https://outhebox-github-ads.s3.us-east-1.amazonaws.com/nova-hidden-field.jpg?t=1" width="419px" />](https://outhebox.dev/github-ad-click/nova-hidden-field).

Thank you for considering supporting the development of this package! If you'd like to contribute, you can buy me a coffee or sponsor me to help keep me motivated to continue improving this package. You can also support the project by starring ⭐ the repository.

To buy me a coffee, click the button below:

<a href="https://www.buymeacoffee.com/outhebox" target="_blank"><img src="https://cdn.buymeacoffee.com/buttons/default-orange.png" alt="Buy Me A Coffee" style="height: 51px !important;width: 217px !important;" ></a>

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
    ->defaultValue($this->get_client_id()),

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

## Donate
If you like this package, you can show your appreciation 💜 by [donating any amount via Patreon](https://www.patreon.com/m_ashraf) to support ongoing development.
