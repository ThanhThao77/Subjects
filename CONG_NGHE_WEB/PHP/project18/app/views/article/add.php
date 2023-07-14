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
    <title>ADD</title>
</head>
<body>
<div class="wrapper" style="width: 600px; margin: 25px 25px;">
    <h3>Thêm mới bài viết</h3>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <div class="row mb-3">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Tieu de</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="txtTitle" name="txtTitle">
        </div>
    </div>

    <div class="row mb-3">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Tom tat</label>
        <div class="col-sm-10">
            <textarea name="txt" cols = "60" rows = "5"></textarea>
        </div>
    </div>

    <div class="row mb-3">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Noi dung</label>
        <div class="col-sm-10">
            <textarea name="txt" cols = "60" rows = "7"></textarea>
        </div>
    </div>

    <div class="row mb-3">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Ngay tao</label>
        <div class="col-sm-10">
            <input type="date" class="form-control" id="" name="txtCreated">
        </div>
    </div>

    <div class="row mb-3">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Danh muc</label>
        <div class="col-sm-10">
            <select class="form-select" aria-label="Default select example">
                <option selected>--Chon Danh muc--</option>
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
</form>
</div>
</body>
</html>