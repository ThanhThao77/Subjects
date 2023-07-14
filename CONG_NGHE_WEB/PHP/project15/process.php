<?php
if(isset($_POST['txtTitle'])){
    $title = $_POST['txtTitle'];
}

if(isset($_POST['txtContent'])){
    $content = $_POST['txtContent'];
}

    //B1: Ketnoi
    try{
    $conn = new PDO("mysql:host=localhost;dbname=project15", 'root', '');
    //ket noi thanh cong
    //B2: thuc hien truy van
    $sql = "INSERT INTO article (title, sumary, content, created, category_id, member_id, imagine_id, publishe) 
    VALUES(?,?,?, now(), ?,?,1,1)";
    echo $sql;
    $stmt = $conn->prepare($sql);
    
    $stmt->bindValue(1, $title, PDO::PARAM_STR);
    $stmt->bindValue(2, $sumary, PDO::PARAM_STR);
    $stmt->bindValue(3, $content, PDO::PARAM_STR);
    $stmt->bindValue(4, $category, PDO::PARAM_STR);
    $stmt->bindValue(5, $member, PDO::PARAM_STR);

    $stmt->execute();

    //B3: Xu ly ket noi 
    echo 'Co: '.$stmt->rowCount(). ' ban ghi dc them thanh cong';
    }
    catch(PDOException $e){
        echo 'Error: '.$e->getMessage();
    }


?>