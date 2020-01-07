<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\helpers\Json;
use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot/assets/build';
    public $baseUrl = '@web/assets/build';

    public $entryPointsFile = '@webroot/assets/build/entrypoints.json';
    public $entryPoint = 'app';

    public $depends = [
//        'yii\web\YiiAsset',
    ];

    public function publish($am)
    {
        //todo mmo przeniesc do odzielnego pakietu. Obsluga bledow
        $path = \Yii::getAlias($this->entryPointsFile);
        if (is_readable($path)) {
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
}
