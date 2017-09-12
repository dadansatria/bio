<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Kampus */

$this->title = "Tambah Kampus";
$this->params['breadcrumbs'][] = ['label' => 'Kampuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kampus-create">

    <?= $this->render('_form', [
        'model' => $model,
        'referrer'=> $referrer
    ]) ?>

</div>
