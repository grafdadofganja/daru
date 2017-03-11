<?php

namespace app\controllers;

use app\models\sqlite\Persons;
use app\models\sqlite\Locations;
use app\models\sqlite\Religions;
use app\models\sqlite\Fractions;
use app\models\sqlite\Tales;
use app\models\sqlite\Nations;
use app\models\sqlite\Regions;
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
        $model = new Tales();

        if ($model->load(Yii::$app->request->post())) {
            if ($model->validate()) {
                $model->save(false);
                // form inputs are valid, do something here
                return $this->redirect(['tale']);
            }
        }

        return $this->render('tale', [
            'model' => $model,
        ]);
    }

    public function actionNation()
    {
        $model = new Nations();

        if ($model->load(Yii::$app->request->post())) {
            if ($model->validate()) {
                // form inputs are valid, do something here
                $model->save(false);
                return $this->redirect(['nation']);
            }
        }

        return $this->render('nation', [
            'model' => $model,
        ]);
    }

    public function actionRegion()
    {
        $model = new Regions();

        if ($model->load(Yii::$app->request->post())) {
            if ($model->validate()) {
                // form inputs are valid, do something here
                $model->save(false);
                return $this->redirect(['region']);
            }
        }

        return $this->render('region', [
            'model' => $model,
        ]);
    }
    /// CHANGE 

    /**
     * Add price action.
     *
     * @return string
     */
    public function actionChangeReligion($id)
    {
        $model = Religions::findOne($id);

        if ($model->load(Yii::$app->request->post())) {
            if ($model->validate()) {
                // form inputs are valid, do something here
                $model->save(false);
                return $this->redirect(['article/religion', 'id'=>$id]);
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
    public function actionChangeFraction($id)
    {
        $model = Fractions::findOne($id);

        if ($model->load(Yii::$app->request->post())) {
            if ($model->validate()) {
                // form inputs are valid, do something here
                $model->save(false);
                return $this->redirect(['article/fraction', 'id'=>$id]);
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
    public function actionChangeLocation($id)
    {
        $model = Locations::findOne($id);

        if ($model->load(Yii::$app->request->post())) {
            if ($model->validate()) {
                // form inputs are valid, do something here
                $model->save(false);
                return $this->redirect(['article/location', 'id'=>$id]);
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
    public function actionChangePerson($id)
    {
        $model = Persons::findOne($id);

        if ($model->load(Yii::$app->request->post())) {
            if ($model->validate()) {
                // form inputs are valid, do something here
                $model->save(false);
                return $this->redirect(['article/person', 'id'=>$id]);
            }
        }

        return $this->render('person', [
            'model' => $model,
        ]);
    }

    public function actionChangeTale($id)
    {
        $model = Tales::findOne($id);

        if ($model->load(Yii::$app->request->post())) {
            if ($model->validate()) {
                $model->save(false);
                // form inputs are valid, do something here
                return $this->redirect(['article/tale', 'id'=>$id]);
            }
        }

        return $this->render('tale', [
            'model' => $model,
        ]);
    }


    /**
     * Update price action.
     *
     * @param $id
     * @return string
     */
    public function actionChangeNation($id)
    {
        $model = Nations::findOne($id);

        if ($model->load(Yii::$app->request->post())) {
            if ($model->validate()) {
                // form inputs are valid, do something here
                $model->save(false);
                return $this->redirect(['article/nation', 'id'=>$id]);
            }
        }

        return $this->render('nation', [
            'model' => $model,
        ]);
    }

    public function actionChangeRegion($id)
    {
        $model = Regions::findOne($id);

        if ($model->load(Yii::$app->request->post())) {
            if ($model->validate()) {
                // form inputs are valid, do something here
                $model->save(false);
                return $this->redirect(['article/region', 'id'=>$id]);
            }
        }

        return $this->render('region', [
            'model' => $model,
        ]);
    }
}

