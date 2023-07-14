<?php
// PHP - MySQL Procedural:
// Buoc 1: Ket noi DATABASE SERVER
$conn = mysqli_connect('localhost','root','abc','project09');

if(!$conn){
    die('Can not connect');
}
// Buoc 2: Dinh nghia va thuc thi truy van
$sql = "SELECT * FROM students LIMIT 10";
$result = mysqli_query($conn,$sql);

// Buoc 3: Xu ly TAP KET QUA (Select)
if(mysqli_num_rows($result) > 0){
    $students = mysqli_fetch_all($result);
}
// Buoc 4: Dong ket noi
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Mã sinh viên</th>
      <th scope="col">Họ và tên</th>
      <th scope="col">Sửa</th>
      <th scope="col">Xóa</th>
    </tr>
  </thead>
  <tbody>
    <?php
        foreach($students as $student){
    ?>
            <tr>
                <th scope="row"><?= $student[0]; ?></th>
                <td><?= $student[1]; ?></td>
                <td>
                    <a href="edit.php?id=<?= $student[0]; ?>"><i class="bi bi-pencil-square"></i></a>
                </td>
                <td>
                    <a href="del.php?id=<?= $student[0]; ?>"><i class="bi bi-trash3-fill"></i></a>
                </td>
            </tr>
    <?php
        }
    ?>
  </tbody>
</table>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>