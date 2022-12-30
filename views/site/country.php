<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<?= Html::tag('p', 'Please enter country code:', ['class' => 'fw-bold mt-3']) ?>

<?php $form = ActiveForm::begin(); ?>
<?= Html::beginTag('div', ['class' => 'my-3']) ?>
<?= $form->field($model, 'code')->label('Country Code: ') ?>



<div class="form-group">
    <?= Html::submitButton('Search', ['class' => 'btn btn-primary mt-3']) ?>
</div>
<?= Html::endTag('div') ?>
<?php ActiveForm::end(); ?>