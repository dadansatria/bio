<?php 
namespace app\components;

use Yii;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn as YiiActionColumn;

/**
* Class untuk meng-extend yiiaction column agar data-toggle tooltip secara default muncul
* Untuk mengaktifkan data-toggle perlu ditambahkan di layout untuk js-nya. 
* JS untuk menampilkan Tooltip :
* $tooltip = <<< 'SCRIPT'
*	$('body').tooltip({
*	    selector: '[data-toggle="tooltip"]'
*	});
*	SCRIPT;
* Simpan js di layout, lalu: $this->registerJs($tooltip);
*/

class ToggleActionColumn extends YiiActionColumn
{
	protected function initDefaultButtons()
    {
        if (!isset($this->buttons['view'])) {
            $this->buttons['view'] = function ($url, $model, $key) {
                $options = array_merge([
                    'title' => Yii::t('yii', 'View'),
                    'aria-label' => Yii::t('yii', 'View'),
                    'data-pjax' => '0',
                    'data-toggle' => 'tooltip',
                ], $this->buttonOptions);
                return Html::a('<span class="glyphicon glyphicon-eye-open"></span>', $url, $options);
            };
        }
        if (!isset($this->buttons['update'])) {
            $this->buttons['update'] = function ($url, $model, $key) {
                $options = array_merge([
                    'title' => Yii::t('yii', 'Update'),
                    'aria-label' => Yii::t('yii', 'Update'),
                    'data-pjax' => '0',
                    'data-toggle' => 'tooltip',
                ], $this->buttonOptions);
                return Html::a('<span class="glyphicon glyphicon-pencil"></span>', $url, $options);
            };
        }
        if (!isset($this->buttons['delete'])) {
            $this->buttons['delete'] = function ($url, $model, $key) {
                $options = array_merge([
                    'title' => Yii::t('yii', 'Delete'),
                    'aria-label' => Yii::t('yii', 'Delete'),
                    'data-confirm' => Yii::t('yii', 'Are you sure you want to delete this item?'),
                    'data-method' => 'post',
                    'data-pjax' => '0',
                    'data-toggle' => 'tooltip',
                ], $this->buttonOptions);
                return Html::a('<span class="glyphicon glyphicon-trash"></span>', $url, $options);
            };
        }
    }
}
?>