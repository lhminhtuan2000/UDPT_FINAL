<?php

class AuthModel extends Model
{
    public function check($userName, $password)
    {
        $sql = "SELECT * FROM users";
        $result = mysqli_query($this->connect, $sql);
        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)){
                if ($row['UserName'] === $userName && password_verify($password, $row['Password'])) {
                    $_SESSION['user'] = $row;
                    return true;
                }
            }
        }
        
        return false;
    }
}
