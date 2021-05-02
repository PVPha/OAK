<div class="col-12 mt-3">
    <h4 class="text-center">add project</h4>
    <form id="form1" action="<?= BASE_URL ?>project/insertproject" method="POST" enctype="multipart/form-data">
        <?php
        if (!empty($_GET['msg'])) {
            $msg = unserialize(urldecode($_GET['msg']));
            foreach ($msg as $key => $value) {
                echo '<span>' . $value . '</span>';
            }
        }
        ?>
        <div class="form-group">
            <label for="">Title_project</label>
            <input type="text" name="title" id="" class="form-control" placeholder="" aria-describedby="helpId">
            <small id="helpId" class="text-muted">title_project</small>
        </div>
        <div class="form-group">
            <label for="">Price_project</label>
            <input type="text" name="price" id="" class="form-control" placeholder="" aria-describedby="helpId">
            <small id="helpId" class="text-muted">price_project</small>
        </div>
        <div class="form-group">
            <label for="">Area_project</label>
            <input type="text" name="area" id="" class="form-control" placeholder="" aria-describedby="helpId">
            <small id="helpId" class="text-muted">area_project</small>
        </div>
        <div class="form-group">
            <div class="form-group">
                <label for="">Description_project</label>
                <textarea class="form-control" name="desc" id="" rows="3"></textarea>
            </div>
            <small id="helpId" class="text-muted">desc_project</small>
        </div>
        <div class="form-group">
            <label for="">Address_project</label>
            <input type="text" name="address" id="" class="form-control" placeholder="" aria-describedby="helpId">
            <small id="helpId" class="text-muted">address_project</small>
        </div>
        <div class="form-group">
            <label for="">Image</label>
            <input type="file" name="image[]" multiple id="" class="form-control" placeholder=""
                aria-describedby="helpId">
            <small id="helpId" class="text-muted">image_product_test</small>
        </div>
        <!-- <div class="form-group">
            <label for="">Image_slide_project</label>
            <input type="file" name="image2" accept="image/*" id="" class="form-control" placeholder=""
                aria-describedby="helpId">
            <small id="helpId" class="text-muted">image_project</small>
        </div>
        <div class="form-group">
            <label for="">Image_detail_project</label>
            <input type="file" name="image3" id="" accept="image/*" class="form-control" placeholder=""
                aria-describedby="helpId">
            <small id="helpId" class="text-muted">image_project</small>
        </div>
        <div class="form-group">
            <label for="">Image_slide_project</label>
            <input type="file" name="image4" id="" accept="image/*" class="form-control" placeholder=""
                aria-describedby="helpId">
            <small id="helpId" class="text-muted">image_project</small>
        </div> -->

        <div class="form-group">
            <label for="">category_project</label>
            <select class="form-control" name="id_category" id="">
                <?php foreach ($data['category'] as $key => $value) { ?>
                <option value="<?= $value['id_category'] ?>"><?= $value['title_category'] ?></option>
                <?php } ?>
            </select>
            <small id="helpId" class="text-muted">id_category_project</small>
        </div>
        <button type="submit" name="addcategory" class="btn btn-primary">insert</button>
    </form>
    <!-- <form id="form1" action="<?= BASE_URL ?>project/insertproject" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="">Image_slide_project</label>
            <input type="file" name="image5" id="" accept="image/*" class="form-control" placeholder=""
                aria-describedby="helpId">
            <small id="helpId" class="text-muted">image_project</small>
        </div>
    </form> -->


    <input type="button" value="Click Me!" onclick="submitForms()" />
</div>
<script>
submitForms = function() {
    document.getElementById("form1").submit();
    document.getElementById("form2").submit();
}
</script>