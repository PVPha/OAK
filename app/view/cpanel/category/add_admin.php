<div class="col-12 mt-3">
    <h4 class="text-center">add admin</h4>
    <form id="form1" action="<?= BASE_URL ?>admin/insertadmin" method="POST" enctype="multipart/form-data">
        <?php
        if (!empty($_GET['msg'])) {
            $msg = unserialize(urldecode($_GET['msg']));
            foreach ($msg as $key => $value) {
                echo '<span>' . $value . '</span>';
            }
        }
        ?>
        <div class="form-group">
            <label for="">username</label>
            <input type="text" name="username" id="" class="form-control" placeholder="" aria-describedby="helpId">
            <small id="helpId" class="text-muted">username</small>
        </div>
        <div class="form-group">
            <label for="">password</label>
            <input type="text" name="password" id="" class="form-control" placeholder="" aria-describedby="helpId">
            <small id="helpId" class="text-muted">password</small>
        </div>
        <div class="form-group">
            <label for="">position</label>
            <input type="text" name="position" id="" class="form-control" placeholder="" aria-describedby="helpId">
            <small id="helpId" class="text-muted">position</small>
        </div>
        <div class="form-group">
            <label for="">Image</label>
            <input type="file" name="image" id="" class="form-control" placeholder="" aria-describedby="helpId">
            <small id="helpId" class="text-muted">image_admin</small>
        </div>
        <button type="submit" name="" class="btn btn-primary">insert</button>
    </form>
    <!-- <form id="form1" action="<?= BASE_URL ?>project/insertproject" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="">Image_slide_project</label>
            <input type="file" name="image5" id="" accept="image/*" class="form-control" placeholder=""
                aria-describedby="helpId">
            <small id="helpId" class="text-muted">image_project</small>
        </div>
    </form> -->


    <!-- <input type="button" value="Click Me!" onclick="submitForms()" /> -->
</div>
<script>
submitForms = function() {
    document.getElementById("form1").submit();
    document.getElementById("form2").submit();
}
</script>