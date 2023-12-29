# Filament Flags

[![Total Downloads](https://img.shields.io/packagist/dt/andromede/filament-flags.svg?style=flat-square)](https://packagist.org/packages/andromede/filament-flags)

> [!CAUTION]
> This branch is Work In Progress and should not be considered production-ready.

## TODO

- [ ] Form : Select, TextInput (prefix)
- [ ] Entry : IconEntry / ImageEntry
- [ ] Column : IconColumn / SelectColumn
- [ ] SelectInput
- [ ] MultiSelectInput (tags)
- [ ] Documentation

## Installation

Install the plugin with Composer:

```bash
composer require andromede/filament-flags:"^1.0" -W
```

## Form component

To use the flags form:

```php
use Andromede\FilamentFlags\Components\Forms\FlagsInput;

FlagsInput::make('flag')
    >size('small') // small, medium, large

```

## Table column

To use the flags column:

```php
use Andromede\FilamentFlags\Components\Columns\FlagsIconColumn;

FlagsIconColumn::make('flag')
    ->size('small') // small, medium, large

```

## Infolist entry

To use the flags entry:

```php
use Andromede\FilamentFlags\Infolists\Components\FlagsEntry;

FlagsEntry::make('flag')
    ->size('small') // small, medium, large

```

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Lionel Guichard](https://github.com/lguichard)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
