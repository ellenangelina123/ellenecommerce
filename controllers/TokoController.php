<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;

class TokoController extends Controller
{

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    public function actionParts()
    {
        return $this->render('parts');
    }

    public function actionBicycles()
    {
        return $this->render('bicycles');
    }

    public function actionKendi()
    {
        return $this->render('kendi');
    }

    public function actionAccessories()
    {
        return $this->render('accessories');
    }

    public function actionSingle()
    {
        return $this->render('single');
    }

    public function actionCart()
    {
        return $this->render('cart');
    }

    public function actionBuynow()
    {
        return $this->render('buynow');
    }
}