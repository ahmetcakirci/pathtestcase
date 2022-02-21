<?php

namespace ContainerN6bCz8H;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Access_DecisionManagerService extends App_KernelDevContainer
{
    /*
     * Gets the private 'security.access.decision_manager' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\AccessDecisionManager
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['security.access.decision_manager'] = new \Symfony\Component\Security\Core\Authorization\AccessDecisionManager(new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['security.access.authenticated_voter'] ?? $container->load('getSecurity_Access_AuthenticatedVoterService'));
            yield 1 => ($container->privates['security.access.simple_role_voter'] ?? ($container->privates['security.access.simple_role_voter'] = new \Symfony\Component\Security\Core\Authorization\Voter\RoleVoter()));
        }, 2), new \Symfony\Component\Security\Core\Authorization\Strategy\AffirmativeStrategy(false));
    }
}
