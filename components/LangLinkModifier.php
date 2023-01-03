<?php
use yii\helpers\BaseStringHelper;
use yii\helpers\Url;

class LangLinkModifier
{



    public static function urlToEn()
    {
        return Url::toRoute('/site/' . BaseStringHelper::explode(Yii::$app->controller->route, '/')[1]);
    }
}