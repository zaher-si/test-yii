<?php
namespace app\helpers;

use Yii;
use yii\helpers\BaseStringHelper;
use yii\helpers\Url;

class LangLinkModifier
{


    public static function toEnglishUrl()
    {
        return Url::toRoute('/site/' . BaseStringHelper::explode(Yii::$app->controller->route, '/')[1]);
    }

    public static function toArabicUrl()
    {
        return Url::toRoute('/ar/' . BaseStringHelper::explode(Yii::$app->controller->route, '/')[1]);
    }
}