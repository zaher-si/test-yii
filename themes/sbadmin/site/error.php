<?php

/** @var yii\web\View $this */
/** @var string $name */
/** @var string $message */
/** @var Exception$exception */

use yii\helpers\Html;

$this->title = $name;
?>
<div class="site-error">



    <!-- 404 Error Text -->
    <div class="text-center">
        <div class="error mx-auto" data-text="404">
            404
        </div>
        <p class="lead text-gray-800 mb-5">
            <?= nl2br(Html::encode($message)) ?>
        </p>
        <p class="text-gray-500 mb-0">It looks like you found a glitch in the matrix...</p>
        <a href="<?= Yii::$app->homeUrl ?>">&larr; Back to Dashboard</a>
    </div>


</div>