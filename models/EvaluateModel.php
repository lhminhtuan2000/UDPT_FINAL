<?php

class EvaluateModel extends Model
{
    public function getList()
    {
        $sql = "SELECT a.*, b.UserName, c.Answer FROM answer_evaluates a, users b, answers c WHERE a.UserID = b.UserID AND a.AnswerID = c.AnswerID ORDER BY a.CreatedDate DESC";
        $result = mysqli_query($this->connect, $sql);
        $data = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }

        return $data;
    }

    public function insert($answerId, $userId, $rateCategory, $date)
    {
        $sql = "INSERT INTO answer_evaluates (AnswerID, UserID, RateCategory, CreatedDate) VALUES ('{$answerId}', {$userId}, '{$rateCategory}', '{$date}')";

        return mysqli_query($this->connect, $sql);
    }

    public function getEvaluateByAnswerId($id)
    {
        $sql = "SELECT a.*, b.UserName, c.Answer FROM answer_evaluates a, users b, answers c WHERE a.UserID = b.UserID AND a.AnswerID = c.AnswerID AND a.AnswerID = {$id}";
        $result = mysqli_query($this->connect, $sql);
        $data = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }

        return $data;
    }

    public function check($id, $userId)
    {
        $sql = "SELECT * FROM answer_evaluates WHERE UserID = {$userId} AND AnswerID = {$id}";
        $result = mysqli_query($this->connect, $sql);

        return mysqli_num_rows($result) > 0;
    }

    public function countEvaluate($answerId)
    {
        $sql = "SELECT * FROM answer_evaluates WHERE AnswerID = {$answerId}";
        $result = mysqli_query($this->connect, $sql);

        return mysqli_num_rows($result);
    }
}
