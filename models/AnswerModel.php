<?php

class AnswerModel extends Model
{
    public function getList()
    {
        $sql = "SELECT * FROM answers a, users b WHERE a.UserID = b.UserID ORDER BY a.CreatedDate DESC";
        $result = mysqli_query($this->connect, $sql);
        $data = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }

        return $data;
    }

    public function getAnswerByQuestionId($id)
    {
        $sql = "SELECT * FROM answers a, users b WHERE a.UserID = b.UserID AND a.QuestionID = {$id}";
        $result = mysqli_query($this->connect, $sql);
        $data = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }

        return $data;
    }

    public function insert($questionId, $answer, $reference, $userId, $date)
    {
        $sql = "INSERT INTO answers (QuestionID, Answer, Reference, UserID, CreatedDate) VALUES ({$questionId}, '{$answer}', '{$reference}', {$userId}, '{$date}')";

        return mysqli_query($this->connect, $sql);
    }

    public function countAnswer($questionId)
    {
        $sql = "SELECT * FROM answers WHERE QuestionID = {$questionId}";
        $result = mysqli_query($this->connect, $sql);

        return mysqli_num_rows($result);
    }
}
