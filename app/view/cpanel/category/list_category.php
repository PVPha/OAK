<?php
if (!empty($_GET['msg'])) {
    $msg = unserialize(urldecode($_GET['msg']));
    foreach ($msg as $key => $value) {
        echo '<span>' . $value . '</span>';
    }
}
?>
<table class="table table-striped table-inverse table-responsive">
    <thead class="thead-inverse">
        <tr>
            <th>id_category_test</th>
            <th>title_category_test</th>
            <th>desc_category_test</th>
            <th>action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $i = 0;
        foreach ($data['category'] as $key => $value) {
            $i++;
        ?>
        <tr>
            <td scope="row"><?= $i ?></td>
            <td><?= $value['title_category'] ?></td>
            <td><?= $value['desc_category'] ?></td>
            <td><a href="<?= BASE_URL ?>category/deletecategory/<?= $value['id_category'] ?>">delete</a> || <a
                    href="<?= BASE_URL ?>category/catebyid/<?= $value['id_category'] ?>">update</a></td>
        </tr>
        <?php } ?>
    </tbody>
</table>