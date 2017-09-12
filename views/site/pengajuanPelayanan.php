<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use kartik\select2\Select2;
use app\models\PelayananJenis;
use app\models\PelayananJenisTahapan;

/* @var $this yii\web\View */
/* @var $model app\models\Pelayanan */
/* @var $form yii\widgets\ActiveForm */
?>

<?php $this->title = "Form Pengajuan Pelayanan"; ?>

<?php $form = ActiveForm::begin([            
        'layout'=>'horizontal',
        'fieldConfig' => [
            'horizontalCssClasses' => [
                'label' => 'col-sm-2',
                'wrapper' => 'col-sm-10',
            ],
        ]
]); ?>

<div class="pelayanan-form box box-primary">

    <div class="box-header with-border">
        <h3 class="box-title"><i class="fa fa-pencil-square-o"></i> Isi Formulir dibawah ini dengan lengkap !</h3>
    </div>
	<div class="box-body">

        <?= $form->errorSummary($model); ?>


        <?= $form->field($model, 'nama_pemohon',[
                'horizontalCssClasses' => [
                    'label' => 'col-sm-2',
                    'wrapper' => 'col-sm-4',
                ],            
            ])->textInput(['maxlength' => true,'placeholder' => 'Nama Pemohon']) ?>

        <?= $form->field($model, 'unit_kerja_pemohon',[
                'horizontalCssClasses' => [
                    'label' => 'col-sm-2',
                    'wrapper' => 'col-sm-4',
                ],            
            ])->textInput(['maxlength' => true,'placeholder' => 'Unit Kerja Pemohon']) ?>

        <?= $form->field($model, 'instansi_pemohon',[
                'horizontalCssClasses' => [
                    'label' => 'col-sm-2',
                    'wrapper' => 'col-sm-4',
                ],            
            ])->textInput(['maxlength' => true,'placeholder' => 'Instansi Tempat Bekerja']) ?>

        <?= $form->field($model, 'alamat_pemohon', [
                'horizontalCssClasses' => [
                    'label' => 'col-sm-2',
                    'wrapper' => 'col-sm-5',
                ],                        
        ])->textarea(['rows' => 3]) ?>

        <?= $form->field($model, 'telepon_pemohon',[
                'horizontalCssClasses' => [
                    'label' => 'col-sm-2',
                    'wrapper' => 'col-sm-4',
                ],            
            ])->textInput(['maxlength' => true,'placeholder' => 'Nomor Telepon']) ?>

        <?= $form->field($model, 'email_pemohon',[
                'horizontalCssClasses' => [
                    'label' => 'col-sm-2',
                    'wrapper' => 'col-sm-4',
                ],            
            ])->textInput(['maxlength' => true,'placeholder' => 'Alamat Email Pemohon']) ?>

        <hr>

        <?= $form->field($model, 'berkas_permohonan')->fileInput() ?>

        <hr>

        <?= $form->field($model, 'keterangan', [
                'horizontalCssClasses' => [
                    'label' => 'col-sm-2',
                    'wrapper' => 'col-sm-5',
                ],                        
        ])->textarea(['rows' => 3]) ?>

        <hr>
        
        <?= $form->field($model, 'reCaptcha')->widget(
            \himiklab\yii2\recaptcha\ReCaptcha::className(),
            ['siteKey' => '6LcsmysUAAAAAA-no9ZigXCqF-769IlTYdjCDkBr']
        ); ?>

	</div>
    <div class="box-footer">
        <div class="col-sm-offset-2 col-sm-3">
            <?= Html::submitButton('<i class="fa fa-check"></i> Kirim Permohonan',['encodeLabels' => true, 'class' => 'btn btn-success btn-flat']) ?>
        </div>
    </div>

</div>

<?php ActiveForm::end(); ?>

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

            <!-- timeline item -->

                <?php foreach (PelayananJenisTahapan::findAllByJenis($id_pelayanan_jenis) as $data): ?>
                
                <li>
                    <!-- timeline icon -->
                    <i class="fa bg-green" style="font-weight: bold "><?= $data->urutan; ?></i>
                    <div class="timeline-item">
                        <span class="time"><i class="fa fa-clock-o"></i> <?= $data->waktu; ?></span>

                        <h3 class="timeline-header"><a>Tahap <?= $data->urutan; ?></a></h3>

                        <div class="timeline-body">
                            <?= $data->kegiatan; ?>
                        </div>
                    </div>
                </li>

                <?php endforeach ?>
        </ul>
    </div>
</div>