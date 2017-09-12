<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Kampus */

$this->title = "Sunting Kampus";
$this->params['breadcrumbs'][] = ['label' => 'Kampuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = 'Sunting';
?>
<div class="kampus-update">

    <?= $this->render('_form', [
        'model' => $model,
        'referrer'=> $referrer
    ]) ?>

</div>
