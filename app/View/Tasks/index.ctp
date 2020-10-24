
<!-- タスクを新規作成 -->
<?php echo $this->Html->link('新規タスク', '/Tasks/create'); ?>

<h3><?php echo count($tasks_data); ?>件のタスクが未完了です。</h3>
<?php echo $this->Form->create(false, array('type'=>'post', 'url'=>('.'))); ?>
<?php echo $this->Form->submit('確認画面へ', array('name' => 'submit')); ?>


<?php echo $this->Html->link('まとめてタスクを完了する', ''); ?>

<?php echo $result; ?>


<?php echo $this->Form->checkbox('HelloForm.check1',array('checked'=>false)); ?>
<?php echo $this->Form->checkbox('HelloForm.check2',array('checked'=>false)); ?>
<?php echo $this->Form->checkbox('HelloForm.check3',array('checked'=>false)); ?>

<!-- 現在の未完了タスクを表示 -->
<table>
    <tr>
        <th></th>
        <th>ID</th>
        <th>名前</th>
        <th>本文</th>
        <th>期限日</th>
        <th>作成日</th>
        <th>操作</th>
    </tr>
<?php foreach ($tasks_data as $key => $row): ?>
    <tr>
        <td>

            <?php echo $this->Form->checkbox('HelloForm.check',array('checked'=>false)); ?>
        </td>
        <td><?php echo $this->Html->link($row['Task']['id'], '/Tasks/view/' . $row['Task']['id']); ?></td>
        <td><?php echo h($row['Task']['name']); ?></td>
        <td><?php echo H($row['Task']['body']); ?></td>
        <td><?php echo h($row['Task']['due_date']); ?></td>
        <td><?php echo h($row['Task']['created']); ?></td>
        <td><?php echo $this->Html->link(
            'このタスクを完了する',
            '/Tasks/done/' . $row['Task']['id']
        ); ?></td>
    </tr>
<?php endforeach ?>
</table>
<?php echo $this->Form->end('送信'); ?>

<?php pr($tasks_data);?>
