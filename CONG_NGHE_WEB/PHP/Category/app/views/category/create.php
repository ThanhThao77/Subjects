<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <title>Create of Category</title>
</head>
<body>
    <div class="container">
        <div class="wrapper" style="width: 600px; margin: 0 auto">
            <div class="container-fluid"
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="mt-5">Create Category</h2>
                        <p>Please fill this form and submit to add category record to the database.</p>
                        <form action="" method="post">
                            <div class="form-group" style="padding-bottom: 10px;">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name">
                            </div>
                            <div class="form-group" style="padding-bottom: 15px"
                                <label for="age" class="form-label">Description</label>
                                <input type="text" class="form-control" id="description" name="description">
                            </div>

                            <button type="submit" class="btn btn-primary" name="btnAdd">Submit</button>
                            <a href="index.php" class="btn btn-secondary ml-2">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>