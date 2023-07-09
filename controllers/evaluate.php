<?php

class Evaluate extends Controller
{
    public function index()
    {
        $this->view('layout',
            [
                'page'          => 'evaluate',
                'title'         => 'Evaluate',
                'evaluates'     => $this->model('EvaluateModel')->getList()
            ]
        );
    }

    public function create($id)
    {
        $answerId = $id;
        $rateCategory = $_POST['rate_category'];
        $userId = $_SESSION['user']['UserID'];
        $date = date('Y-m-d H:i:s');
        $this->model('EvaluateModel')->insert($answerId, $userId, $rateCategory, $date);

        echo '<script>
            alert("Add successfully !");
            window.location.href = "?url=answer/viewEvaluate/' . $answerId .
        '"</script>';
    }
}
