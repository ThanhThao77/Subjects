<?php
require_once APP_ROOT . "/app/libs/DBConnect.php";
require_once APP_ROOT . "/app/models/Journal.php";

class JournalService{
    public static function getAllJournal(){
        $pdo = new DBConnect();
        $conn = $pdo->getConnection();
        $sql = "SELECT * FROM journals ORDER BY id DESC";
//        statement
        $stmt = $conn->prepare($sql);
        $stmt->execute();
//        $datas=$stmt->fetchAll();
        $journals = [];
        while ($row = $stmt->fetch()) {
            $journal = new Journal($row['id'], $row['title'], $row['editor'],
                                    $row['issn'], $row['publicationdate']);
//            array_push($categories, $category);
            $journals[] = $journal;
        }
        return $journals;
    }

}