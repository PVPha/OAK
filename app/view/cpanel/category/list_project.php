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
            <th>id_project</th>
            <th>title_project</th>
            <th>category_project</th>
            <th>price_project</th>
            <th>area_project</th>
            <th>image_1_project</th>
            <th>image_2_project</th>
            <th>image_3_project</th>
            <th>image_4_project</th>
            <th>image_5_project</th>
            <th>action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $i = 0;
        foreach ($data['project'] as $key => $value) {
            $i++;
        ?>
        <tr>
            <td scope="row"><?= $i ?></td>
            <td><?= $value['title_project'] ?></td>
            <td><?= $value['title_category'] ?></td>
            <td><?= number_format($value['price_project'], 0, ',', '.') . '$' ?></td>
            <td><?= $value['area_project'] ?></td>
            <td><img width="100px" height="100px"
                    src="<?= BASE_URL ?>public/uploads/project/<?= $value['image_1_project'] ?>"
                    alt="<?= $value['image_1_project'] ?>"> </td>
            <td><img width="100px" height="100px"
                    src="<?= BASE_URL ?>public/uploads/project/<?= $value['image_2_project'] ?>"
                    alt="<?= $value['image_2_project'] ?>"> </td>
            <td><img width="100px" height="100px"
                    src="<?= BASE_URL ?>public/uploads/project/<?= $value['image_3_project'] ?>"
                    alt="<?= $value['image_3_project'] ?>"> </td>
            <td><img width="100px" height="100px"
                    src="<?= BASE_URL ?>public/uploads/project/<?= $value['image_4_project'] ?>"
                    alt="<?= $value['image_4_project'] ?>"> </td>
            <td><img width="100px" height="100px"
                    src="<?= BASE_URL ?>public/uploads/project/<?= $value['image_5_project'] ?>"
                    alt="<?= $value['image_5_project'] ?>"> </td>
            <td><a href="<?= BASE_URL ?>project/deleteproject/<?= $value['id_project'] ?>">delete</a> || <a
                    href="<?= BASE_URL ?>project/projectbyid/<?= $value['id_project'] ?>">update</a></td>
        </tr>
        <?php } ?>
    </tbody>
</table>