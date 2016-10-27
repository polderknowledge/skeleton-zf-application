<?php
/**
 * {ORG_NAME} / {APP_NAME} ({APP_WEBSITE})
 *
 * @link {APP_REPOSITORY} for the canonical source repository
 * @copyright Copyright (c) {YEAR} {ORG_NAME} ({APP_WEBSITE})
 * @license {APP_REPOSITORY}/blob/master/LICENSE.md {LICENSE}
 */

namespace Application;

use Zend\ModuleManager\Feature\ConfigProviderInterface;

class Module implements ConfigProviderInterface
{
    public function getConfig()
    {
        return include __DIR__ . '/../config/module.config.php';
    }
}
