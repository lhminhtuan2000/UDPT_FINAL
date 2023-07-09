<?php

class UserModel extends Model
{
    public function getList()
    {
        $sql = "SELECT * FROM users WHERE Role <> 'Admin'";
        $result = mysqli_query($this->connect, $sql);
        $data = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }

        return $data;
    }

    public function getById($id)
    {
        $sql = "SELECT * FROM users WHERE UserID = {$id}";
        $result = mysqli_query($this->connect, $sql);

        return mysqli_fetch_assoc($result);
    }

    public function editRole($id)
    {
        $sql = "SELECT * FROM users WHERE UserID = {$id}";
        $result = mysqli_query($this->connect, $sql);

        return mysqli_fetch_assoc($result);
    }

    public function updateRole($id, $role)
    {
        $sql = "UPDATE users SET Role = '{$role}' WHERE UserID = {$id}";
        
        return mysqli_query($this->connect, $sql);
    }
}
