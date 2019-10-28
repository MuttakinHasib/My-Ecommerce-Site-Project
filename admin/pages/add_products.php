<div class="tabs-content" data-tab="2">
    <div class="edit-photos content-center" id="edit-photos">
        <form action="includes/add_product_inc.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <input type="text" name="title" class="form-control" placeholder="Add Title">
            </div>
            <div class="form-group">
                <input type="text" name="description" class="form-control" placeholder="Add Description">
            </div>
            <div class="form-group">
                <input type="number" name="quantity" class="form-control" placeholder="Add Quantity">
            </div>
            <div class="form-group">
                <input type="number" name="price" class="form-control" placeholder="Add Price">
            </div>
            <div class="form-group">
                <select name="status" class="form-control">
                    <option>Select Status</option>
                    <option value="1">Publish</option>
                    <option value="0">Un-Publish</option>
                </select>
            </div>
            <div class="form-group">
                <div class="custom-file">
                    <input name="file" type="file" class="custom-file-input" id="customFile">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
            </div>
            <div class="form-group">
                <input type="submit" name="submit" value="Upload" class="form-control">
            </div>
        </form>
    </div>
</div>