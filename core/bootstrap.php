<?php

use SapphireComponents\Templater;

/*
 * --------------------------------------------------------
 * Load config & defines
 * --------------------------------------------------------
 */
require_once(ROOT . '/core/defines.php');
require_once(ROOT . '/core/config.php');

/*
 * --------------------------------------------------------
 * Templater
 * --------------------------------------------------------
 */
$templater = new Templater();
$templater->display('index.tpl');
