<?php
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>Category List</title>
</head>
<body>
<h2>Category list</h2>
<main class="container mt-5 mb-5">
    <div class="row">
        <div class="col-sm">
            <a href="index.php?route=category&do=add" class="btn btn-success">Thêm mới</a>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tiêu Đề </th>
                    <th scope="col">Tóm tắt </th>
                    <th scope="col">Nội dung </th>
                    <th>Sửa</th>
                    <th>Xóa</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach($ca as $category){
                    ?>
                    <!--                        <th scope="row">--><?php //=$article['id']?><!--</th>-->
                    <td><?=$category->getId() ?></td>
                    <td><?=$category->getName() ?></td>
                    <td><?=$category->getDescription() ?></td>
                    <td><?=$category->getNavigation() ?></td>
                    <!--                        <td>--><?php //=$article['summary'] ?><!--</td>-->
                    <!--                        <td>--><?php //=$article['content'] ?><!--</td>-->
                    <td>
                        <a href="index.php?route=article&do=update"><i class="bi bi-pencil-square"></i></a>
                    </td>
                    <td>
                        <a href=""><i class="bi bi-trash3"></i></a>
                    </td>
                    </tr>
                    <?php
                }
                ?>

                </tbody>
            </table>
        </div>
    </div>
</main>
</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

