<?php

namespace app\controllers;

use app\models\sqlite\Persons;
use app\models\sqlite\Locations;
use app\models\sqlite\Religions;
use app\models\sqlite\Fractions;
use app\models\sqlite\Tales;
use app\models\sqlite\Nations;
use app\models\sqlite\Regions;
use app\models\sqlite\Tags;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;

class SearchController extends Controller
{
    
    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex($tag)
    {
        $model = Tags::find()
            ->where(['tag' => $tag])
            ->one();
        
        $url = 'article';

        if ($model) {
            switch ($model->category) {
                case 'person':
                    $url.='/person';
                    break;
                case 'fraction':
                    $url.='/fraction';
                    break;
                case 'religion':
                    $url.='/religion';
                    break;
                case 'location':
                    $url.='/location';
                    break;
                case 'nation':
                    $url.='/nation';
                    break;
                case 'region':
                    $url.='/region';
                    break;

                default:
                    $this->redirect(['site/index']);
                    break;
            }
            return $this->redirect([$url, 'id' => $model->ownid]);
        }
        echo "Данной статьи еще не существует";
    }


    public function actionTags()
    {
        $this->generateTags(Persons::className(), 'person');
        $this->generateTags(Fractions::className(), 'fraction');
        $this->generateTags(Religions::className(), 'religion');
        $this->generateTags(Locations::className(), 'location');
        $this->generateTags(Nations::className(), 'nation');
        $this->generateTags(Religions::className(), 'religion');
    }

    private function generateTags($className, $categoryName)
    {
        $querys = $className::find()
            ->select(['id', 'tag'])
            ->all();

        foreach ($querys as $query) {
            try {
                $model = new Tags();
                $model->ownid = $query->id;
                $model->tag = $query->tag;
                $model->category = $categoryName;
                $model->save(false);  
            } catch (\Exception $e) {
                echo "tag:  ".strtoupper($query->tag)." в категории ".strtoupper($categoryName)."  уже существует</br>";
            }
            
        }        
    }

}