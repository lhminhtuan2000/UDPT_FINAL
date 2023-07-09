<?php

class QuestionModel extends Model
{
    public function getList()
    {
        $sql = "SELECT * FROM users a, questions b WHERE a.UserID = b.UserID ORDER BY b.CreatedDate DESC";
        $result = mysqli_query($this->connect, $sql);
        $data = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }

        return $data;
    }

    public function insert($question, $tags, $userId, $date)
    {
        $sql = "INSERT INTO questions (Question, Tags, UserID, CreatedDate) VALUES ('{$question}', '{$tags}', {$userId}, '{$date}')";

        return mysqli_query($this->connect, $sql);
    }
}
