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
    public function actionButtons()
    {
        $this->layout = 'main-ar';
        return $this->render('buttons');
    }
    public function actionBlank()
    {
        $this->layout = 'main-ar';
        return $this->render('blank');
    }
    public function actionCards()
    {
        return $this->render('cards');
    }
    public function actionCharts()
    {
        return $this->render('charts');
    }
    public function actionTables()
    {
        return $this->render('tables');
    }
    public function actionUtilitiesAnimation()
    {
        return $this->render('utilities-animation');

    }
    public function actionUtilitiesBorder()
    {
        return $this->render('utilities-border');
    }
    public function actionUtilitiesColor()
    {
        return $this->render('utilities-color');
    }
    public function actionUtilitiesOther()
    {
        return $this->render('utilities-other');
    }
    public function actionForgotPassword()
    {
        return $this->renderAjax('forgot-password');
    }
    public function actionLogin()
    {
        return $this->renderAjax('login');
    }
    public function actionRegister()
    {
        return $this->renderAjax('register');
    }
}