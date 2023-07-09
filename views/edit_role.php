<h1 class="h3 mb-2 text-gray-800">Đổi vai trò</h1>

<div class="row">
    <div class="col-lg-12">
        <form action="?url=user/updateRole/<?= $data['userId'] ?>"
                method="POST"
                enctype="multipart/form-data"
                style="margin-bottom:1rem;">
            <div class="form-group">
                <label for="role">Role <span class="text-danger">*</span></label>
                <select name="role" id="role" class="form-control" required>
                    <option value="Questioner" <?= $data['user']['Role'] == 'Questioner' ? 'selected' : '' ?>>Questioner</option>
                    <option value="Answerer" <?= $data['user']['Role'] == 'Answerer' ? 'selected' : '' ?>>Answerer</option>
                    <option value="Evaluater" <?= $data['user']['Role'] == 'Evaluater' ? 'selected' : '' ?>>Evaluater</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">
                Cập nhật
            </button>
        </form>
    </div>
</div>
