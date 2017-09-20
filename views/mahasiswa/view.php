<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Mahasiswa */

$this->title = "Detail Mahasiswa";
$this->params['breadcrumbs'][] = ['label' => 'Mahasiswa', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mahasiswa-view box box-primary">

    <div class="box-header">
        <h3 class="box-title">Detail Mahasiswa</h3>
    </div>

    <div class="box-body">

    <?= DetailView::widget([
        'model' => $model,
        'template' => '<tr><th width="180px" style="text-align:right">{label}</th><td>{value}</td></tr>',
        'attributes' => [
            [
                'attribute' => 'nama',
                'format' => 'raw',
                'value' => $model->nama,
            ],
            [
                'attribute' => 'alamat',
                'format' => 'raw',
                'value' => $model->alamat,
            ],
            [
                'attribute' => 'id_jenis_kelamin',
                'format' => 'raw',
                'value' => $model->id_jenis_kelamin,
            ],
            [
                'attribute' => 'tanggal_lahir',
                'format' => 'raw',
                'value' => $model->tanggal_lahir,
            ],
            [
                'attribute' => 'id_kampus',
                'format' => 'raw',
                'value' => $model->id_kampus,
            ],
            [
                'attribute' => 'no_kontak',
                'format' => 'raw',
                'value' => $model->no_kontak,
            ],
            [
                'attribute' => 'foto',
                'format' => 'raw',
                'value' => Html::img('@web/uploads/'.$model->foto,['width'=>'100px']),
            ],
        ],
    ]) ?>

    </div>

    <div class="box-footer">
        <?= Html::a('<i class="fa fa-pencil"></i> Sunting Mahasiswa', ['update', 'id' => $model->id], ['class' => 'btn btn-success btn-flat']) ?>
        <?= Html::a('<i class="fa fa-file"></i> Export PDF', ['view-export-pdf', 'id' => $model->id], ['target' => '_blank', 'class' => 'btn btn-success btn-flat']) ?>
        <?= Html::a('<i class="fa fa-list"></i> Daftar Mahasiswa', ['index'], ['class' => 'btn btn-warning btn-flat']) ?>
    </div>

</div>
