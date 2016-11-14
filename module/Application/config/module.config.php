<?php
/**
 * {ORG_NAME} / {APP_NAME} ({APP_WEBSITE})
 *
 * @link {APP_REPOSITORY} for the canonical source repository
 * @copyright Copyright (c) {YEAR} {ORG_NAME} ({APP_WEBSITE})
 * @license {APP_REPOSITORY}/blob/master/LICENSE.md {LICENSE}
 */

namespace Application;

use Zend\Router\Http\Literal;
use Zend\ServiceManager\Factory\InvokableFactory;

return [
    'controllers' => [
        'factories' => [
            Controller\IndexController::class => InvokableFactory::class,
        ],
    ],
    'router' => [
        'routes' => [
            'home' => [
                'type' => Literal::class,
                'options' => [
                    'route' => '/',
                    'defaults' => [
                        'controller' => Controller\IndexController::class,
                        'action' => 'index',
                    ],
                ],
            ],
        ],
    ],
    'session_config' => [
        'name' => 'application',
        'remember_me_seconds' => 3600,
    ],
    'session_storage' => [
        'type' => 'Zend\\Session\\Storage\\SessionArrayStorage',
    ],
    'session_containers' => [
    ],
    'view_manager' => [
        'doctype' => 'HTML5',
        'not_found_template' => 'error/404',
        'exception_template' => 'error/index',
        'template_map' => [
            'layout/layout' => __DIR__ . '/../view/layout/layout.phtml',
            'application/index/index' => __DIR__ . '/../view/application/index/index.phtml',
            'error/404' => __DIR__ . '/../view/error/404.phtml',
            'error/index' => __DIR__ . '/../view/error/index.phtml',
        ],
        'template_path_stack' => [
            __DIR__ . '/../view',
        ],
    ],
];
