<?php

namespace s4studio\ajaxcrud;

use yii\web\AssetBundle;

/**
 * @author John Martin <john.itvn@gmail.com>
 * @since 1.0
 */
class CrudAsset extends AssetBundle
{
    public $sourcePath = '@ajaxcrud/assets';

    public $css = [
        'ajaxcrud.css'
    ];

    public $depends = [
        'yii\web\YiiAsset',
    ];

    public function init()
    {
        // In dev mode use non-minified javascripts

        $bsVersion = (int)BootstrapHelper::getBsVersion();
        $bsVersion = $bsVersion > 3 ? $bsVersion : '';
        $this->depends[] = 'yii\bootstrap'.$bsVersion.'\BootstrapAsset';
        $this->depends[] = 'yii\bootstrap'.$bsVersion.'\BootstrapPluginAsset';
        $this->depends[] = 'kartik\grid\GridViewAsset';

        $this->js = YII_DEBUG ? [
            'ModalRemote.js',
            'ajaxcrud.js',
        ] : [
            'ModalRemote.min.js',
            'ajaxcrud.min.js',
        ];

        parent::init();
    }
}
