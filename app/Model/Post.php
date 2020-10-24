<?php

class Post extends AppModel {

    public $validate = array(
        'title' => array(
            'rule' => 'NotBlank',
            'message' =>'カラじゃだめ！'
        ),
        'body' => array(
            'rule' => 'NotBlank'
        )
        );
};
