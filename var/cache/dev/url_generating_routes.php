<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    'home.index' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/']], [], [], []],
    'app_materiel' => [[], ['_controller' => 'App\\Controller\\MaterielController::index'], [], [['text', '/materiel']], [], [], []],
    'materiel_edit' => [['id'], ['_controller' => 'App\\Controller\\MaterielController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/materiel']], [], [], []],
    'App\Controller\HomeController::index' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/']], [], [], []],
    'App\Controller\MaterielController::index' => [[], ['_controller' => 'App\\Controller\\MaterielController::index'], [], [['text', '/materiel']], [], [], []],
    'App\Controller\MaterielController::edit' => [['id'], ['_controller' => 'App\\Controller\\MaterielController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/materiel']], [], [], []],
];
