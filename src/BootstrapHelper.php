<?php

namespace s4studio\ajaxcrud;

class BootstrapHelper
{

    /**
     * @return string
     */
    public static function getBsVersion()
    {
        return (int)substr(isset(\Yii::$app->params['bsVersion'])?\Yii::$app->params['bsVersion']:'3', 0, 1) > 3 ? '' : '3' ;
    }

}