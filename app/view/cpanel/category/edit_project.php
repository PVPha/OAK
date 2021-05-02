<div class="col-12 mt-3">
    <h4 class="text-center">edit category</h4>
    <?php
    if (!empty($_GET['msg'])) {
        $msg = unserialize(urldecode($_GET['msg']));
        foreach ($msg as $key => $value) {
            echo '<span>' . $value . '</span>';
        }
    }
    ?>
    <?php
    foreach ($data['projectbyid'] as $key => $value) {
    ?>
    <form action="<?= BASE_URL ?>project/updateproject/<?= $value['id_project'] ?>" method="POST"
        enctype="multipart/form-data">
        <div class="form-group">
            <label for="">Title_project</label>
            <input type="text" value="<?= $value['title_project'] ?>" name="title" id="" class="form-control"
                placeholder="" aria-describedby="helpId">
            <small id="helpId" class="text-muted">title_project</small>
        </div>
        <div class="form-group">
            <label for="">Price_project</label>
            <input type="text" name="price" id="" value="<?= $value['price_project'] ?>" class=" form-control"
                placeholder="" aria-describedby="helpId">
            <small id="helpId" class="text-muted">price_project</small>
        </div>
        <div class="form-group">
            <label for="">Area_project</label>
            <input type="text" name="area" id="" value="<?= $value['area_project'] ?>" class=" form-control"
                placeholder="" aria-describedby="helpId">
            <small id="helpId" class="text-muted">area_project</small>
        </div>
        <div class="form-group">
            <div class="form-group">
                <label for="">Description_project</label>
                <textarea class="form-control" name="desc" id="" rows="3"><?= $value['desc_project'] ?></textarea>
            </div>
            <small id="helpId" class="text-muted">desc_project</small>
        </div>
        <div class="form-group">
            <label for="">Address_project</label>
            <input type="text" name="address" id="" value="<?= $value['address_project'] ?>" class=" form-control"
                placeholder="" aria-describedby="helpId">
            <small id="helpId" class="text-muted">address_project</small>
        </div>
        <div class="form-group">
            <label for="">category_project</label>
            <select class="form-control" name="id_category" id="">
                <?php foreach ($data['category'] as $key => $value_cate) { ?>
                <option <?php echo $value_cate['id_category'] == $value['id_category'] ?  'selected' : '' ?>
                    value="<?= $value_cate['id_category'] ?>"><?= $value_cate['title_category'] ?></option>
                <?php } ?>
            </select>
            <small id="helpId" class="text-muted">id_category_project</small>
        </div>
        <button type="submit" name="addcategory" class="btn btn-primary">update</button>
    </form>
    <?php } ?>
</div>