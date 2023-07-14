
<?php
require 'app/libs/DBConnection.php';
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = trim($_POST["name"]);
    $description = trim($_POST["description"]);
    $navigation = trim($_POST["navigation"]);

    if(empty($name) && empty($description) && empty($navigation)){
        $dbConnection = new DBConnection();
        $conn = $dbConnection->getConnection();
        $sql = "INSERT INTO category (name, description, navigation) VALUES (:name, :description, :navigation) ";
        if($stmt = $conn->prepare($sql)){
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':description', $description);
            $stmt->bindParam(':navigation', $navigation);

        }
    }
}
    ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Add Category</title>
</head>
<body>
<div class="wrapper" style="width: 600px; margin: 25px 25px;">
    <h3>Thêm mới loại bài viết</h3>
    <form action="" method="post">
    <div class="row mb-3">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Tên</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="txtTitle" name="name">
        </div>
    </div>

    <div class="row mb-3">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Miêu tả</label>
        <div class="col-sm-10">
            <textarea name="description" cols = "60" rows = "5"></textarea>
        </div>
    </div>

<!--    <div class="row mb-3">-->
<!--        <label for="inputEmail3" class="col-sm-2 col-form-label">Danh muc</label>-->
<!--        <div class="col-sm-10" name="navigation">-->
<!--            <select class="form-select" aria-label="Default select example">-->
<!--                <option selected>--Chon Danh muc--</option>-->
<!---->
<!---->
<!--                     <option value="2">Kinh te</option>-->
<!--                     <option value="3">Chinh tri</option>-->
<!--            </select>-->
<!--        </div>-->
<!--    </div>-->
        <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Miêu tả</label>
            <div class="col-sm-10">
                <input name="navigation" cols = "60" rows = "5"></input>
            </div>
        </div>
        <button type="submit" name="btt_add">SUBMIT</button>
    </form>





</div>
</body>
</html>
