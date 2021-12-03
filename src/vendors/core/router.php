<?php

namespace Core;

use Controller\ErrorController;

class Router
{
  public function getController()
  {
    $xml = new \DOMDocument();
    $xml->load("./config/routes.xml");
    $routes = $xml->getElementsByTagName('route');

    $path = isset($_GET['p']) ? htmlspecialchars($_GET['p']) : "";

    foreach ($routes as $route) {
      if ($path === $route->getAttribute('p')) {
        $controllerClass = 'Controller\\' . $route->getAttribute('controller');
        $action = $route->getAttribute('action');
        $params = [];
        if ($route->hasAttribute('params')) {
          $keys = explode(',', $route->getAttribute('params'));
          foreach ($keys as $key) {
            $params[$key] = $_GET[$key];
          }
        }
        return new $controllerClasse($action, $params);
      }
    }
    return new ErrorController('noRoute');
  }
}
