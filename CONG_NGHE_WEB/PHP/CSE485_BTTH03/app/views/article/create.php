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
    <title>Create</title>
</head>
<body>
<form>
<div class="wrapper" style="width: 600px; margin: 25px 25px;">
    <h3>Thêm mới bài viết</h3>
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
                foreach($categories as $category){

                    echo "<option value='{$category['id']}' > </option>";
                    // <option value="2">Kinh te</option>
                    // <option value="3">Chinh tri</option>
                }
                ?>
            </select>
        </div>
    </div>

    <div class="row mb-3">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Tac gia</label>
        <div class="col-sm-10">
            <select class="form-select" aria-label="Default select example">
                <option selected>--Chon Tac gia--</option>
                <option value="1">Nguyen Nhat Anh</option>
                <option value="2">Ho Xuan Huong</option>
                <option value="3">Xuan Dieu</option>
            </select>
        </div>
    </div>



    <fieldset class="row mb-3">
        <legend class="col-form-label col-sm-2 pt-0">Trang thai</legend>
        <div class="col-sm-10">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                <label class="form-check-label" for="gridRadios1">
                    Xuat ban
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                <label class="form-check-label" for="gridRadios2">
                    Nhap
                </label>
            </div>
            <div class="form-check disabled">
                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" disabled>
                <label class="form-check-label" for="gridRadios3">
                    Third disabled radio
                </label>
            </div>
        </div>
    </fieldset>
</div>
    <button type="submit" class="btn btn-primary">Them</button>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>
