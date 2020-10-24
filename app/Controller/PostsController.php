<?php

class PostsController extends AppController {
    public $helpers = array('Html', 'Form');

    public function index() {

        $this->set('posts', $this->Post->find('all'));
        $this->set('title_for_layout', '記事一覧');
        // $params = array (
        //     'order' => 'modified desc',
        //     'limit' => '2'
        // );
    }

    public function view($id = null) {
        $this->Post->id = $id;
        $this->set('post', $this->Post->read());
    }

    public function add() {
        if ($this->request->is('post')){
            if ($this->Post->save($this->request->data)) {
                $this->Session->setFlash('Sucsess!');
                $this->redirect(
                    array(
                        'action' => 'index'
                    )
                );
            } else {
                $this->session->setFlash('failed!');
            }
        }
    }

    public function edit($id = null) {
        $this->Post->id = $id;
        if ($this->request->is('get')) {
            $this->request->data = $this->Post->read();
        } else {
            if ($this->Post->save($this->request->data)) {
                $this->Session->setFlash('success!');
                $this->redirect(
                    array(
                        'action' => 'index'
                    )
                );
            } else {
                $this->Session->setFlash('failed!');
            }
        }
    }

    public function delete($id) {
        if ($this->request->is('get')) {
            throw new MethodNotAllowedException();
        }
        if ($this->request->is('ajax')) {
            if ($this->Post->delete($id)) {
                $this->autoRender = false;
                $this->autoLayout = false;
                $response = array(
                    'id' => '$id'
                );
                $this->header('Content-Type: application/json');
                echo json_encode($response);

            }

        }
        $this->redirect(
            array(
                'action' => 'index'
            )
        );

        // ↑ajax化した削除処理      通常の削除処理↓
        // if ($this->Post->delete($id)) {
        //     $this->Session->setFlash('Deleted!!!');
        //     $this->redirect(array('action'=>'index'));
        // }
    }


    //ファイルアップロードテスト用
    public function fileup(){
        if ($this->request->is('post') || $this->request->is('put')) {
          //画像の保存
          if($this->Post->save($this->request->data)){
            //画像保存先のパス
            $path = IMAGES;
            $image = $this->request->data['Post']['image'];
            // $this->Session->setFlash('画像を登録しました');
            move_uploaded_file($image['tmp_name'], $path . DS . $image['name']);   //第一引数：仮アップロードのパス  第二引数：保存先のパス


          }else{
            // $this->Session->setFlash('画像が登録できませんでした');
          }
        }
      }
      

}



// class PostsController extends AppController {
//     public $helpers = array('Html', 'Form');
    
//     public function index() {
//         $this->set('posts', $this->Post->find('all'));
//     }

// }
