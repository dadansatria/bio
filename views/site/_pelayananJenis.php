<?php
	use app\models\Pelayanan;
	use app\models\PelayananJenis;
	use yii\helpers\Url;
?>

<style type="text/css">
	.info-box {
		border: 1px solid #ccc;
		background-color: #efefef;
	}
</style>

<div class="row">
	<div class="col-md-4 col-sm-6 col-xs-12">
		<a href="<?= Url::to(['site/pengajuan-pelayanan','id_pelayanan_jenis' => PelayananJenis::AULA_INTERNAL]); ?>">
			<div class="info-box">
				<span class="info-box-icon bg-aqua"><i class="fa fa-building"></i></span>

				<div class="info-box-content">
					<span style="text-transform: uppercase; font-size: 16px; font-weight: bold" >Penggunaan Aula, R. Rapat, R. Kelas, R. Diskusi</span>
				</div>
				<!-- /.info-box-content -->
			</div>
		</a>
		<!-- /.info-box -->
	</div>
	<!-- /.col -->

	<?php /*
	<div class="col-md-4 col-sm-6 col-xs-12">
		<a href="<?= Url::to(['site/pengajuan-pelayanan','id_pelayanan_jenis' => PelayananJenis::AULA_EKSTERNAL]); ?>">
			<div class="info-box">
				<span class="info-box-icon bg-green"><i class="fa fa-building"></i></span>

				<div class="info-box-content">
					<span style="text-transform: uppercase; font-size: 16px; font-weight: bold" >Penggunaan Aula, R. Rapat, R. Kelas, R. Diskusi (Eksternal)</span>
				</div>			
			<!-- /.info-box-content -->
			</div>
		</a>
		<!-- /.info-box -->
	</div>	

	<?php */ ?>
	<!-- /.col -->

	<!-- /.col -->
	<div class="col-md-4 col-sm-6 col-xs-12">
		<a href="<?= Url::to(['site/pengajuan-pelayanan','id_pelayanan_jenis' => PelayananJenis::PERAWATAN_KENDARAAN]); ?>">
			<div class="info-box">
				<span class="info-box-icon bg-blue"><i class="fa fa-car"></i></span>

				<div class="info-box-content">
					<span style="text-transform: uppercase; font-size: 16px; font-weight: bold" >Perawatan Kendaraan Dinas Operasional</span>
				</div>			
				<!-- /.info-box-content -->
			</div>
		</a>
		<!-- /.info-box -->
	</div>
	<div class="col-md-4 col-sm-6 col-xs-12">
		<a href="<?= Url::to(['site/pengajuan-pelayanan','id_pelayanan_jenis' => PelayananJenis::ASRAMA_INTERNAL]); ?>">
			<div class="info-box">
				<span class="info-box-icon bg-aqua"><i class="fa fa-home"></i></span>

				<div class="info-box-content">
					<span style="text-transform: uppercase; font-size: 16px; font-weight: bold" >Penggunaan Asrama</span>
				</div>
				<!-- /.info-box-content -->
			</div>
		</a>
		<!-- /.info-box -->
	</div>
	<!-- /.col -->
	<?php /*
	<div class="col-md-4 col-sm-6 col-xs-12">
		<a href="<?= Url::to(['site/pengajuan-pelayanan','id_pelayanan_jenis' => PelayananJenis::ASRAMA_EKSTERNAL]); ?>">
			<div class="info-box">
				<span class="info-box-icon bg-green"><i class="fa fa-home"></i></span>

				<div class="info-box-content">
					<span style="text-transform: uppercase; font-size: 16px; font-weight: bold" >Penggunaan Asrama (Eksternal)</span>
				</div>			
				<!-- /.info-box-content -->
			</div>
		</a>
		<!-- /.info-box -->
	</div>

	<?php */ ?>

	<!-- /.col -->

	<div class="col-md-4 col-sm-6 col-xs-12">
		<a href="<?= Url::to(['site/pengajuan-pelayanan','id_pelayanan_jenis' => PelayananJenis::VIDEO_KONFERENSI]); ?>">
			<div class="info-box">
				<span class="info-box-icon bg-maroon"><i class="fa fa-users"></i></span>

				<div class="info-box-content">
					<span style="text-transform: uppercase; font-size: 16px; font-weight: bold" >Penggunaan Video Conference</span>
				</div>			
				<!-- /.info-box-content -->
			</div>
		</a>
		<!-- /.info-box -->
	</div>
	<!-- /.col -->
	<div class="col-md-4 col-sm-6 col-xs-12">
		<a href="<?= Url::to(['site/pengajuan-pelayanan','id_pelayanan_jenis' => PelayananJenis::PERALATAN_KERJA]); ?>">
			<div class="info-box">
				<span class="info-box-icon bg-red"><i class="fa fa-wrench"></i></span>

				<div class="info-box-content">
					<span style="text-transform: uppercase; font-size: 16px; font-weight: bold" >Perbaikan/Perawatan Peralatan Kerja</span>
				</div>			
				<!-- /.info-box-content -->
			</div>
		</a>
		<!-- /.info-box -->
	</div>

	<div class="col-md-4 col-sm-6 col-xs-12">
		<a href="<?= Url::to(['site/pengajuan-pelayanan','id_pelayanan_jenis' => PelayananJenis::PELAYANAN_LAIN_LAIN]); ?>">
			<div class="info-box">
				<span class="info-box-icon bg-orange"><i class="fa fa-outdent"></i></span>

				<div class="info-box-content">
					<span style="text-transform: uppercase; font-size: 16px; font-weight: bold" >Pelayanan Umum / Lain-Lain</span>
				</div>			
				<!-- /.info-box-content -->
			</div>
		</a>
		<!-- /.info-box -->
	</div>	
</div>