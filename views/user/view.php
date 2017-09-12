<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\User */

$this->title = "Detail User";
$this->params['breadcrumbs'][] = ['label' => 'User', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-view box box-primary">

    <div class="box-header">
        <h3 class="box-title">Detail User</h3>
    </div>

    <div class="box-body">

    <?= DetailView::widget([
        'model' => $model,
        'template' => '<tr><th width="180px" style="text-align:right">{label}</th><td>{value}</td></tr>',
        'attributes' => [
            [
                'attribute' => 'id',
                'format' => 'raw',
                'value' => $model->id,
            ],
            [
                'attribute' => 'role',
                'format' => 'raw',
                'value' => $model->role,
            ],
            [
                'attribute' => 'id_mahasiswa',
                'format' => 'raw',
                'value' => $model->id_mahasiswa,
            ],
            [
                'attribute' => 'username',
                'format' => 'raw',
                'value' => $model->username,
            ],
            [
                'attribute' => 'password',
                'format' => 'raw',
                'value' => $model->password,
            ],
        ],
    ]) ?>

    </div>

    <div class="box-footer">
        <?= Html::a('<i class="fa fa-pencil"></i> Sunting User', ['update', 'id' => $model->id], ['class' => 'btn btn-success btn-flat']) ?>
        <?= Html::a('<i class="fa fa-list"></i> Daftar User', ['index'], ['class' => 'btn btn-warning btn-flat']) ?>
    </div>

</div>
