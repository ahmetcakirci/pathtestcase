<?php

namespace Container2aG84xw;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_TttohfHService extends App_KernelDevContainer
{
    /*
     * Gets the private '.service_locator.TttohfH' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.TttohfH'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'event_dispatcher' => ['services', 'event_dispatcher', 'getEventDispatcherService', false],
            'security.event_dispatcher.api' => ['privates', 'security.event_dispatcher.api', 'getSecurity_EventDispatcher_ApiService', true],
            'security.event_dispatcher.dev' => ['privates', 'security.event_dispatcher.dev', 'getSecurity_EventDispatcher_DevService', false],
            'security.event_dispatcher.login' => ['privates', 'security.event_dispatcher.login', 'getSecurity_EventDispatcher_LoginService', true],
            'security.event_dispatcher.main' => ['privates', 'security.event_dispatcher.main', 'getSecurity_EventDispatcher_MainService', false],
        ], [
            'event_dispatcher' => 'Symfony\\Component\\EventDispatcher\\EventDispatcher',
            'security.event_dispatcher.api' => 'Symfony\\Component\\EventDispatcher\\EventDispatcher',
            'security.event_dispatcher.dev' => 'Symfony\\Component\\EventDispatcher\\EventDispatcher',
            'security.event_dispatcher.login' => 'Symfony\\Component\\EventDispatcher\\EventDispatcher',
            'security.event_dispatcher.main' => 'Symfony\\Component\\EventDispatcher\\EventDispatcher',
        ]);
    }
}
