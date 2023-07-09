<h1 class="h3 mb-2 text-gray-800">Danh sách câu hỏi</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <!-- /.col-lg-12 -->
            <table class="table table-bordered" id="dataTables-example" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>QuestionID</th>
                        <th>Question</th>
                        <th>Username</th>
                        <th>Tags</th>
                        <th>Created Date</th>
                        <th>Number Of Answerers</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>QuestionID</th>
                        <th>Question</th>
                        <th>Username</th>
                        <th>Tags</th>
                        <th>Created Date</th>
                        <th>Number Of Answerers</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                <?php foreach ($data['questions'] as $question): ?>
                    <tr>
                        <td><?= $question['QuestionID'] ?></td>
                        <td><?= $question['Question'] ?></td>
                        <td><?= $question['UserName'] ?></td>
                        <td><?= $question['Tags'] ?></td>
                        <td><?= $question['CreatedDate'] ?></td>
                        <td><?= $helper->countAnswer($question['QuestionID']) ?></td>
                        <td>
                            <a href="?url=question/viewAnswer/<?= $question['QuestionID'] ?>">View Answerers</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>