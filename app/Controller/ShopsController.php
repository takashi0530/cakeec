<?php

class ShopsController extends AppController {

    public $name = 'Item'; //コントローラーの名前を指定・保管しておく  ※なくてもいいかも
    public $uses = [
    'Item',
    ]; 

    public $autoLayout = true; //自動レイアウト機能。trueにすると予め用意されたレイアウトを使ってページをレイアウトする ※デフォルトではcakeが用意したやつ。
    public $autoRender = true; //自動的にページをレンダリングする機能※デフォルトではtrue。trueにするとview/Hello/フォルダにあるindex.ctpファイルを読み込む

    public function index() {
        $test = 'setのてすと';
        $this->set('test', $test);
        $this->set('items', $this->Item->find('all'));

    }

    



}