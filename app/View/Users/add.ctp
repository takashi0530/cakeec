

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
                                'url' => 'add'
                            ]
                        );
                    ?>
                    <p class="h4 text-center py-4">新規ユーザー登録</p>

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
                                '登録', [
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


<!-- cakephp 標準的なフォーム -->
<?php
// echo $this->Form->create(
//     'User',[
//         'url' => 'add'
//     ]
// );
// echo $this->Form->input(
//     'username'
// );
// echo $this->Form->input(
//     'password'
// );
// echo $this->Form->end(
//     'add'
// );
?>

<?php
pr($auth);
?>