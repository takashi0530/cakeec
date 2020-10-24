<?php $this->assign('title', '商品ページ作成'); ?>

<?php echo '商品ページ作成'; ?>

<?php
    echo $this->Form->create('Item'); ?>
<?php
    echo $this->Form->input('name',[
        'label' => '商品名'
        ]
    );
?>
<?php
    echo $this->Form->input('price',[
        'label' => '商品価格',
        // 'after'=>'&nbsp;<a href="#YubinModal" class="btn btn-small" role="button" data-toggle="modal">郵便番号・住所検索</a>'

        ]
    );
?>
<?php
    echo $this->Form->end('登録',[
        'class' => 'btn btn-small',
        'type' => 'button'
    ]
    );
?>


<?php
pr($items_data);
?>

