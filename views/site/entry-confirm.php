<?php
use yii\helpers\Html;

?>

<p class="text-primary mt-5 font-weight-bold">You entered the following information:</p>

<ul>
    <li><strong>Name:</strong> <?= Html::encode($model->name) ?></li>
    <li><strong>Email:</strong> <?= Html::encode($model->email) ?></li>
</ul>