<?php
require_once APP_ROOT . "/app/services/JournalService.php";

class JournalController{
    public function index()
    {
        $datas = JournalService::getAllJournal();
        include APP_ROOT . '/app/views/journal/index.php';
    }

    public function create()
    {
        include APP_ROOT . '/app/views/journal/create.php';
    }

//    public function edit()
//    {
//        include APP_ROOT . '/app/views/journal/edit.php';
//    }
}