<?php

class UsersController extends AppController {


    // public $name = 'Users';

    public $uses = [
        'User',
        'Form',
        'Items',
    ];

    public $components = [
        'Auth',
        'Session',
        'Flash',
    ];
    // public $autoRender = true;   //自動的にページをレンダリングする機能※デフォルトではtrue。trueにするとview/Hello/フォルダにあるindex.ctpファイルを読み込む
    public $layout = 'Item';     // Controller直下（全体）にLayoutを適用させる場合
    public $autoLayout = true; //自動レイアウト機能。trueにすると予め用意されたレイアウトを使ってページをレイアウトする ※デフォルトではcakeが用意したやつ。


    
    //ログイン処理
    public function login() {
        if ($this->request->isPost()) {
            if ($this->Auth->login()) {
                echo 'ログインに成功しました！';
                return $this->redirect([
                    'controller' => 'items',
                    'action' => '/'
                ]);
            } else {
                // echo 'ログイン情報が違います。';
                // echo $this->Session->setFlash('ログイン情報が違いますaaaaaaaaaaaaaaaaaaaaa');
                $this->Flash->set('This is a message');
                $this->Session->setFlash('IDかパスワードが違います');
                $login_error = 'ログイン失敗';
                // $this->set('login_error', $login_error);
            }
        }
    }

    //ログアウト処理
    public function logout() {
        $this->Auth->logout();
    }

    //新規ユーザー登録
    public function add() {
        if (!empty($this->data)) {  //postされたとき
            if ($this->data) {
                $this->User->create();
                $this->User->save($this->data);
                $this->redirect([
                    'action' => 'login'
                ]);
            }
        }

    }

    //beforeFilter()メソッド ：  Authコンポーネントによって認証を使わないページを登録するために必要なメソッド。これがないとloginページに飛ばされてしまう。（addページとlogoutページへのアクセスは認証を不要とする）
    public function beforeFilter() {
        $this->Auth->allow('add');
        $this->Auth->allow('logout');

        //AppControllerのbeforeFilter()を読み込む記述
        parent::beforeFilter();

    }


}