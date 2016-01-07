<?php
/**
 * SwarMap
 * A map to help meet fellow Swarmwise activists in your local area.
 * @author Olivia Mackintosh <livvy@protonmail.com>
 * @copyright Copyright (c) 2015 Olivia Mackintosh
 * @license CC-BY-SA-4.0 <https://creativecommons.org/licenses/by-sa/4.0/>
 */

// PSR-4 Autoload
require __DIR__ .  '/../vendor/autoload.php';

// Instantiate App
$settings = require '../app/settings.php';
$app = new \Slim\App($settings);

// Load Dependencies
require '../app/dependencies.php';

// Load Routes
require '../app/routes.php';

// Blastoff! :)
$app->run();
