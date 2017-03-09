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

class ArticleController extends Controller
{
    
    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex($category)
    {
        $model = '';
        $url = 'article';
        $title = ' вселенной Дару';
        switch ($category) {
            case 'person':
                $model = Persons::find()
                    ->orderBy('id')
                    ->all();
                $url.='/person';
                $title = 'Персонажи'.$title;
                break;
            case 'fraction':
                $model = Fractions::find()
                    ->orderBy('id')
                    ->all();
                $url.='/fraction';
                $title = 'Фракции'.$title;
                break;
            case 'religion':
                $model = Religions::find()
                    ->orderBy('id')
                    ->all();
                $url.='/religion';
                $title = 'Религии'.$title;
                break;
            case 'location':
                $model = Locations::find()
                    ->orderBy('id')
                    ->all();
                $url.='/location';
                $title = 'Локации'.$title;
                break;
            case 'nation':
                $model = Nations::find()
                    ->orderBy('id')
                    ->all();
                $url.='/nation';
                $title = 'Национальности'.$title;
                break;
            case 'region':
                $model = Regions::find()
                    ->orderBy('id')
                    ->all();
                $url.='region';
                $title = 'Регионы'.$title;
                break;

            default:
                $this->redirect(['site/index']);
                break;
        }
        return $this->render('category', [
            'model' => $model,
            'url' => $url,
            'title' => $title,
        ]);
    }

    /**
     * Add price action.
     *
     * @return string
     */
    public function actionReligion($id = 1)
    {
        $model = Religions::findOne($id);

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
    public function actionFraction($id = 1)
    {
        $model = Fractions::findOne($id);

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
    public function actionLocation($id = 1)
    {
        $model = Locations::findOne($id);

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
    public function actionPerson($id = 1)
    {
        $model = Persons::findOne($id);

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
    /**
     * Update price action.
     *
     * @param $id
     * @return string
     */
    public function actionNation($id = 1)
    {
        $model = Nations::findOne($id);

        if ($model->load(Yii::$app->request->post())) {
            if ($model->validate()) {
                // form inputs are valid, do something here
                $model->save(false);
                return;
            }
        }

        return $this->render('nation', [
            'model' => $model,
        ]);
    }
    /**
     * Update price action.
     *
     * @param $id
     * @return string
     */
    public function actionRegion($id = 1)
    {
        $model = Regions::findOne($id);

        if ($model->load(Yii::$app->request->post())) {
            if ($model->validate()) {
                // form inputs are valid, do something here
                $model->save(false);
                return;
            }
        }

        return $this->render('region', [
            'model' => $model,
        ]);
    }

    public function actionTale($id = 2)
    {
        $model = Tales::findOne($id);

        $menu = Tales::find()
            ->select(['id', 'name', 'chapter'])
            ->where(['>', 'id', '1'])
            ->all();
        
        return $this->render('tale', [
            'model' => $model,
            'menu' => $menu,
        ]);       
    }


}

