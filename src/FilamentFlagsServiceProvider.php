<?php

namespace Andromede\FilamentFlags;

use BladeUI\Icons\Factory;
use Filament\Support\Facades\FilamentIcon;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Illuminate\Contracts\Container\Container;
use Illuminate\Filesystem\Filesystem;

class FilamentFlagsServiceProvider extends PackageServiceProvider
{
    public static string $name = 'filament-flags';

    public static string $viewNamespace = 'filament-flags';

    public function configurePackage(Package $package): void
    {
        $package
            ->name(static::$name);

        if (file_exists($package->basePath('/../resources/views'))) {
            $package->hasViews(static::$viewNamespace);
        }

        $configFileName = $package->shortName();

        if (file_exists($package->basePath("/../config/{$configFileName}.php"))) {
            $package->hasConfigFile();
        }

        $this->callAfterResolving(Factory::class, function (Factory $factory, Container $container) {
            $config = $container->make('config')->get('filament-flags', []);

            $factory->add('blade-filament-flags', array_merge(['path' => __DIR__ . '/../resources/svg'], $config));
        });
    }

    public function packageBooted(): void
    {
        $filesystem = new Filesystem();
        $files = $filesystem->allFiles(__DIR__ . '/../resources/svg');

        foreach ($files as $file) {
            if ($file->getExtension() !== 'svg') {
                continue;
            }

            $file_name =  pathinfo($file->getFilename(), PATHINFO_FILENAME);

            FilamentIcon::register([
                'filament-flags::' . $file_name => 'flag-'.$file_name
            ]);
        }
    }
}
