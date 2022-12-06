<?php

use SapphireComponents\Templater;

/*
 * --------------------------------------------------------
 * Load defines
 * --------------------------------------------------------
 */
require_once(ROOT . '/core/defines.php');

/*
 * --------------------------------------------------------
 * Templater
 * --------------------------------------------------------
 */
$templater = new Templater();
$templater->display('index.tpl');
