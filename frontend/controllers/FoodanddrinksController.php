<?php

namespace app\controllers;

use yii\web\Controller;
use yii\data\Pagination;
use app\models\Foodanddrinks;

class FoodanddrinksController extends Controller
{
    public function actionIndex()
    {
        $query = Foodanddrinks::find();

        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->count(),
        ]);

        $countries = $query->orderBy('name')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('index', [
            'foodanddrinks' => $foodanddrinks,
            'pagination' => $pagination,
        ]);
    }
}