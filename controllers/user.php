<?php

class User extends Controller
{
    public function index()
    {
        $this->view('layout',
            [
                'page'          => 'user',
                'title'         => 'User',
                'users'         => $this->model('UserModel')->getList()
            ]
        );
    }

    public function editRole($id)
    {
        $this->view('layout',
            [
                'page'          => 'edit_role',
                'title'         => 'Edit Role',
                'user'          => $this->model('UserModel')->getById($id),
                'userId'        => $id
            ]
        );
    }

    public function updateRole($id)
    {
        $role = $_POST['role'];
        $this->model('UserModel')->updateRole($id, $role);

        echo '<script>
            alert("Update successfully !");
            window.location.href = "?url=user";
        </script>';
    }
}
