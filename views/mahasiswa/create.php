<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Mahasiswa */

$this->title = "Tambah Mahasiswa";
$this->params['breadcrumbs'][] = ['label' => 'Mahasiswas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mahasiswa-create">

    <?= $this->render('_form', [
        'model' => $model,
        'referrer'=> $referrer
    ]) ?>

</div>
