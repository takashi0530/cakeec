
<?php $this->assign('title', '商品ページ編集'); ?>

<?php echo '商品ページ編集'; ?>
<?php
    echo $this->Form->create(
        'Item', [
            'url' => 'edit',
            'type' => 'file',
        ]
    );
?>
<?php
    echo $this->Form->input(
        'Item.name',[
            'label' => '商品名'
        ]
    );
?>
<?php
    echo $this->Form->input(
        'Item.price', [
            'label' => '商品価格'
        ]
    );
?>
<?php
    echo $this->Form->hidden(
        'Item.id'
    );
?>

<?php echo '現在選択されている画像: ' . $this->request->data['Item']['image']; ?>

<div class="p-2">
    <?php
        if (!empty($this->request->data['Item']['image']) && file_exists(IMAGES . 'items/' . $this->request->data['Item']['image'])) {
            // 画像がある場合
            echo $this->Html->image(
                'items/' . $this->request->data['Item']['image'],[
                    'width' => '100',
                    'height' => '100'
                ]
            );
        } else {
            // 画像がない場合
            echo $this->Html->image(
                'noimage.png',[
                    'width' => '100',
                    'height' => '100'
                ]
            );
        }
    ?>
</div>

<?php
    
?>
<?php
    echo $this->Form->input(
        'file', [
            'url' => './upload',
            'type' => 'file',
            'label' => '商品画像',
            'value' => $this->request->data['Item']['image'],
        ]
    );
?>

<?php
    echo $this->Form->submit(
        '更新する'
    );
?>


<?php
    echo $this->Form->end();
?>


<?php


// echo $this->request->data['id'];