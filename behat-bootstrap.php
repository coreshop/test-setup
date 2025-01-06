<?php
/*
 * CoreShop
 *
 * This source file is available under two different licenses:
 *  - GNU General Public License version 3 (GPLv3)
 *  - CoreShop Commercial License (CCL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 * @copyright  Copyright (c) CoreShop GmbH (https://www.coreshop.com)
 * @license    https://www.coreshop.com/license     GPLv3 and CCL
 *
 */

if (!defined('PIMCORE_PROJECT_ROOT')) {
    define(
        'PIMCORE_PROJECT_ROOT',
        getenv('PIMCORE_PROJECT_ROOT')
            ?: getenv('REDIRECT_PIMCORE_PROJECT_ROOT')
            ?: realpath(getcwd())
    );
}

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (file_exists(PIMCORE_PROJECT_ROOT . '/BehatKernel.php')) {
    require_once PIMCORE_PROJECT_ROOT . '/BehatKernel.php';
}

if (file_exists(PIMCORE_PROJECT_ROOT.'/pimcore/config/bootstrap.php')) {
    require_once PIMCORE_PROJECT_ROOT.'/pimcore/config/bootstrap.php';
}
else {
    \Pimcore\Bootstrap::setProjectRoot();
    \Pimcore\Bootstrap::bootstrap();
}
