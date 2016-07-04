<?php

class Start
{
    private $_controller;
    private $_method;

    public function __construct($url)
    {
        $this->controller((isset($url[1])) ? $url[1] : '');
        unset($url[0]);
        unset($url[1]);
        $this->method((isset($url[2])) ? $url[2] : '');
        unset($url[2]);
        $this->runController($url);

    }

    private function controller($controllerName = false)
    {
        $controllerName = ($controllerName) ? $controllerName : 'Home';
        $controllerRoute = ROOT . '../src/Controllers' . DS . $controllerName . 'Controller.php';

        if (is_readable($controllerRoute)) {
            $this->_controller = $controllerName . 'Controller';
        } else {
            throw new Exception('error 404');
        }
    }

    private function method($method)
    {
        $this->_method = (is_callable(array($this->_controller, $method))) ? $method : 'index';

    }

    private function runController($args)
    {
        $class = __NAMESPACE__ . '\\ArticoForm\\Controllers\\' .$this->_controller ;
        $this->_controller = new $class;
        if (!empty($args)) {
            call_user_func_array(array($this->_controller, $this->_method), $args);
        } else {
            call_user_func(array($this->_controller, $this->_method));
        }
    }
}