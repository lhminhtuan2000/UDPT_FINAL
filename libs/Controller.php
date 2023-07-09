<?php
    class Controller {
        public function model($model) {
            require_once './models/' . $model . '.php';
            return new $model;
        }

        public function view($view, $data = []) {
            require_once "./libs/Helper.php";
            require_once './views/' . $view . '.php';
        }

        public function checkAdminLogin() {
            if (!isset($_SESSION['user'])) {
                echo "<script>
                    alert('Vui lòng đăng nhập');
                    window.location.href = '?url=auth';
                </script>";
            }
        }

        public function getBaseUrl()
        {
            return strtok(sprintf(
                "%s://%s%s",
                isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
                $_SERVER['SERVER_NAME'],
                dirname($_SERVER['REQUEST_URI'])
              ), '?');
        }
    }