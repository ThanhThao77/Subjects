<?php
// if($_SERVER['REQUEST_METHOD'] == ['POST']){
//     $name = $_POST['txtCategory'];
//     $desc = $_POST['txtDescreption'];
//     $status = 1;
    //B1: Ketnoi
    try{
    $conn = new PDO("mysql:host=localhost;dbname=project15", 'root', '');
    //ket noi thanh cong
    //B2: thuc hien truy van
    $sql = "SELECT title, category,";
    echo $sql;
    $stmt = $conn->prepare($sql);
    
    // $stmt->bindValue(1, $name, PDO::PARAM_STR);
    // $stmt->bindValue(2, $desc, PDO::PARAM_STR);
    // $stmt->bindValue(3, $status, PDO::PARAM_STR);
    $stmt->execute();

    //B3: Xu ly ket qua 
    echo 'Co: '.$stmt->rowCount(). ' ban ghi dc them thanh cong';
    }
    catch(PDOException $e){
        echo 'Error: '.$e->getMessage();
    }
// }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class = "container">
        <h3>Quan ly bai viet</h3>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Tieu de</th>
      <th scope="col">Danh muc</th>
      <th scope="col">Tac gia</th>
      <th scope="col">Sua</th>
      <th scope="col">Xoa</th>
    </tr>
  </thead>
  <tbody>
    <?php 
        $count = 0;
        foreach($articles as $article){
    ?>
    
    }
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
    </div>
</body>
</html>
