<?php

/**
* Dependencies - Invokes factories when required.
*/

use \Slim\Container as Container;
$container = $app->getContainer();

/* Controller Factories
-----------------------*/

$container['Swarmap\Controllers\App'] = function (Container $c) {
   return new Swarmap\Controllers\App($c->get('view'));
};

/* Service Factories
-----------------------*/

$container['view'] = function (Container $c) {
   $settings = $c['settings']['view'];
   $view = new \Slim\Views\Twig(
      $settings['template_path'],
      $settings['twig']);
   $view->addExtension(new \Slim\Views\TwigExtension(
      $c['router'],
      $c['request']->getUri()
   ));
   return $view;
};
