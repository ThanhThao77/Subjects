<?php
//include 'views/admin/header_admin.php';
include_once ('../../config/DBConnection.php');
include_once ('../../services/ArticleService.php');
$ArticleService = new ArticleService();
$rows = $ArticleService->getAllArticles();
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
    <title>Document</title>
</head>
<body>
<main class="container mt-5 mb-5">
    <div class="row">
        <div class="col-sm">
            <a href="" class="btn btn-success">Thêm mới</a>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tiêu Đề </th>
                    <th scope="col">Tóm tắt </th>
<!--                    <th scope="col">Nội dung </th>-->
<!--                    <th scope="col">TNgày viết </th>-->
<!--                    <th scope="col">Mã thể loại</th>-->
<!--                    <th scope="col">Mã Tác Giả</th>-->
<!--                    <th scope="col">Mã hình ảnh </th>-->
<!--                    <th scope="col">Phát hành </th>-->
                    <th>Sửa</th>
                    <th>Xóa</th>
                </tr>
                </thead>
                <tbody>
<!--                --><?php
//                // Ket noi db
//                $dbConn = new DBConnection();
//                $conn = $dbConn->getConnection();
//                // Truy van
//                $sql = "SELECT 'id', 'title', 'summary' FROM category";
//                $result = $conn->query($sql);
//                // Xu li ket qua tra ve
//                $row = $result->fetchAll();
                foreach($rows as $row){
                    ?>
                    <th scope="row"><?=$row['id'] ?></th>
                    <td><?=$row['title'] ?></td>
                    <td><?=$row['summary'] ?></td>
<!--                    <td>--><?php //=$row['content'] ?><!--</td>-->
<!--                    <td>--><?php //=$row['created'] ?><!--</td>-->
<!--                    <td>--><?php //=$row['category_id'] ?><!--</td>-->
<!--                    <td>--><?php //=$row['member_id'] ?><!--</td>-->
<!--                    <td>--><?php //=$row['image_id'] ?><!--</td>-->
<!--                    <td><a href="--><?php //=$row['published'] ?><!--"></a></td>-->
                    <td>
                        <a href=""><i class="bi bi-pencil-square"></i></a>
                    </td>
                    <td>
                        <a href=""><i class="fa-solid fa-trash"></i></a>
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

<?php //include '/xampp/htdocs/CSE485_2023_BTTH02/views/admin/footer_admin.php';?>

