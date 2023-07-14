<?php
//include "../../libs/DBConnection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <title>Document</title>
</head>
<body>
<h1>Article for demo</h1>

<!--        --><?php
//        foreach($articles as $article){
//            echo "<p>{$article->getTitle()}</p>";
//        }
//        ?>
<main class="container mt-5 mb-5">
    <div class="row">
        <div class="col-sm">
            <a href="index.php?route=article&do=add" class="btn btn-success">Thêm mới</a>
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
                foreach($ar as $article){
                    ?>
                    <!--                        <th scope="row">--><?php //=$article['id']?><!--</th>-->
                    <td><?=$article->getId() ?></td>
                    <td><?=$article->getTitle() ?></td>
                    <td><?=$article->getSummary() ?></td>
                    <td><?=$article->getContent() ?></td>
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
