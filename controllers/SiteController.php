<?php

namespace app\controllers;

use app\models\activerecords\PriceDAO;
use app\models\Price;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;

class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Add price action.
     *
     * @return string
     */
    public function actionAddPrice()
    {
        $model = new Price(['scenario' => Price::SCENARIO_SAVE]);
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $model->save();
            return $this->goBack();
        }
        return $this->render('price', [
            'model' => $model,
        ]);
    }

    /**
     * Update price action.
     *
     * @param $id
     * @return string
     */
    public function actionUpdatePrice($id)
    {
        $model = new Price(['scenario' => Price::SCENARIO_UPDATE]);
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $model->update($id);
            return $this->goBack();
        }

        return $this->render('price', [
            'model' => $model,
        ]);
    }


}

