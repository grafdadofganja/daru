<?php

namespace app\controllers;

use app\models\sqlite\Persons;
use app\models\sqlite\Locations;
use app\models\sqlite\Religions;
use app\models\sqlite\Fractions;
use app\models\sqlite\Tails;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;

class ModerController extends Controller
{
    
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
    public function actionReligion()
    {
        $model = new Religions();

        if ($model->load(Yii::$app->request->post())) {
            if ($model->validate()) {
                // form inputs are valid, do something here
                $model->save(false);
                return $this->redirect(['religion']);
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
    public function actionFraction()
    {
        $model = new Fractions();

        if ($model->load(Yii::$app->request->post())) {
            if ($model->validate()) {
                // form inputs are valid, do something here
                $model->save(false);
                return $this->redirect(['fraction']);
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
    public function actionLocation()
    {
        $model = new Locations();

        if ($model->load(Yii::$app->request->post())) {
            if ($model->validate()) {
                // form inputs are valid, do something here
                $model->save(false);
                return $this->redirect(['location']);
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
    public function actionPerson()
    {
        $model = new Persons();

        if ($model->load(Yii::$app->request->post())) {
            if ($model->validate()) {
                // form inputs are valid, do something here
                $model->save(false);
                return $this->redirect(['person']);
            }
        }

        return $this->render('person', [
            'model' => $model,
        ]);
    }

    public function actionTale()
    {
        $model = new Tails();

        if ($model->load(Yii::$app->request->post())) {
            if ($model->validate()) {
                $model->save(false);
                // form inputs are valid, do something here
                return $this->redirect(['tale']);
            }
        }

        return $this->render('tail', [
            'model' => $model,
        ]);
    }



}

