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
            <th>id_admin</th>
            <th>username</th>
            <th>password</th>
            <th>position</th>
            <th>image</th>
            <th>action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $i = 0;
        foreach ($data['admin'] as $key => $value) {
            $i++;
        ?>
        <tr>
            <td scope="row"><?= $i ?></td>
            <td><?= $value['username'] ?></td>
            <td><?= $value['password'] ?></td>
            <td><?= $value['position'] ?></td>
            <td><img width="100px" height="100px"
                    src="<?= BASE_URL ?>public/uploads/project/<?= $value['image_admin'] ?>"
                    alt="<?= $value['image_admin'] ?>"> </td>
            <td><a href="<?= BASE_URL ?>admin/deleteadmin/<?= $value['admin_id'] ?>">delete</a> || <a
                    href="<?= BASE_URL ?>admin/adminbyid/<?= $value['admin_id'] ?>">update</a></td>
        </tr>
        <?php } ?>
    </tbody>
</table>