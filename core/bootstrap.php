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

use SapphireComponents\Debug;
use SapphireComponents\Language;
use SapphireComponents\Templater;

/*
 * --------------------------------------------------------
 * Load defines
 * --------------------------------------------------------
 */
require_once(ROOT . '/core/defines.php');

/*
 * --------------------------------------------------------
 * Debugger
 * --------------------------------------------------------
 */
(new Debug());

/*
 * --------------------------------------------------------
 * Language loader
 * --------------------------------------------------------
 */
function __($key)
{
  return (new Language())->lang($key);
}

/*
 * --------------------------------------------------------
 * Templater
 * --------------------------------------------------------
 */
$templater = new Templater();
$templater->display('index.tpl');
