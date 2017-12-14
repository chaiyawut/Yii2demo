    <h1>Login Profile</h1>
                        
                <?php
                use yii\bootstrap\ActiveForm;
                if(!empty($message))
                    echo $message;
                    ?>
                <?php $form = ActiveForm::begin()?>
                <div>
                      <?= $form->field($model,"username")->textinput()?>
                </div>
                <div>
                      <?= $form->field($model,"passwoed")->passwordInput()?>
                </div>
                <div>
                      <?= yii\helpers\Html::submitButton("Login",["class"=>"btn btn-primary"])?>  
                </div>
                    <?php ActiveForm::end();?>
        
          
