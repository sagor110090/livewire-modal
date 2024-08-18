<?php

namespace Sagor110090\LivewireModal\Providers;


use Sagor110090\LivewireModal\Components\Modals;
use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;

class LaravelLivewireModalsProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'livewire-modal');

        $this->publishes(
            [__DIR__ . '/../../resources/views' => resource_path('views/vendor/livewire-modal')],
            ['livewire-modal', 'livewire-modal:views']
        );

        Livewire::component('modals', Modals::class);
    }
}
