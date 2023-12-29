<?php

namespace Andromede\FilamentFlags;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FilamentFlagsServiceProvider extends PackageServiceProvider
{
    public static string $name = 'andromede-filament-flags';

    public function configurePackage(Package $package): void
    {
        $package
            ->name(static::$name)
            ->hasViews();
    }
}