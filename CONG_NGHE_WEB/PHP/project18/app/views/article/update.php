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
    <title>UPDATE</title>
</head>
<body>
<div class="wrapper" style="width: 600px; margin: 25px 25px;">
    <h3>Sửa bài viết</h3>
    <?php
    foreach($ar as $article){
    ?>
    <div class="row mb-3">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Mã bài viết</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="txtTitle" name="txtTitle" value="<?=$article['id']?>">
        </div>
    </div>

    <div class="row mb-3">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Tiêu đề</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="txtTitle" name="txtTitle">
        </div>
    </div>

    <div class="row mb-3">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Tóm tắt</label>
        <div class="col-sm-10">
            <textarea name="txt" cols = "60" rows = "5"></textarea>
        </div>
    </div>

    <div class="row mb-3">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Nội dung</label>
        <div class="col-sm-10">
            <textarea name="txt" cols = "60" rows = "7"></textarea>
        </div>
    </div>

    <div class="row mb-3">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Ngày tạo</label>
        <div class="col-sm-10">
            <input type="date" class="form-control" id="" name="txtCreated">
        </div>
    </div>

    <div class="row mb-3">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Danh mục</label>
        <div class="col-sm-10">
            <select class="form-select" aria-label="Default select example">
                <option selected>--Chọn danh mục--</option>
                <?php
                foreach($ar as $article){

                    echo "<option value='{$article['category_id']}'>{$article['category_id']} </option>";
                    // <option value="2">Kinh te</option>
                    // <option value="3">Chinh tri</option>
                }
                ?>
            </select>
        </div>
    </div>

        <?php
    }
    ?>
</div>
</body>
</html>
