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
        $this->layout = 'main-ar';
        return $this->render('cards');
    }
    public function actionCharts()
    {
        $this->layout = 'main-ar';
        return $this->render('charts');
    }
    public function actionTables()
    {
        $this->layout = 'main-ar';
        return $this->render('tables');
    }
    public function actionUtilitiesAnimation()
    {
        $this->layout = 'main-ar';
        return $this->render('utilities-animation');

    }
    public function actionUtilitiesBorder()
    {
        $this->layout = 'main-ar';
        return $this->render('utilities-border');
    }
    public function actionUtilitiesColor()
    {
        $this->layout = 'main-ar';
        return $this->render('utilities-color');
    }
    public function actionUtilitiesOther()
    {
        $this->layout = 'main-ar';
        return $this->render('utilities-other');
    }
    public function actionForgotPassword()
    {
        $this->layout = 'main-ar';
        return $this->renderAjax('forgot-password');
    }
    public function actionLogin()
    {
        $this->layout = 'main-ar';
        return $this->renderAjax('login');
    }

    public function actionRegister()
    {
        $this->layout = 'main-ar';
        return $this->renderAjax('register');
    }
}