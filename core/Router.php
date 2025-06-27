<?php
class Router {
    public function run() {
        $controller = 'HomeController';
        $action = 'index';

        if (isset($_GET['controller'])) {
            $controller = ucfirst($_GET['controller']) . 'Controller';
        }
        if (isset($_GET['action'])) {
            $action = $_GET['action'];
        }

        require_once __DIR__"../app/controllers/$controller.php";
        $ctrl = new $controller();
        $ctrl->$action();
    }
}