<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Kampus */

$this->title = "Detail Kampus";
$this->params['breadcrumbs'][] = ['label' => 'Kampus', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kampus-view box box-primary">

    <div class="box-header">
        <h3 class="box-title">Detail Kampus</h3>
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
        ],
    ]) ?>

    </div>

    <div class="box-footer">
        <?= Html::a('<i class="fa fa-pencil"></i> Sunting Kampus', ['update', 'id' => $model->id], ['class' => 'btn btn-success btn-flat']) ?>
        <?= Html::a('<i class="fa fa-list"></i> Daftar Kampus', ['index'], ['class' => 'btn btn-warning btn-flat']) ?>
    </div>

</div>

<div class="box box-info">
    <div class="box-header with-border">
        <h3 class="box-title">Daftar Mahasiswa</h3>
    </div>
    <div class="box-header with-border">
        <?= Html::a('<i class="fa fa-plus"></i> Tambah Mahasiswa', ['mahasiswa/create', 'id_kampus' => $model->id], ['class' => 'btn btn-success btn-flat']) ?>
    </div>
    <div class="box-body">
        <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th class="text-center">No</th>
                <th class="text-center">Nama</th>
                <th class="text-center">Jenis Kelamin</th>
                <th class="text-center">No Kontak</th>
                <th class="text-center">Aksi</th>
            </tr>
        </thead>
            <?php $i=1; foreach ($model->findAllMahasiswa() as $data): ?>    
            <tr>
                <td class="text-center"><?= $i; ?></td>
                <td><?= $data->nama; ?></td>
                <td><?= $data->jenisKelamin->nama; ?></td>
                <td><?= $data->no_kontak; ?></td>
                <td class="text-center">
                    <?= Html::a('<i class="glyphicon glyphicon-eye-open"></i>',['mahasiswa/view','id'=>$data->id]); ?>
                    <?= Html::a('<i class="glyphicon glyphicon-pencil"></i>',['mahasiswa/update','id'=>$data->id]); ?>
                    <?= Html::a('<i class="glyphicon glyphicon-trash"></i>',['mahasiswa/delete','id'=>$data->id],['data-method'=>'post']); ?>
                </td>
            </tr>
            <?php $i++; endforeach ?>
        </table>
    </div>
</div>
