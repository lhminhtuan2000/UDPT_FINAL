<h1 class="h3 mb-2 text-gray-800">Đặt câu hỏi</h1>

<div class="row">
    <div class="col-lg-12">
        <form action="?url=question/create"
                method="POST"
                enctype="multipart/form-data"
                style="margin-bottom:1rem;">
            <div class="form-group">
                <label for="question">Câu hỏi <span class="text-danger">*</span></label>
                <input type="text"
                        class="form-control"
                        id="question"
                        name="question"
                        required
                        maxlength="255">
            </div>
            <div class="form-group">
                <label for="tags">Tags <span class="text-danger">*</span></label>
                <input type="text"
                        class="form-control"
                        id="tags"
                        name="tags"
                        required
                        maxlength="255">
            </div>
            <button type="submit" class="btn btn-primary">
                Thêm mới
            </button>
        </form>
    </div>
</div>
