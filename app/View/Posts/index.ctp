<h2>記事一覧</h2>
<ul>
<?php foreach ($posts as $post) : ?>
    <!-- <?php pr($post); ?> -->

    <li>
    <!-- <?php echo $this->request->$post['Post']['title']; ?> -->
    <?php 
        echo $this->Html->link(
            $post['Post']['title'],
            '/posts/view/'.$post['Post']['id']
        );
    ?>
    <?php
        echo $this->Html->link(
            '編集',
            array(
                'action' => 'edit',
                $post['Post']['id']
            )
        );
    ?>
    <?php
        $this->Html->link(
            '削除',
            '#',
            array(
                'class' => 'delete',
                'data-post-id' => $post['Post']['id']
            )
        );
    ?>
    <?php
        echo $this->Form->postLink(
            '削除',
            array(
                'action' => 'delete',
                $post['Post']['id']
            ),
            array(
                'confirm' => 'sure?'
            )
        );
    ?>
    <?php
        debug($post);
        echo h($post['Post']['title']);
     ?>
    </li>
<?php endforeach; ?>
</ul>

<?php pr($posts); ?>


<h2>Add Post</h2>
<?php
    echo $this->Html->link(
        'Add post',
        array(
            'controller' => 'posts',
            'action'=>'add'
        )
    );
?>




