<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Create of Employee</title>
</head>
<body style="background-color: #f2f3f7!important;">
<div class = "container">
    <div class="wrapper" style="width: 600px; margin: 0 auto; padding-top: 40px">
        <div class="container-fluid" style="background-color: #fff; border-radius: 5px">
            <div class="row" >
                <div class="col-md-12" >
                    <h2 class="mt-5">Create Employee</h2>
                    <p>Please fill this form and submit to add employee record to the database.</p>

                    <form action="<?php echo DOMAIN . "/public/index.php?route=employee&action=store"?>" method="post">
                        <div class="form-group" style="padding-bottom: 10px;">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>

                        <div class="form-group d-flex gap-3" style="padding-bottom: 10px;">
                            <label for="name" class="form-label">Gender</label>
                            <div>
                                <input type="radio" id="gender" name="gender" value="male">
                                <label for="gender" class="form-label" >Male</label>
                            </div>
                            <div>
                                <input type="radio" id="gender" name="gender" value="female">
                                <label for="gender" class="form-label" >Female</label>
                            </div>
                        </div>

                        <div class="form-group" style="padding-bottom: 10px;">
                            <label for="name" class="form-label">Date of birth</label>
                            <input type="date" class="form-control" id="name" name="dateOfBirth">
                        </div>

                        <div class="form-group" style="padding-bottom: 20px;">
                            <label for="name" class="form-label">Address</label>
                            <input type="text" class="form-control" id="name" name="address">
                        </div>

                        <div style="padding-bottom: 30px">
                            <button type="submit" class="btn btn-primary" name="btnAdd">Submit</button>
                            <a href="index.php" class="btn btn-secondary ml-2">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>