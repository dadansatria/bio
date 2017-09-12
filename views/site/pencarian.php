<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use app\models\PelayananStatus;
use app\models\PelayananJenisTahapan;
use app\components\Helper;


$this->title = "Pengajuan Pelayanan Dengan Kode Pelacakan : ". $model->kode_pelacakan;
?>


<div class="pelayanan-view box box-info">
    <div class="box-header">
        <h3 class="box-title"><i class="fa fa-comment-o"></i> Detail Pelayanan : <b><?= $model->kode_pelacakan; ?></b></h3>
    </div>

    <div class="box-body">

    <?= DetailView::widget([
        'model' => $model,
        'template' => '<tr><th width="180px" style="text-align:right">{label}</th><td>{value}</td></tr>',
        'attributes' => [
            [
                'attribute' => 'id_pelayanan_jenis',
                'format' => 'raw',
                'value' => $model->pelayananJenis->nama,
            ],
            [
                'attribute' => 'id_pelayanan_status',
                'format' => 'raw',
                'value' => '<label class="'.$model->getClassLabel().'" style="font-size: 13px">'.$model->pelayananStatus->nama.'</label>',
            ],
            [
                'attribute' => 'kode_pelacakan',
                'format' => 'raw',
                'value' => $model->kode_pelacakan,
            ],
        ],
    ]) ?>
    </div>
</div>

<?php if($model->id_pelayanan_status == PelayananStatus::SELESAI){ ?>

<?= Html::beginForm(['site/set-rating', 'kode_pelacakan' => $model->kode_pelacakan], 'post') ?>
    <div class="pelayanan-view box box-warning">
        <div class="box-header with-border">
            <h3 class="box-title"><i class="fa fa-star-o"></i> Rating Pelayanan</h3>
        </div>

        <div class="box-body">
            <?= $model->getRating(); ?>
        </div>

        <?php if(!$model->isTelahDirating()){ ?>
        <div class="box-footer with-border">
            <?= Html::submitButton('<i class="fa fa-check"></i> Beri Rating', ['encodeLabels' => true, 'class' => 'btn btn-success btn-flat']) ?>
        </div>
        <?php } ?>    
    </div>
<?= Html::endForm() ?>

<?= Html::beginForm(['site/set-komentar', 'kode_pelacakan' => $model->kode_pelacakan], 'post') ?>
    <div class="pelayanan-view box box-info">
        <div class="box-header with-border">
            <h3 class="box-title"><i class="fa fa-comments-o"></i> Komentar</h3>
        </div>

        <div class="box-body">
            <div class="row">
                <div class="col-sm-7">
                    <?= $model->getKomentar(); ?>
                </div>
            </div>
        </div>

        <?php if(!$model->isTelahDikomentar()){ ?>
        <div class="box-footer with-border">
            <?= Html::submitButton('<i class="fa fa-check"></i> Tambah Komentar', ['encodeLabels' => true, 'class' => 'btn btn-success btn-flat']) ?>
        </div>
        <?php } ?>

    </div>
<?= Html::endForm() ?>

<?php } ?>


<div class="pelayanan-view box box-info">
    <div class="box-header">
        <h3 class="box-title"><i class="fa fa-user-o"></i> Detail Pemohon</h3>
    </div>
    <div class="box-body">

    <?= DetailView::widget([
        'model' => $model,
        'template' => '<tr><th width="180px" style="text-align:right">{label}</th><td>{value}</td></tr>',
        'attributes' => [
            [
                'attribute' => 'nama_pemohon',
                'format' => 'raw',
                'value' => $model->nama_pemohon,
            ],
            [
                'attribute' => 'unit_kerja_pemohon',
                'format' => 'raw',
                'value' => $model->unit_kerja_pemohon,
            ],
            [
                'attribute' => 'instansi_pemohon',
                'format' => 'raw',
                'value' => $model->instansi_pemohon,
            ],
            [
                'attribute' => 'alamat_pemohon',
                'format' => 'raw',
                'value' => $model->alamat_pemohon,
            ],
            [
                'attribute' => 'telepon_pemohon',
                'format' => 'raw',
                'value' => $model->telepon_pemohon,
            ],
            [
                'attribute' => 'email_pemohon',
                'format' => 'raw',
                'value' => $model->email_pemohon,
            ],
        ],
    ]) ?>
    </div>
</div>
<div class="pelayanan-view box box-info">
    <div class="box-header">
        <h3 class="box-title"><i class="fa fa-list"></i> Detail Permohonan</h3>
    </div>
    <div class="box-body">

    <?= DetailView::widget([
        'model' => $model,
        'template' => '<tr><th width="180px" style="text-align:right">{label}</th><td>{value}</td></tr>',
        'attributes' => [
            [
                'attribute' => 'berkas_permohonan',
                'format' => 'raw',
                'value' => Html::a("<i class='fa fa-download'></i> Unduh Berkas disini",['pelayanan/get-berkas','id'=>$model->id],['class' => 'btn btn-success btn-flat']),
            ],
            [
                'attribute' => 'tanggal_permohonan',
                'format' => 'raw',
                'value' => Helper::getTanggal($model->tanggal_permohonan),
            ],
            [
                'attribute' => 'tanggal_mulai_proses',
                'format' => 'raw',
                'value' => Helper::getTanggal($model->tanggal_mulai_proses),
            ],
            [
                'attribute' => 'tanggal_selesai_proses',
                'format' => 'raw',
                'value' => Helper::getTanggal($model->tanggal_selesai_proses),
            ],
            [
                'attribute' => 'keterangan',
                'format' => 'raw',
                'value' => $model->keterangan,
            ],
        ],
    ]) ?>

    </div>
</div>

<?php if ($model->id_pelayanan_status == PelayananStatus::DITOLAK): ?>
    <div class="alert alert-warning"><i class="fa fa-warning"></i> Pelayanan Ini telah ditolak !</div>

    <div class="box box-danger">
        <div class="box-header with-border">
            <h3 class="box-title"><i class="fa fa-warning"></i> Alasan Ditolak</h3>
        </div>
        <div class="box-body">
            <?= $model->alasan_ditolak; ?>
        </div>
    </div>
<?php endif ?>

<div class="row">
    <div class="col-sm-offset-1 col-sm-10">

        <ul class="timeline">

            <!-- timeline time label -->
            <li class="time-label">
                <span class="bg-maroon">
                    <i class="fa fa-random"></i> Runtunan Tahapan Pelayanan
                </span>
            </li>
            <!-- /.timeline-label -->

                <?php foreach ($model->pelayananJenisTahapans as $data): ?>
                <li>
                    <!-- timeline icon -->
                    <i data-widget="collapse" data-placement="left" data-toggle="tooltip" title="<?= $data->getTitleSelesai($model->id); ?>" class="fa bg-blue" style="font-weight: bold "><?= $data->urutan; ?></i>
                    <?= $data->getChecklist($model->id); ?>


                    <div data-widget="collapse" data-toggle="tooltip" data-placement="right" title="<?= $data->getTitleSelesai($model->id); ?>" class="timeline-item <?= $data->getBgSelesai($model->id); ?> ">
                        <span class="time" <?= $data->getColorSelesai($model->id); ?>><i class="fa fa-clock-o"></i> <?= $data->waktu; ?></span>

                        <h3 class="timeline-header"><a <?= $data->getColorSelesai($model->id); ?> >Tahapan <?= $data->urutan; ?></a></h3>

                        <div class="timeline-body">
                            <?= $data->kegiatan; ?>
                        </div>
                    </div>
                </li>

                <?php endforeach ?>
        </ul>
    </div>
</div>
