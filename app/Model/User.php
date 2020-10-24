<?php

App::uses('AppModel', 'Model');

class User extends AppModel {

    public $name = 'User';


    public function beforeSave($options = []) {
        $this->data['User']['password'] = AuthComponent::password($this->data['User']['password']);
        return true;
    }

    // public $validate = [
    //     'username' => [
    //         'rule' => 'NotBlank',
    //         'message' => 'ユーザー名を入力してください。aaaaa'
    //     ],
    //     'password' => [
    //         'rule' => 'NotBlank',
    //         'message' => 'パスワードを入力してください。aaaa',
    //     ]
    // ];

    // public $validate = array(
    //     'username' => array(
    //         'alphaNumeric' => array(
    //             'rule' => 'alphaNumeric',
    //             'required' => true,
    //             'message' => '文字と数字のみです'
    //         ),
    //         'between' => array(
    //             'rule' => array('lengthBetween', 5, 15),
    //             'message' => '5～15文字です'
    //         )
    //     ),
    //     'password' => array(
    //         'rule' => array('minLength', '8'),
    //         'message' => '最低8文字です'
    //     ),
    //     // 'email' => 'email',
    //     // 'born' => array(
    //     //     'rule' => 'date',
    //     //     'message' => '正しい値を入れてください',
    //     //     'allowEmpty' => true
    //     // )
    // );

    public $validate = array(
        'password' => array(
            'rule' => array('minLength', 8),
            'message' => 'パスワードは８文字以上必要です。'
        )
    );

}