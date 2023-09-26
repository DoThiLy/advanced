<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var \frontend\models\ContactForm $model */

use yii\bootstrap5\Html;
use yii\bootstrap5\ActiveForm;
use yii\captcha\Captcha;
?>

<?php $form = ActiveForm::begin();?>

<?= $form->field($model, 'name')?>
<?= $form->field($model, 'email')?>
<div class="form-group">
    <?=Html::submitButton('Submit', ['class'=>'btn btn-primary'])?>
</div>

<?php ActiveForm::end();?>
