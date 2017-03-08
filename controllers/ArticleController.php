<?php

namespace app\controllers;

use app\models\sqlite\Persons;
use app\models\sqlite\Locations;
use app\models\sqlite\Religions;
use app\models\sqlite\Fractions;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;

class ArticleController extends Controller
{
    
    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex($category)
    {
        return $this->render('category');
    }

    /**
     * Add price action.
     *
     * @return string
     */
    public function actionReligion($id = 0)
    {
        $model = new Religions();

        if ($model->load(Yii::$app->request->post())) {
            if ($model->validate()) {
                // form inputs are valid, do something here
                $model->save(false);
                return;
            }
        }

        return $this->render('religion', [
            'model' => $model,
        ]);
    }

    /**
     * Update price action.
     *
     * @param $id
     * @return string
     */
    public function actionFraction($id = 0)
    {
        $model = new Fractions();

        if ($model->load(Yii::$app->request->post())) {
            if ($model->validate()) {
                // form inputs are valid, do something here
                $model->save(false);
                return;
            }
        }

        return $this->render('fraction', [
            'model' => $model,
        ]);
    }

    /**
     * Update price action.
     *
     * @param $id
     * @return string
     */
    public function actionLocation($id = 0)
    {
        $model = new Locations();

        if ($model->load(Yii::$app->request->post())) {
            if ($model->validate()) {
                // form inputs are valid, do something here
                $model->save(false);
                return;
            }
        }

        return $this->render('location', [
            'model' => $model,
        ]);
    }

    /**
     * Update price action.
     *
     * @param $id
     * @return string
     */
    public function actionPerson($id = 0)
    {
        // $model = new Persons();
        $model = Persons::findOne(1);

        if ($model->load(Yii::$app->request->post())) {
            if ($model->validate()) {
                // form inputs are valid, do something here
                $model->save(false);
                return;
            }
        }

        return $this->render('person', [
            'model' => $model,
        ]);
    }

    public function actionTail($id = 0)
    {
        // $model = new Persons();
        $model = 1;
        /*
        if ($model->load(Yii::$app->request->post())) {
            if ($model->validate()) {
                // form inputs are valid, do something here
                $model->save(false);
                return;
            }
        }
        */
        return $this->render('tail', [
            'model' => $model,
        ]);
    }


}

