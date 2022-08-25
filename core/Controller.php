<?php

namespace app\core;

class Controller
{
    protected function render($view, $params = []): bool|array|string
    {
        return Application::$app->router->renderView($view, $params);
    }

}