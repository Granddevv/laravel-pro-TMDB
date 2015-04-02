<?php

namespace Wtfz\TmdbPackage\Adapters;

use Symfony\Component\EventDispatcher\EventDispatcherInterface as SymfonyDispatcher;
use Illuminate\Events\Dispatcher as LaravelDispatcher;

/**
 * This adapter provides a Laravel integration for applications
 * using the Symfony EventDispatcherInterface
 * It passes any request on to a Symfony Dispatcher and only
 * uses the Laravel Dispatcher only when dispatching events
 */
class Laravel4EventDispatcher extends EventDispatcherAdapter
{
    /**
     * Forward all methods to the Laravel Events Dispatcher
     * @param Symfony\Component\EventDispatcher\EventDispatcherInterface $symfonyDispatcher
     * @param Illuminate\Events\Dispatcher $laravelDispatcher
     */
    public function __construct(LaravelDispatcher $laravelDispatcher, SymfonyDispatcher $symfonyDispatcher)
    {
        $this->laravelDispatcher = $laravelDispatcher;
        $this->symfonyDispatcher = $symfonyDispatcher;
    }
}
