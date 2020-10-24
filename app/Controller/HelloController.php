<?php

class HelloController extends AppController {
    public $helpers = array(
        'Html',
        'Form'
    );
    public $name = 'Hello'; //コントローラーの名前を指定・保管しておく  ※なくてもいいかも
    public $uses = [
        none,
        ];  //コントローラー内で使用するモデルを指定する。モデルを使用しない場合は'null'を指定しエラーを防ぐ。
    public $layout = 'Hello'; //レイアウトを指定。view/layout/hello.ctp。
    // public $autoLayout = true; //自動レイアウト機能。trueにすると予め用意されたレイアウトを使ってページをレイアウトする ※デフォルトではcakeが用意したやつ。
    // public $autoRender = true; //自動的にページをレンダリングする機能※デフォルトではtrue。trueにするとview/Hello/フォルダにあるindex.ctpファイルを読み込む

    public function index() {
        App::uses('Sanitize', 'Utility');
        $result = '';
        if ($this->request->isPost()) {
            $result = '送信された情報<br>';
            foreach($this->request->data['HelloForm'] as $key => $val) {
                $result .= $key . ' => ' .$val;
            }
        } else {
            $result = 'なにか書いて送信してください。';
        }
        $this->set('result', Sanitize::stripScripts($result));

        // $this->setAction('other'); //フォワード。現在のアクションから別のアクションに飛ばす
        // $this->redirect('./other'); //リダイレクト。指定した別のURLに飛ばす※ブラウザのURLが変わる
        // $this->set('title_for_layout', 'タイトルはこれ');  //好きなページタイトルを設定する
        // $this->theme = 'helloTheme'; //自作したテーマにを設定させる view/themed/helloTheme/webroot/css
    }

    public function sendForm() {
        App::uses('Sanitize', 'Utility');

        // $str = $this->request->query['text1'];      //getするとき。クエリーテキスト。URLに変化
        $str = $this->request->data['text1'];    //postするとき

        $result = '';
        if ($str != '') {
            $result = 'you type:' . $str;
        } else {
            $result = 'empty';
        }
        foreach($this->request->query as $key => $val) {
            $result .= $key . ' は ' . $val .'です<br>';
        }

        $this->set('result', Sanitize::stripAll($result));   //サニタイズし無害化してから値をビューにわたす
    }
}