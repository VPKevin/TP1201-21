<?php
namespace App\Controller;

class BaseController
{
    protected $params;
    protected $template = __DIR__ . '/../views/template.php';
    protected $viewsDir = __DIR__ . '/../views';

    public function __construct(string $action, array $params = [])
    {
        $this->params = $params;
        
        $method = ucfirst($action);
        if(!is_callable([$this, $method])) {
            throw new \RuntimeException('Action non definie sur ce module');
        }
        $this->$method();
    }

    public function render(string $title, array $vars,string $view)
    {
        $view = $this->viewsDir . $view. '.php';
        ob_start();
        require $view;
        $content = ob_get_clean();
        return require $this->template;
    }
}
