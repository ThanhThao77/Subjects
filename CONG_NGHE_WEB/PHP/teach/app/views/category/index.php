<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Index of Category</title>
</head>
<body>
<div class="container">
    <a href="<?php echo DOMAIN . "/public/index.php?route=category&action=create" ?>" class="btn btn-info">Create</a>
    <table class="table">
        <thead>
        <!--        table row-->
        <tr>
            <!--            table heading-->
            <th>#</th>
            <th>Name</th>
            <th>Description</th>
            <th>Navigation</th>
            <th colspan="2">Action</th>
        </tr>
        </thead>
        <tbody>
        <?php $index = 1;
        foreach ($datas as $data) { ?>
            <tr>
                <th><?php echo $index ?></th>
                <td><?php echo $data->getName() ?></td>
                <td><?php echo $data->getDescription() ?></td>
                <td><?php echo $data->getNavigation() ?></td>
                <td class="d-flex gap-2">
                    <a href="<?php echo DOMAIN . '/public/index.php?route=category&action=edit&id='.$data->getId() ?>"
                       class="btn btn-warning">Edit</a>
                    <form action="<?php echo DOMAIN . '/public/index.php?route=category&action=delete' ?>"
                          method="post">
                        <input hidden name="id" type="text" value="<?php echo $data->getId() ?>"/>
                        <button class="btn btn-danger" onclick="confirm('Do you want to delete')">Delete</button>
                    </form>
                </td>
            </tr>
            <?php $index++;
        } ?>
        </tbody>
    </table>
</div>
</body>
</html>
