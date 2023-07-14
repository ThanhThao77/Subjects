<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Create of Category</title>
</head>
<body>
<div class="container">
    <form action="<?php echo DOMAIN . "/public/index.php?route=category&action=store"?>" method="post">
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" id="name" name="name" class="form-control">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="text" id="description" name="description" class="form-control">
        </div>
        <div class="d-flex gap-3 align-items-center mb-3">
            <label for="navigation" class="form-label">Navigation</label>
            <div>
                <input type="radio" id="navigation" name="navigation" value="0">
                <label for="navigation" class="form-label" >0</label>

            </div>
            <div>
                <input type="radio" id="navigation" name="navigation" value="1">
                <label for="navigation" class="form-label" >1</label>
            </div>
        </div>
<!--        info warning danger success primary dark light-->
        <button class="btn btn-info">Thêm mới</button>
    </form>
</div>
</body>
</html>