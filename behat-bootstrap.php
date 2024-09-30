<?php
/**
 * CoreShop.
 *
 * This source file is subject to the GNU General Public License version 3 (GPLv3)
 * For the full copyright and license information, please view the LICENSE.md and gpl-3.0.txt
 * files that are distributed with this source code.
 *
 * @copyright  Copyright (c) CoreShop GmbH (https://www.coreshop.org)
 * @license    https://www.coreshop.org/license     GNU General Public License version 3 (GPLv3)
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
