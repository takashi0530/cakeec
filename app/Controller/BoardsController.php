<?php

class BoardsController extends AppController {

    public $name = 'Boards';

    public function index() {
        $data = $this->Board->find('all');  // Boardsテーブルの全レコード情報を配列として$dataに格納する
        $this->set('data', $data);
    }

}