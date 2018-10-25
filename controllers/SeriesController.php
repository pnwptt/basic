<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;

use yii\web\Controller;
use yii\web\Response;
use yii\web\Session;

use app\models\LoginForm;
use app\models\ContactForm;
use app\models\member;

class SeriesController extends Controller
{ 
	function actionIndex(){
		return $this->render('index');
	}

	function actionAdd(){
		return $this->render('Add');
	}  

}