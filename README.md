# class-finder

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE)
[![Total Downloads][ico-downloads]][link-downloads]

[![Coverage Status][ico-coverage]][link-coverage]
[![Sensiolabs_Medal][ico-code-quality-sensio]][link-code-quality-sensio]
[![Quality Score][ico-code-quality-scrutinizer]][link-code-quality-scrutinizer]

class-finder composer package

## Install

Via Composer

``` bash
$ composer require redreams/class-finder
```

## Usage

``` php

use Redreams\ClassFinder\ClassFinder;

$className = ClassFinder::find($phpSourceCode);

```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please email dev@gennadyx.tech instead of using the issue tracker.

## Credits

- [Gennady Knyazkin][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.

[ico-version]: https://img.shields.io/packagist/v/redreams/class-finder.svg?style=flat
[ico-license]: https://img.shields.io/packagist/l/redreams/class-finder.svg
[ico-coverage]: https://img.shields.io/scrutinizer/coverage/g/redreams/class-finder.svg?style=flat
[ico-code-quality-scrutinizer]: https://img.shields.io/scrutinizer/g/redreams/class-finder.svg?style=flat
[ico-code-quality-sensio]: https://insight.sensiolabs.com/projects/8f6eeb10-0a4f-4b63-96ec-cf274bd192e3/mini.png
[ico-downloads]: https://img.shields.io/packagist/dt/redreams/class-finder.svg?style=flat

[link-packagist]: https://packagist.org/packages/redreams/class-finder
[link-coverage]: https://scrutinizer-ci.com/g/redreams/class-finder/code-structure
[link-code-quality-scrutinizer]: https://scrutinizer-ci.com/g/redreams/class-finder
[link-code-quality-sensio]: https://insight.sensiolabs.com/projects/8f6eeb10-0a4f-4b63-96ec-cf274bd192e3
[link-downloads]: https://packagist.org/packages/redreams/class-finder
[link-author]: http://gennadyx.tech
[link-contributors]: https://github.com/redreams/class-finder/contributors
