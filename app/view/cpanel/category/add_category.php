<div class="col-12 mt-3">
    <h4 class="text-center">thêm danh mục</h4>
    <form action="<?= BASE_URL ?>category/insertcategory" method="POST">
        <?php
        if (!empty($_GET['msg'])) {
            $msg = unserialize(urldecode($_GET['msg']));
            foreach ($msg as $key => $value) {
                echo '<span>' . $value . '</span>';
            }
        }
        ?>
        <div class="form-group">
            <label for="">Title</label>
            <input type="text" name="title" id="" class="form-control" placeholder="" aria-describedby="helpId">
            <small id="helpId" class="text-muted">title_category_test</small>
        </div>
        <div class="form-group">
            <label for="">Description</label>
            <input type="text" name="desc" id="" class="form-control" placeholder="" aria-describedby="helpId">
            <small id="helpId" class="text-muted">desc_category_test</small>
        </div>
        <button type="submit" name="addcategory" class="btn btn-primary">insert</button>
    </form>
</div>