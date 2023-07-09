<h1 class="h3 mb-2 text-gray-800">Đánh giá</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-body">
        <?php if ($_SESSION['user']['Role'] !== 'Viewer'): ?>
            <?php if (!$data['check']): ?>
                <a href="?url=answer/evaluateAnswer/<?= $data['answerId'] ?>" class="btn btn-primary mb-4">Thêm mới</a>
            <?php endif; ?>
        <?php endif; ?>
        <div class="table-responsive">
            <!-- /.col-lg-12 -->
            <table class="table table-bordered" id="dataTables-example" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>EvaluateID</th>
                        <th>Answer</th>
                        <th>Username</th>
                        <th>RateCategory</th>
                        <th>Created Date</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>EvaluateID</th>
                        <th>Answer</th>
                        <th>Username</th>
                        <th>Rate Category</th>
                        <th>Created Date</th>
                    </tr>
                </tfoot>
                <tbody>
                <?php foreach ($data['evaluates'] as $evaluate): ?>
                    <tr>
                        <td><?= $evaluate['EvaluateID'] ?></td>
                        <td><?= $evaluate['Answer'] ?></td>
                        <td><?= $evaluate['UserName'] ?></td>
                        <td><?= $evaluate['RateCategory'] ?></td>
                        <td><?= $evaluate['CreatedDate'] ?></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>