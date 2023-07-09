<h1 class="h3 mb-2 text-gray-800">Danh sách trả lời mới nhất</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-body">
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
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>