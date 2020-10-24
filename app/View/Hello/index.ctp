<h1>サンプル見出し</h1>

<!-- POSTされた結果を表示 -->
<?php echo $result; ?>

<!-- テキスト -->
<br><br><br><hr>
<?php
    echo $this->Form->create(
        false,
        array(
            'type' => 'post',
            'url' => '.'
        )
    );
    echo $this->Form->text(
        'HelloForm.text1'
    );
    echo $this->Form->submit('送信');
    // echo $this->Form->end();
?>

<!-- チェックボックス -->
<br><br><br><hr>
<?php
    echo $this->Form->create(
        false,
        array(
            'type' => 'post',
            'url' => ('.')
        )
    );
    echo $this->Form->checkbox(
        'HelloForm.check1',
        array(
            'checked' => true
        )
    );
?>
checkbox
<?php 
    echo $this->Form->end('送信');
?>

<br><br><br><hr>
<?php pr($this->request->data); ?>


<hr>
<form method="post" action="./sendForm">
    <input type="text" name="text1">
    <input type="submit">
</form>


<br><br><br><hr>
<form method="get" action="./sendForm">
    <input type="checkbox" name="check1">チェック<br>
    <input type="radio" name="radio1" value="NO1">ラジオ1<br>
    <input type="radio" name="radio2" value="NO2">ラジオ2<br>
    <select name="select1">
        <option value="Windows">Windows</option>
        <option value="Linux">Linux</option>
        <option value="MacOS">MacOSf</option>
    </select>
    <input type="submit">
</form>



<!-- ラジオボタンの生成 -->
<br><br><br><hr>
<?php
    echo $this->Form->create(
        false,
        array(
            'type' => 'post',
            'url' => '.'
        )
    );
    echo $this->Form->radio(
        "HelloForm.radio1",
        array(
            'ウインドウズ' => 'windows',
            'リナックス' => 'Linux',
            'マックOS' => 'MacOS X'
        ),
        array(
            'legend' => 'OSを選択',
            'value' => 'リナックス'
        )
    );
    echo $this->Form->end("送信");
?>

<!-- inputフォームで書いてみる -->
<br><br><br><hr>
<?php
$arr = [
	0 => [
		'id' => 1
	],
	1 => [
		'id' => 2
	],
	2 => [
		'id' => 3
	],
	3 => [
		'id' => 4
	]
];

echo $this->Form->create(
    false,
    array(
        'type' => 'post',
        'url' => '.'
    )
);
    echo $this->Form->input(
        'Task.name',
        array(
            'type' => 'checkbox',
            // 'name' => 'Task.'.$k,
            'wrapInput' => array(
                'class' => 'col col-md-8 PL0'
            ),
            'maxlength' => 30,
            'id' => 'serial_number',
            'required' => false,
            'action' => '/'
        )
    );

echo $this->Form->end("送信");
?>













