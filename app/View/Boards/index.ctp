<h1>送信フォーム</h1>

<!-- forでリストを表示させる方法 -->
<p>forでリストを表示させる方法</p>
<table>
    <?php
    for ($i = 0; $i < count($data); $i++) {
        $arr = $data[$i]['Board'];
        echo "<tr>";
        echo "<td>{$data[$i]['Board']['id']}</td>";
        echo "<td>{$data[$i]['Board']['name']}</td>";
        echo "<td>{$data[$i]['Board']['title']}</td>";
        echo "<td>{$data[$i]['Board']['content']}</td>";
        echo "</tr>";
    }
    ?>
</table>

<!-- forとHTMLヘルパーを利用して表示させる方法 -->
<p>forとHTMLヘルパーを利用して表示させる方法</p>
<table>
    <?php
    for($i = 0; $i < count($data); $i++) {
        echo $this->Html->tableCells(
            $data[$i]['Board'],
            array(),
            array(),
            true
        );
    }
    ?>
</table>

<!-- foreachでテーブルを表示させる方法 -->
<p>foreachでテーブルを表示させる方法</p>
<table>
    <?php foreach ($data as $d) : ?>
        <?php echo '<tr>'; ?>
        <?php echo '<td>' . $d['Board']['id']        . '</td>'; ?>
        <?php echo '<td>' . $d['Board']['name']      . '</td>'; ?>
        <?php echo '<td>' . $d['Board']['title']     . '</td>'; ?>
        <?php echo '<td>' . $d['Board']['content']   . '</td>'; ?>
        <?php echo '</tr>'; ?>
    <?php endforeach; ?>
</table>


<!-- foreachでリストを表示させる方法 -->
<p>foreachでリストを表示させる方法</p>
<ul>
<?php foreach ($data as $d) : ?>
    <li>
    <?php echo $d['Board']['id']; ?>
    <?php echo $d['Board']['name']; ?>
    <?php echo $d['Board']['title']; ?>
    <?php echo $d['Board']['content']; ?>
    </li>
<?php endforeach; ?>
</ul>



<?php
pr($data);
echo 'これはテストです';