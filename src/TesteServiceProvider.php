<?php

namespace Dnl4\Teste;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Dnl4\Teste\Commands\TesteCommand;

class TesteServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('teste')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_teste_table')
            ->hasCommand(TesteCommand::class);
    }
}
