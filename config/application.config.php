<?php
/**
 * {ORG_NAME} / {APP_NAME} ({APP_WEBSITE})
 *
 * @link {APP_REPOSITORY} for the canonical source repository
 * @copyright Copyright (c) {YEAR} {ORG_NAME} ({APP_WEBSITE})
 */

return [
    'modules' => require __DIR__ . '/modules.config.php',
    'module_listener_options' => [
        'module_paths' => [
            './module',
            './vendor',
        ],
        'config_glob_paths' => [
            realpath(__DIR__) . '/autoload/{{,*.}global,{,*.}local}.php',
        ],
        'cache_dir' => 'data/cache/',
        'config_cache_enabled' => true,
        'config_cache_key' => 'application.config.cache',
        'module_map_cache_enabled' => true,
        'module_map_cache_key' => 'application.module.cache',
    ],
    'service_listener_options' => [],
    'service_manager' => [],
];
