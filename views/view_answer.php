<h1 class="h3 mb-2 text-gray-800">Câu trả lời</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-body">
        <?php if ($_SESSION['user']['Role'] !== 'Questioner' && $_SESSION['user']['Role'] !== 'Evaluater' && $_SESSION['user']['Role'] !== 'Viewer'): ?>
            <a href="?url=answer/createAnswer/<?= $data['questionId'] ?>" class="btn btn-primary mb-4">Thêm mới</a>
        <?php endif; ?>
        <div class="table-responsive">
            <!-- /.col-lg-12 -->
            <table class="table table-bordered" id="dataTables-example" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>AnswerID</th>
                        <th>Answer</th>
                        <th>Reference</th>
                        <th>Username</th>
                        <th>Created Date</th>
                        <th>Number Of Evaluaters</th>
                        <?php if ($_SESSION['user']['Role'] !== 'Questioner' && $_SESSION['user']['Role'] !== 'Answerer'): ?>
                            <th>Action</th>
                        <?php endif; ?>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>AnswerID</th>
                        <th>Answer</th>
                        <th>Reference</th>
                        <th>Username</th>
                        <th>Created Date</th>
                        <th>Number Of Evaluaters</th>
                        <?php if ($_SESSION['user']['Role'] !== 'Questioner' && $_SESSION['user']['Role'] !== 'Answerer'): ?>
                            <th>Action</th>
                        <?php endif; ?>
                    </tr>
                </tfoot>
                <tbody>
                <?php foreach ($data['answers'] as $answer): ?>
                    <tr>
                        <td><?= $answer['AnswerID'] ?></td>
                        <td><?= $answer['Answer'] ?></td>
                        <td><?= $answer['Reference'] ?></td>
                        <td><?= $answer['UserName'] ?></td>
                        <td><?= $answer['CreatedDate'] ?></td>
                        <td><?= $helper->countEvaluate($answer['AnswerID']) ?></td>
                        <?php if ($_SESSION['user']['Role'] !== 'Questioner' && $_SESSION['user']['Role'] !== 'Answerer'): ?>
                            <td>
                                <a href="?url=answer/viewEvaluate/<?= $answer['AnswerID'] ?>">View Evaluaters</a>
                            </td>
                        <?php endif; ?>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>