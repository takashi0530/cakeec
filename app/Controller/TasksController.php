<?php

class TasksController extends AppController {

    //動作確認のためにscaffoldを使う
    // public $scaffold;

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



        //データをモデルから取得してビューへ渡す
        $tasks_data = $this->Task->find('all',
            array(
                'conditions' => array(
                    'Task.status' => 0
                )
            )
        );

        $this->set('tasks_data', $tasks_data);

        // app/View/Tasks/index.ctpを表示
        // $this->set('id', $id);
        $this->render('index');

    }



    public function done() {
        if ($this->request->is('post')) {

        }
        //URLの末尾からタスクのIDを取得してメッセージを作成
        $id = $this->request->pass[0];
        $this->Task->id = $id;
        $this->Task->saveField('status', 1);
        $msg = sprintf('タスクを %s を完了しました。', $id);


        //メッセージを表示してトップへリダイレクト
        $this->Session->setFlash($msg);
        $this->redirect('/Tasks');

        //メッセージを表示してリダイレクト
        // $this->render('index');
        // $this->flash($msg, array('controller' => 'Tasks', 'action' => 'index', 'full_base' => true));

    }

    public function check() {
        $result = '';

        if ($this->request->isPost()) {
            $result ='送信された情報<br>';
            foreach($this->request->data['HelloForm'] as $key => $val)
                $result .= $key . ' => ' . $val;
        } else {
            $result = 'なにか書いてください';
        }
        $this->set('result',$result);

    }



    public function create() {
        if ($this->request->is('post')) {
            $data = array(
                'name' => $this->request->data['name']
            );

            // pr($data);
            //データを登録
            $id = $this->Task->save($data);

            $msg = sprintf(
                'タスク %s を登録しました。',
                $this->Task->id
            );

            //メッセージを表示してトップへリダイレクト
            $this->Session->setFlash($msg);
            $this->redirect('/Tasks');

            //タスク登録結果を表示させ、リンクをクリックでトップへ戻る
            // $this->flash($msg, array('controller' => 'Tasks', 'action' => 'index', 'full_base' => true));
            return;
        }
        $this->render('create');
    }

}