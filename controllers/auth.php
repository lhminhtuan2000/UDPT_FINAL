<?php

class Auth extends Controller
{
    public function index()
    {
        $this->view('login', []);
    }

    public function login()
    {
        $userName = $_POST['username'] ?: '';
        $password = $_POST['password'] ?: '';

        $model = $this->model('AuthModel');
        $exists = $model->check($userName, $password);

        if ($exists) {
            echo "<script>
                alert('Login successfully !');
                window.location.href = '?url=question';
            </script>";
        } else {
            echo "<script>
                alert('Email / Password is not correct !');
                window.location.href = '?url=auth';
            </script>";
        }
    }

    public function logout()
    {
        unset($_SESSION['user']);
        echo "<script>
            window.location.href = '?url=auth';
        </script>";
    }
}