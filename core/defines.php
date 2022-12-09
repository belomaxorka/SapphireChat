<?php declare(strict_types=1);
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
 * Environment
 * --------------------------------------------------------
 */
define('ENV_STATUS', 'development'); // Available values - development, production

define("DEFAULT_LANG", "ru_RU");
define("LANGUAGES", [
  "ru_RU",
  "en_US"
]);

/*
 * --------------------------------------------------------
 * Directories
 * --------------------------------------------------------
 */
define('ENGINE_DIR', ROOT . '/core/'); // Core
define('RESOURCES_DIR', ROOT . '/resources/'); // Resources
define('TPL_DIR', ROOT . '/templates/'); // Templates
