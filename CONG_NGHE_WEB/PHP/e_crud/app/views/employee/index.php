<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index of Category</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        .wrapper{
            width: 900px;
            margin: 0 auto;
        }
        table tr td:last-child{
            width: 120px;
        }
    </style>
    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>

</head>
<body>
<div class="wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="mt-5 mb-3 clearfix">
                    <h2 class="pull-left">Employees Details</h2>
                    <a href="<?php echo DOMAIN . "/public/index.php?route=employee&action=create"?>"
                       class="btn btn-success pull-right"><i class="fa fa-plus"></i> Add New Employee</a>
                </div>

                <table class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Gender</th>
                        <th>Date Of Birth</th>
                        <th>Address</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $index=1;
                    foreach ($datas as $data) {?>
                        <tr>
                            <th><?php echo $index?></th>
                            <td><?php echo $data->getName() ?></td>
                            <td><?php echo $data->getGender() ?></td>
                            <td><?php echo $data->getDateOfBirth() ?></td>
                            <td><?php echo $data->getAddress() ?></td>
                            <td>
                                <a href="" class="mr-3" title="Update Record" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>
                                <a href="" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span></a>
                            </td>
                        </tr>
                        <?php $index++;
                    } ?>
            </div>
        </div>
    </div>
</div>

</body>
</html>

