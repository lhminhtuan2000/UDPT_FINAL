<?php
    class App {

        protected $controller = 'auth'; // default controller
        protected $action = 'index'; // default
        protected $params = [];

        function __construct() {
            $arr = $this->handle();

            // Call the controller
            if (!is_null($arr)) {
                if (file_exists('./controllers/' . $arr[0] . '.php')) {
                    $this->controller = $arr[0];
                    unset($arr[0]);
                }
            }
            require_once './controllers/' . $this->controller . '.php';
            $this->controller = new $this->controller;

            // Action
            if (isset($arr[1])) {
                if (method_exists($this->controller, $arr[1])) {
                    $this->action = $arr[1];
                }
                unset($arr[1]);
            }

            // Params
            $this->params = $arr ? array_values($arr) : [];
            call_user_func_array([$this->controller, $this->action], $this->params);
        }

        function handle() {
            if(isset($_GET['url'])){
                return explode('/', filter_var(trim($_GET['url'], '/')));
            }
        }
    }