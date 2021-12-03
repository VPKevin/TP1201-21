<?php
namespace App\Controller;

abstract class BaseController
{
    public function render(string $title, array $vars,string $view)
    {
        $view = $this->viewsDir . $view. '.php';
        ob_start();
        require $view;
        $content = ob_get_clean();
        return require $this->template;
    }

}
