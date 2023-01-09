<?php
use yii\helpers\Html;

?>

<p class="text-primary mt-5 font-weight-bold">You entered the following information:</p>

<ul>
    <li><strong>Name:</strong>
        <?= Html::encode($model->name) ?>
    </li>
    <li><strong>Email:</strong> <?= Html::encode($model->email) ?></li>
    <li><strong>Mobile No:</strong>
        <?= Html::encode($model->mobile) ?>
    </li>
    <li><strong>Country:</strong>
        <?= Html::encode($model->country) ?>
    </li>
    <li><strong>City:</strong>
        <?= Html::encode($model->city) ?>
    </li>
    <li><strong>Subject:</strong> <?= Html::encode($model->subject) ?></li>
    <li><strong>Message:</strong>
        <?= Html::encode($model->body) ?>
    </li>
</ul>