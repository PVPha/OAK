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
    foreach ($data['categorybyid'] as $key => $value) {
    ?>
    <form action="<?= BASE_URL ?>category/updatecategory/<?= $value['id_category'] ?>" method="POST">
        <div class="form-group">
            <label for="">Title</label>
            <input type="text" name="title" value="<?= $value['title_category'] ?>" id="" class="form-control"
                placeholder="" aria-describedby="helpId">
            <small id="helpId" class="text-muted">title_category_test</small>
        </div>
        <div class="form-group">
            <label for="">Description</label>
            <textarea class="form-control" style="resize: none;" name="desc" id=""
                rows="5"><?= $value['desc_category'] ?></textarea>
            <small id="helpId" class="text-muted">desc_category_test</small>
        </div>

        <button type="submit" name="addcategory" class="btn btn-primary">update</button>
    </form>
    <?php } ?>
</div>