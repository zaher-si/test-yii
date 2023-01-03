<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;

class ArController extends Controller
{
    public function actionIndex()
    {
        $this->layout = 'main-ar';
        return $this->render('index');
    }
}