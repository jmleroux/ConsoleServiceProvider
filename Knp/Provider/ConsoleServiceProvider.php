<?php

namespace Knp\Provider;

use Knp\Console\Application as ConsoleApplication;
use Knp\Console\ConsoleEvents;
use Knp\Console\ConsoleEvent;
use Pimple\Container;
use Pimple\ServiceProviderInterface;
use Silex\Application;

class ConsoleServiceProvider implements ServiceProviderInterface
{
    public function register(Container $container)
    {
        $container['console'] = function() use ($container) {
            $containerlication = new ConsoleApplication(
                $container,
                $container['console.project_directory'],
                $container['console.name'],
                $container['console.version']
            );

            $container['dispatcher']->dispatch(ConsoleEvents::INIT, new ConsoleEvent($containerlication));

            return $containerlication;
        };
    }
}
