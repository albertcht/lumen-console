<?php

namespace AlbertCht\Lumen\Console;

use Illuminate\Support\ServiceProvider;

class ConsoleServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                EnvironmentCommand::class,
                EventGenerateCommand::class,
                EventMakeCommand::class,
                JobMakeCommand::class,
                KeyGenerateCommand::class,
                MailMakeCommand::class,
                ModelMakeCommand::class,
                NotificationMakeCommand::class,
                PolicyMakeCommand::class,
                ProviderMakeCommand::class,
                RequestMakeCommand::class,
                ResourceMakeCommand::class,
                RuleMakeCommand::class,
                ServeCommand::class,
                StorageLinkCommand::class,
                TestMakeCommand::class,
            ]);
        }
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}