<?php

App::uses('FlashComponent', 'Controller');

class ItemsController extends AppController {

    public $helpers = [
        'Html',
        'Form'
    ];

    // public $name = 'Items'; //コントローラーの名前を指定・保管しておく  ※なくてもいいかも
    //使用するテーブルを読み込み
    public $uses = [
        'Item',
    ];

    //コンポーネントの読み込み
    public $components = [
        'Auth',
    ];

    // public $autoLayout = true; //自動レイアウト機能。trueにすると予め用意されたレイアウトを使ってページをレイアウトする ※デフォルトではcakeが用意したやつ。
    // public $autoRender = true;   //自動的にページをレンダリングする機能※デフォルトではtrue。trueにするとview/Hello/フォルダにあるindex.ctpファイルを読み込む
    public $layout = 'Item';     // Controller直下（全体）にLayoutを適用させる場合


    public function index() {
        // $this->layout = 'Item';  // index()などaction内にのみLayoutを適用させる場合
        //データをモデルから取得してビューへ渡す
        $items_data = $this->Item->find('all');
        $this->set('items_data', $items_data);
    }


    public function add() {

        if ($this->request->is('post')) {
            if ($this->Item->save($this->request->data)) {
                // $this->Flash->set('This is a message');
                $this->redirect([
                    'action' => 'index'
                    ]
                );
                $msg = '登録しました';
                echo $msg;
                $this->set('msg', $msg);
            }
        } else {
            // $this->Session->setFlash('登録できませんでした。');
        }

    }

    public function edit($id = null) {
        $select_data = $this->Item->find('first',[
            'conditions' => [
                'Item.id' => $this->request->data['Item']['id']
            ]
        ]);

        pr($select_data);
        pr($this->request->data);
        // exit;
        // pr($this->request->data['Item']['image']);
            $this->Item->id = $id;
        // $this->data['id'] = $id;
        // pr($this->Item->id);
        // pr($this->request->data);

        if ($this->request->is('get')) {
            $this->request->data = $this->Item->read();

        } else {
            $this->request->data['Item']['image'] = $this->request->data['Item']['file']['name'];   //アップロードされた画像名をItem.imageに保存
            move_uploaded_file($this->request->data['Item']['file']['tmp_name'], IMAGES . 'items/' . $this->request->data['Item']['file']['name']);  //temp画像をサーバー内に移動（webroot/img/items）
            // set($item_data, $this->request->data);
            if ($this->Item->save($this->request->data)) {
                $this->redirect([
                    'action' => 'index'
                ]);
            }

        }

    }





}