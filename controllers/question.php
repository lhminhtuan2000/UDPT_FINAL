<?php

class Question extends Controller
{
    public function index()
    {
        $this->view('layout',
            [
                'page'          => 'question',
                'title'         => 'Question',
                'questions'     => $this->model('QuestionModel')->getList(),
            ]
        );
    }

    public function createQuestion()
    {
        $this->view('layout',
            [
                'page'          => 'create_question',
                'title'         => 'Create Question',
            ]
        );
    }

    public function create()
    {
        $question = $_POST['question'];
        $tags = $_POST['tags'];
        $userId = $_SESSION['user']['UserID'];
        $date = date('Y-m-d H:i:s');
        $this->model('QuestionModel')->insert($question, $tags, $userId, $date);

        echo '<script>
            alert("Add successfully !");
            window.location.href = "?url=question";
        </script>';
    }

    public function viewAnswer($id)
    {
        $this->view('layout',
            [
                'page'          => 'view_answer',
                'title'         => 'Answer',
                'answers'       => $this->model('AnswerModel')->getAnswerByQuestionId($id),
                'questionId'    => $id
            ]
        );
    }
}
