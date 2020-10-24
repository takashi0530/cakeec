<!DOCTYPE html>
<html lang="ja">
<head>
    <?php echo $this->Html->charset(); ?>       
    <title>
        <?php echo $title_for_layout; ?>
    </title>
    <?php
        echo $this->Html->css('cake.hello');    //CSSの指定。webroot/css
        echo $scripts_for_layout; //jsのスクリプトを出力する
    ?>
</head>

<body>
    <div id="container">
        <div id="header">** Header **</div>

        <div id="content">
            <?php echo $content_for_layout; ?>         <!-- ビューテンプレートをレンダリングした結果を出力-->
        </div>

        <div id="footer">** this is test **</div>
    </div>

</body>
</html>