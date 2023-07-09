<?php

class Answer extends Controller
{
    public function index()
    {
        $this->view('layout',
            [
                'page'          => 'answer',
                'title'         => 'Answer',
                'answers'       => $this->model('AnswerModel')->getList()
            ]
        );
    }
    public function createAnswer($id)
    {
        $this->view('layout',
            [
                'page'          => 'create_answer',
                'title'         => 'Create Answer',
                'questionId'    => $id
            ]
        );
    }

    public function create($id)
    {
        $questionId = $id;
        $answer = $_POST['answer'];
        $reference = $_POST['reference'];
        $userId = $_SESSION['user']['UserID'];
        $date = date('Y-m-d H:i:s');
        $this->model('AnswerModel')->insert($questionId, $answer, $reference, $userId, $date);

        echo '<script>
            alert("Add successfully !");
            window.location.href = "?url=question/viewAnswer/' . $questionId .
        '"</script>';
    }

    public function evaluateAnswer($id)
    {
        $this->view('layout',
            [
                'page'          => 'evaluate_answer',
                'title'         => 'Evaluate Answer',
                'answerId'     => $id
            ]
        );
    }

    public function viewEvaluate($id)
    {
        $this->view('layout',
            [
                'page'          => 'view_evaluate',
                'title'         => 'Evaluate',
                'evaluates'     => $this->model('EvaluateModel')->getEvaluateByAnswerId($id),
                'answerId'      => $id,
                'check'         => $this->model('EvaluateModel')->check($id, $_SESSION['user']['UserID'])
            ]
        );
    }
}
