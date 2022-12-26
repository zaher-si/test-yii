<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<?= Html::tag('h1', 'Welcome to the Training Program...', ['class' => ['text-primary', 'text-center', 'mt-4']]) ?>
<?= Html::tag('p', 'Please fill in the following form:', ['class' => 'fw-bold mt-3']) ?>

<?php $form = ActiveForm::begin(); ?>
<?= Html::beginTag('div', ['class' => 'my-3']) ?>
<?= $form->field($model, 'name')->label('Your Name: ') ?>
<?= $form->field($model, 'email')->label('Your E-Mail: ') ?>


<div class="form-group">
    <?= Html::submitButton('Submit', ['class' => 'btn btn-primary mt-3']) ?>
</div>
<?= Html::endTag('div') ?>
<?php ActiveForm::end(); ?>