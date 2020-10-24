<?php
pr($this->request->data);
?>

<?php $this->assign('title', '商品一覧'); ?>

<?php if (!empty($msg)): ?>
    <?php echo $msg; ?>
<?php endif; ?>

<!-- 商品一覧 -->
<div class="itemList">
    <ul class="flex">
        <?php foreach ($items_data as $key => $item) : ?>
            <li>
                <div class="col-md-offset-2 mb-4 m-4 p-4 text-center" style="background-color: #F4F4F4;">
                    <div class="img-wrap p-2">
                        <?php
                            if (!empty($item['Item']['image']) && file_exists(IMAGES . 'items/' . $item['Item']['image'])) {
                                // 画像がある場合
                                echo $this->Html->image(
                                    'items/' . $item['Item']['image'],[
                                        'width' => '200',
                                        'height' => '200'
                                    ]
                                );
                            } else {
                                // 画像がない場合
                                echo $this->Html->image(
                                    'noimage.png',[
                                        'width' => '200',
                                        'height' => '200'
                                    ]
                                );
                            }
                        ?>
                    </div>
                    <div class="itemName"><?php echo h($item['Item']['name']); ?></div>
                    <div class="p-1 text-right"><?php echo h(number_format($item['Item']['price'])); ?>円<span class="tax-in">(税込)</span><span class=""><i class="fas fa-heart heart_red fa-2x"></i></span></div>
                    <div class="m-1 p-1">
                        <?php
                            echo $this->Html->link(
                                '<button type="button" class="btn w-100 btn-buy" style="color:white">CHECK</button>', [
                                    'action' => 'edit/' . $item['Item']['id'],
                                ],[
                                    'escape' => false,
                                ]
                            );
                        ?>
                        <!-- <a href="<?php echo 'items/edit/' . $item['Item']['id']; ?>">
                            <button type="button" class="btn w-100 btn-buy" style="color:white">CHECK</button>
                        </a> -->

                    </div>
                </div>
            </li>
        <?php endforeach; ?>
    </ul>
</div>



<?php
pr($this->request->data);

// pr($items_data);
?>

