<table width="600" cellpadding="5" class="table table-hover table-bordered">
    <thead>
        <tr>
<!--
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Mobile</th>
            <th scope="col">Address</th>
            <th scope="col">Action</th>
-->
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">price</th>
            <th scope="col">Active</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach (($items?:array()) as $item): ?>
            <tr>
                <td><?php echo trim($item['itemName']); ?></td>
                <td><?php echo trim($item['description']); ?></td>
                <td><?php echo trim($item['price']); ?></td>
                <td><?php echo trim($item['isActive']); ?></td>
<!--
                <td><a href="<?php echo $BASE.'/user/update/'. $user['id']; ?>" class="btn btn-primary"><i class="icon-edit icon-white"></i> Edit</a>
                    <a href="<?php echo $BASE.'/user/delete/'. $user['id']; ?>" class="btn btn-danger"><i class="icon-remove icon-white"></i>
                    Delete</a></td>
-->
            </tr>
        <?php endforeach; ?>
    </tbody>

</table>
