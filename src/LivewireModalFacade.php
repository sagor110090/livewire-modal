<?php

namespace MehediHasanSagor\LivewireModal;

use Illuminate\Support\Facades\Facade;

/**
 * @see \MehediHasanSagor\LivewireModal\Skeleton\SkeletonClass
 */
class LivewireModalFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'livewire modal ';
    }
}
