<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap4\ActiveForm $form */
/** @var app\models\ContactForm $model */

use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Html;
use kartik\depdrop\DepDrop;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;

$catList = [
    1 => 'Electronics',
    2 => 'Books',
    3 => 'Home & Kitchen'
];

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;

$countryList = file_get_contents('countries.min.json');
// print_r(json_decode($countryList));
$clist = json_decode($countryList, true);
$newlist = array_combine(array_keys($clist), array_keys($clist));
?>
<div class="site-contact">
    <h1>
        <?= Html::encode($this->title) ?>
    </h1>


    <p>
        If you have business inquiries or other questions, please fill out the following form to contact us.
        Thank you.
    </p>

    <div class="row">
        <div class="col-lg-5">

            <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

            <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>

            <?= $form->field($model, 'mobile') ?>
            <?= $form->field($model, 'country')->dropDownList($newlist, ['id' => 'country-id'])->label('Country'); ?>
            <?= $form->field($model, 'city')->widget(DepDrop::classname(), [
                'options'       => ['id' => 'city-id'],
                'pluginOptions' => [
                    'depends'     => ['country-id'],
                    'placeholder' => 'Select...',
                    'url'         => Url::to(['/site/city'])
                ]
            ])->label('City');
            ?>

            <?= $form->field($model, 'email') ?>

            <?= $form->field($model, 'subject') ?>

            <?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>

            <?= $form->field($model, 'reCaptcha')->widget(\himiklab\yii2\recaptcha\ReCaptcha2::className()) ?>

            <div class="form-group">
                <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
            </div>

            <?php ActiveForm::end(); ?>

        </div>
    </div>


</div>