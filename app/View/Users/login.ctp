<!-- vue.jsを読み込み -->
<!-- <?php $this->Html->script('vue', ['inline' => false]); ?> -->

<?php $this->assign('title', 'ログイン'); ?>


<!-- <?php 
if ($this->Session->check('Message.auth')) {
    echo $this->Session->flash('auth');
}
?> -->

<?php if (!empty($login_error)): ?>
    <?php echo $login_error; ?>
<?php endif; ?>





<i class="fa fa-sign-in" aria-hidden="true"></i>

<div class="container p-5">
    <div class="row">
        <div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 mx-auto">
            <!-- Card -->
            <div class="card">

            <!-- Card body -->
            <div class="card-body">
                    <!-- Material form register -->
                    <?php
                        echo $this->Form->create(
                            'User',[
                                'url' => 'login'
                            ]
                        );
                    ?>
                    <p class="h4 text-center py-4">ログイン</p>

                    <!-- Material input text -->
                    <div class="md-form">
                        <i class="fa fa-user prefix grey-text"></i>
                        <?php
                            echo $this->Form->input(
                                'username', [
                                    'id' => 'materialFormCardNameEx',
                                    'class' => 'form-control',
                                    'div' => false,
                                    'label' => 'ユーザー名',[
                                        'for' => 'materialFormCardNameEx',
                                        'class' => 'font-weight-light'
                                    ],
                                    'required' => false
                                ]
                            );
                        ?>
                    </div>

                    <!-- Material input email -->
                    <!-- <div class="md-form">
                        <i class="fa fa-envelope prefix grey-text"></i>
                        <input type="email" id="materialFormCardEmailEx" class="form-control">
                        <label for="materialFormCardEmailEx" class="font-weight-light">E-mail</label>
                    </div> -->

                    <!-- Material input email -->
                    <!-- <div class="md-form">
                        <i class="fa fa-exclamation-triangle prefix grey-text"></i>
                        <input type="email" id="materialFormCardConfirmEx" class="form-control">
                        <label for="materialFormCardConfirmEx" class="font-weight-light">E-mail (確認)</label>
                    </div> -->

                    <!-- Material input password -->
                    <div class="md-form">
                        <i class="fa fa-lock prefix grey-text"></i>
                        <?php
                            echo $this->Form->input(
                                'password', [
                                    'id' => 'materialFormCardPasswordEx',
                                    'class' => 'form-control',
                                    'div' => false,
                                    'label' => 'パスワード' ,[
                                        'for' => 'materialFormCardPasswordEx',
                                        'class' => 'font-weight-light',
                                    ],
                                    'required' => false
                                ]
                            );
                        ?>
                    </div>
                    <div class="text-center py-4 mt-3">
                        <?php
                            echo $this->Form->button(
                                'ログイン', [
                                    'method' => 'POST',
                                    'type' => 'submit',
                                    // 'div' => false,
                                    'class' => 'btn btn-cyan ',
                                    'value' => 'add',
                                    'style' => 'width: 80%; font-size:1.0rem'
                                ]);
                        ?>
                        <?php echo $this->Form->end(); ?>
                    </div>
                <!-- Material form register -->
                </div>
                <!-- Card body -->
            </div>
            <!-- Card -->
        </div>
    </div>
</div>



<?php
if (!empty($auth)) {
    echo '＜ログイン中＞' . pr($auth);
} else {
    echo '＜ログアウト中＞';
}
?>


<!-- cakephp2 標準的なログインフォーム -->
<?php
// echo $this->Form->create(
//     'User', [
//         'url' => 'login'
//     ]
// );
?>
<?php
// echo $this->Form->input(
//     'username', [
//         'label' => 'ユーザー名'
//     ]
// );
?>
<?php
// echo $this->Form->input(
//     'password', [
//         'label' => 'パスワード'
//     ]
// );
?>
<?php
// echo $this->Form->end(
//     'ログイン',
// );
?>
