<h1 class="h3 mb-2 text-gray-800">Thêm mới đánh giá</h1>

<div class="row">
    <div class="col-lg-12">
        <form action="?url=evaluate/create/<?= $data['answerId'] ?>"
                method="POST"
                enctype="multipart/form-data"
                style="margin-bottom:1rem;">
            <div class="form-group">
                <label for="rate_category">Rate Category <span class="text-danger">*</span></label>
                <select name="rate_category" id="rate_category" class="form-control" required>
                    <option value="1STAR">1STAR</option>
                    <option value="2STAR">2STAR</option>
                    <option value="3STAR">3STAR</option>
                    <option value="4STAR">4STAR</option>
                    <option value="4STAR">5STAR</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">
                Thêm mới
            </button>
        </form>
    </div>
</div>
