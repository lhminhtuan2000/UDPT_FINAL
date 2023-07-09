<h1 class="h3 mb-2 text-gray-800">Danh sách người dùng</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <!-- /.col-lg-12 -->
            <table class="table table-bordered" id="dataTables-example" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>UserID</th>
                        <th>Username</th>
                        <th>Role</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>UserID</th>
                        <th>Username</th>
                        <th>Role</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                <?php foreach ($data['users'] as $user): ?>
                    <tr>
                        <td><?= $user['UserID'] ?></td>
                        <td><?= $user['UserName'] ?></td>
                        <td><?= $user['Role'] ?></td>
                        <td>
                            <a href="?url=user/editRole/<?= $user['UserID'] ?>">Edit Role</a>
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