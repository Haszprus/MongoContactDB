<?php

class Dispatcher
{
    public function run()
    {
        try {
            if (!isset($_REQUEST['r'])) {
                $_REQUEST['r'] = 'index';
            }

            $path = $_REQUEST['r'];

            $paths = explode("/", $path);

            if (!isset($paths[1])) {
                $paths[1] = "index";
            }

            $controllerName = $paths[0] . 'Controller';
            $actionName = strtoupper($paths[1][0]) . substr($paths[1], 1);
            $executeActionName = 'execute' . $actionName;

            /** @var $controller Controller */
            $controller = new $controllerName();
            $controller->controllerName = $paths[0];
            $template = $controller->$executeActionName();

            if ($template == Controller::$NO_TEMPLATE) {
                return;
            }
            ;

            if (!$template) {
                $template = 'modules/' . $paths[0] . '/' . $paths[1] . '.tpl.php';
            }

            $layoutId = $paths[0] . "_" . $paths[1];

            $this->render($controller->getData(), $template, $layoutId, $paths[0]);
        } catch (Exception $error) {
            $this->render(
                array('message' => $error->getMessage(), 'details' => $error),
                'templates/exception.tpl.php',
                'exception',
                ''
            );
        }
    }

    protected function render(array $data, $template, $layoutId, $controllerName)
    {
        extract($data);
        ob_start();
        require_once '../app/' . $template;
        $content = ob_get_clean();
        require_once '../app/templates/layout.php';
    }
}