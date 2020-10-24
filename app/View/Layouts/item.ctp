<!DOCTYPE html>
<html lang="ja">
<head>
    <?php echo $this->Html->charset(); ?>
    <title><?php echo $title_for_layout; ?></title>
    <?php echo $this->Html->css('item'); ?>     <!-- CSSの指定。webroot/css -->
    <?php echo $scripts_for_layout; ?>      <!-- jsのスクリプトを出力する -->

    <!-- Font Awesome -->
    <?php echo $this->Html->css('https://use.fontawesome.com/releases/v5.8.2/css/all.css'); ?>
    <!-- Bootstrap core CSS -->
    <?php echo $this->Html->css('https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css'); ?>
    <!-- Material Design Bootstrap -->
    <?php echo $this->Html->css('https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.11/css/mdb.min.css'); ?>

</head>

<body>
    <div id="container">
        <!-- ヘッダー共通部分 -->
        <header class="header sticky-top">
            <!-- ナビゲーションバー -->
            <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
                <!-- <a href="#" class="navbar-brand">CAKE STORE</a> -->
                <?php
                    echo $this->Html->link(
                        'CAKE STORE', [
                            'controller' => 'items',
                            'action' => '/',
                        ], [
                            'class' => 'navbar-brand'
                        ]
                    );
                ?>
                <button class="navbar-toggler" type="button"
                    data-toggle="collapse"
                    data-target="#navmenu1"
                    aria-controls="navmenu1"
                    aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navmenu1">
                    <div class="navbar-nav">
                        <a class="nav-item nav-link" href="#">商品検索</a>
                        <!-- <a class="nav-item nav-link" href="#">お問い合わせ</a> -->
                        <?php
                            // echo $this->Html->link(
                            //     'ログイン', [
                            //         'controller' => 'users',
                            //         'action' => 'login'
                            //     ], [
                            //         'class' => 'nav-item nav-link text-blue',
                            //         'div' => false
                            //     ]
                            // );
                        ?>
                        <?php
                            // if ($this->Auth->user()) {
                            //     echo $this->Html->link(
                            //         '会員登録', [
                            //             'controller' => 'users',
                            //             'action' => 'add'
                            //         ], [
                            //             'class' => 'nav-item nav-link text-blue',
                            //             'div' => false
                            //         ]
                            //     );
                            // }
                            // ?>

                        <?php if (!empty($auth)): ?>
                            <?php
                                echo $this->Html->link(
                                    'ログアウト', [
                                        'controller' => 'users',
                                        'action' => 'logout'
                                    ], [
                                        'class' => 'nav-item nav-link text-blue',
                                        'div' => false
                                    ]
                                );
                            ?>
                            <font color="white">ようこそ！<?php echo $auth['username']; ?>様</font>
                        <?php else: ?>
                            <i class="fa fa-sign-in" aria-hidden="true"></i>
                            <?php
                                echo $this->Html->link(
                                    'ログイン', [
                                        'controller' => 'users',
                                        'action' => 'login'
                                    ], [
                                        'class' => 'nav-item nav-link text-blue',
                                        'div' => false
                                    ]
                                );
                            ?>
                        <?php endif; ?>
                    </div>
                </div>
            </nav>
        </header>
        <!-- コンテンツ部分 -->
        <div id="content">
            <!-- ビューテンプレートをレンダリングした結果を出力-->
            <?php echo $content_for_layout; ?>
        </div>
        <!-- フッター部分 -->
        <footer>2020 CAKE STORE  All rights reserved.</footer>
        <div id="footer"></div>
    </div>
    <!-- SQLデバッグ -->
    <?php echo $this->element('sql_dump'); ?>

    <!-- JQuery -->
    <?php echo $this->Html->script('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'); ?>
    <!-- Bootstrap tooltips -->
    <?php echo $this->Html->script('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js'); ?>
    <!-- Bootstrap core JavaScript -->
    <?php echo $this->Html->script('https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js'); ?>
    <!-- MDB core JavaScript -->
    <?php echo $this->Html->script('https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.11/js/mdb.min.js'); ?>

</body>
</html>
