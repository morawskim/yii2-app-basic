<?php

namespace app\assets;

use yii\helpers\Json;
use yii\web\AssetBundle;

class Yii2DebugAsset extends AssetBundle
{
    public $basePath = '@webroot/assets/build';
    public $baseUrl = '@web/assets/build';

    public $entryPointsFile = '@webroot/assets/build/entrypoints.json';
    public $entryPoint = 'yii2-debug';

    public function publish($am)
    {
        //todo mmo przeniesc do odzielnego pakietu. Obsluga bledow
        $path = \Yii::getAlias($this->entryPointsFile);
        $content = file_get_contents($path);
        $entryPoints = Json::decode($content);
        $data = $entryPoints['entrypoints'][$this->entryPoint];
        if (isset($data['js']) && is_array($data['js'])) {
            $this->js = $data['js'];
        }
        if (isset($data['css']) && is_array($data['css'])) {
            $this->css = $data['css'];
        }
        parent::publish($am);
    }
}
