<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'user_register' => [[], ['_controller' => 'App\\Controller\\AuthController::register'], [], [['text', '/register']], [], [], []],
    'user_token' => [[], ['_controller' => 'App\\Controller\\AuthController::getTokenUser'], [], [['text', '/api/login_check']], [], [], []],
    'order_create' => [[], ['_controller' => 'App\\Controller\\OrderController::create'], [], [['text', '/api/order']], [], [], []],
    'order_edit' => [['id'], ['_controller' => 'App\\Controller\\OrderController::edit'], ['id' => '\\d+'], [['variable', '/', '\\d+', 'id', true], ['text', '/api/order']], [], [], []],
    'order_delete' => [['id'], ['_controller' => 'App\\Controller\\OrderController::delete'], ['id' => '\\d+'], [['variable', '/', '\\d+', 'id', true], ['text', '/api/order']], [], [], []],
    'order_list' => [['id'], ['_controller' => 'App\\Controller\\OrderController::list'], ['id' => '\\d+'], [['variable', '/', '\\d+', 'id', true], ['text', '/api/order']], [], [], []],
    'order_lists' => [[], ['_controller' => 'App\\Controller\\OrderController::lists'], [], [['text', '/api/order/list']], [], [], []],
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
];