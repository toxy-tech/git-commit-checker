<?php

namespace ToxyTech\GitCommitChecker\Providers;

use ToxyTech\GitCommitChecker\Commands\InstallCommand;
use ToxyTech\GitCommitChecker\Commands\PreCommitHookCommand;
use Illuminate\Support\ServiceProvider;

class CommandServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        if (! $this->app->runningInConsole()) {
            return;
        }

        $this->commands([
            InstallCommand::class,
            PreCommitHookCommand::class,
        ]);
    }
}
