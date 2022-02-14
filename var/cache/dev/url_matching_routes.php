<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/register' => [[['_route' => 'user_register', '_controller' => 'App\\Controller\\AuthController::register'], null, ['POST' => 0], null, false, false, null]],
        '/api/login_check' => [[['_route' => 'user_token', '_controller' => 'App\\Controller\\AuthController::getTokenUser'], null, ['POST' => 0], null, false, false, null]],
        '/api/order' => [[['_route' => 'order_create', '_controller' => 'App\\Controller\\OrderController::create'], null, ['POST' => 0], null, false, false, null]],
        '/api/order/list' => [[['_route' => 'order_lists', '_controller' => 'App\\Controller\\OrderController::lists'], null, ['GET' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/api/order/(\\d+)(?'
                    .'|(*:26)'
                .')'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:62)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        26 => [
            [['_route' => 'order_edit', '_controller' => 'App\\Controller\\OrderController::edit'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'order_delete', '_controller' => 'App\\Controller\\OrderController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'order_list', '_controller' => 'App\\Controller\\OrderController::list'], ['id'], ['GET' => 0], null, false, true, null],
        ],
        62 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
