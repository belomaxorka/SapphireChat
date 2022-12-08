<?php declare(strict_types = 1);
/**
 * SapphireChat
 * --------------------------------------------------------
 * This content is released under the MIT License (MIT)
 * --------------------------------------------------------
 * @package SapphireChat
 * @license https://opensource.org/licenses/MIT	(MIT License)
 * @filesource
 */

/*
 * --------------------------------------------------------
 * Define root directory
 * --------------------------------------------------------
 */
$rootPath = __DIR__;
if (DIRECTORY_SEPARATOR != '/') $rootPath = str_replace(DIRECTORY_SEPARATOR, '/', $rootPath);
define('ROOT', $rootPath);

/*
 * --------------------------------------------------------
 * Load application
 * --------------------------------------------------------
 */
require_once(ROOT . '/vendor/autoload.php');
