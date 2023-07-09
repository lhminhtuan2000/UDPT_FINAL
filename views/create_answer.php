<h1 class="h3 mb-2 text-gray-800">Thêm mới câu trả lời</h1>

<div class="row">
    <div class="col-lg-12">
        <form action="?url=answer/create/<?= $data['questionId'] ?>"
                method="POST"
                enctype="multipart/form-data"
                style="margin-bottom:1rem;">
            <div class="form-group">
                <label for="answer">Câu trả lời <span class="text-danger">*</span></label>
                <input type="text"
                        class="form-control"
                        id="answer"
                        name="answer"
                        required
                        maxlength="255">
            </div>
            <div class="form-group">
                <label for="reference">Reference <span class="text-danger">*</span></label>
                <input type="text"
                        class="form-control"
                        id="reference"
                        name="reference"
                        required
                        maxlength="255">
            </div>
            <button type="submit" class="btn btn-primary">
                Thêm mới
            </button>
        </form>
    </div>
</div>
