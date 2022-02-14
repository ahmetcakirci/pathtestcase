<?php

namespace Container2aG84xw;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Firewall_Authenticator_DevService extends App_KernelDevContainer
{
    /*
     * Gets the private 'security.firewall.authenticator.dev' shared service.
     *
     * @return \Symfony\Component\Security\Http\Firewall\AuthenticatorManagerListener
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['security.firewall.authenticator.dev'] = new \Symfony\Component\Security\Http\Firewall\AuthenticatorManagerListener(new \Symfony\Component\Security\Http\Authentication\AuthenticatorManager([], ($container->services['.container.private.security.token_storage'] ?? $container->get_Container_Private_Security_TokenStorageService()), ($container->privates['security.event_dispatcher.dev'] ?? $container->getSecurity_EventDispatcher_DevService()), 'dev', ($container->privates['logger'] ?? ($container->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())), true, true, []));
    }
}