<?php
/**
 * {ORG_NAME} / {APP_NAME} ({APP_WEBSITE})
 *
 * @link {APP_REPOSITORY} for the canonical source repository
 * @copyright Copyright (c) {YEAR} {ORG_NAME} ({APP_WEBSITE})
 * @license {APP_REPOSITORY}/blob/master/LICENSE.md {LICENSE}
 */

namespace Application;

use Zend\Console\Adapter\AdapterInterface;
use Zend\ModuleManager\Feature\ConfigProviderInterface;
use Zend\ModuleManager\Feature\ConsoleBannerProviderInterface;

class Module implements ConfigProviderInterface, ConsoleBannerProviderInterface
{
    public function getConfig()
    {
        return include __DIR__ . '/../config/module.config.php';
    }

    public function getConsoleBanner(AdapterInterface $console)
    {
        return '{APP_NAME}';
    }
}
