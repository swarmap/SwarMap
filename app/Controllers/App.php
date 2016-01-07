<?php

namespace Swarmap\Controllers;

/**
 * App Controller
 */

use Slim\Views\Twig as Twig;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

class App
{
   private $view;

   function __construct(Twig $view)
   {
      $this->view = $view;
   }

   function home(Request $request, Response $response, $args)
   {
      return $this->view->render($response,'app.twig',[]);
   }
}
