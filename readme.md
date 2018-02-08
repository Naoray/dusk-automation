# dusk-automation

[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Total Downloads](https://img.shields.io/packagist/dt/naoray/dusk-automation.svg?style=flat-square)](https://packagist.org/packages/naoray/dusk-automation)

[Laravel Dusk](https://laravel.com/docs/5.5/dusk) does an awesome job at testing frontend stuff. This packages aims to bring 
dusks power outside the tests directory to automate web tasks.

## Install
#### Laravel 5.6+
`composer require naoray/dusk-automation`

#### Laravel 5.5
`composer require naoray/dusk-automation:1.0`

## Usage
Make sure to create the storage directories listed in the configs.

```php
use Laravel\Dusk\Browser;

class DoSomethingAutomated
{
    public function foo() {
        Dusk::browse(Browser $browser) {
            $browser->visit('some_website.com')
                ->assertSee('some website')
                ->press('#button')
                ->... // see laravel dusk docu for methods
        }
    }
```

## Testing
Run the tests with:

``` bash
vendor/bin/phpunit
```

## Changelog
Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing
Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security
If you discover any security-related issues, please email krishan.koenig@googlemail.com instead of using the issue tracker.

## License
The MIT License (MIT). Please see [License File](/LICENSE.md) for more information.