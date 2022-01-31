<?php

namespace app\commands;

use yii\console\Controller;
use yii\console\ExitCode;
use yii\db\Command;
use Yii;

class KmltopostgisController extends Controller
{
    public function actionIndex()
    {
		//Есть функция для преобразования части kml в postgis, но как преобразовать целый файл я не нашел
        Yii::$app->db->createCommand("INSERT INTO my_map (shape) VALUES (ST_GeomFromKML('<Polygon>            <outerBoundaryIs><LinearRing><coordinates>37.921256796,48.835712572,0 37.923831717,48.823847111,0 37.94417359,48.825711869,0 37.941512839,48.837407408,0 37.921256796,48.835712572,0</coordinates></LinearRing></outerBoundaryIs></Polygon>'));")
   ->execute();

        return ExitCode::OK;
    }
}
