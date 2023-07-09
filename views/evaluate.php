<h1 class="h3 mb-2 text-gray-800">Danh sách đánh giá mới nhất</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-body">
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