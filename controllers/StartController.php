<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Start;

class StartController extends Controller
{

	public $layout = 'startbase';
 
    public function actionIndex()
    {
        return $this->render('index');
    }

}
