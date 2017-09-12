<?php

use yii\helpers\Html;
use yii\helpers\Url; 



$this->title = "Halaman Dashboard";

?>

<div class="row">
	<div class="col-lg-3 col-xs-6">
		<!-- small box -->
		<div class="small-box bg-green">
			<div class="inner">
				<p>Jumlah Mahasiswa</p>

				<h3>90</h3>
			</div>
			<div class="icon">
				<i class="fa fa-check-square-o"></i>
			</div>
			<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
		</div>
	</div>

	<!-- ./col -->
	<div class="col-lg-3 col-xs-6">
		<!-- small box -->
		<div class="small-box bg-red">
			<div class="inner">
				<p>Jumlah Kampus</p>
				
				<h3>90</h3>
			</div>
			<div class="icon">
				<i class="fa fa-remove"></i>
			</div>
			<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
		</div>
	</div>

	<!-- ./col -->
	<div class="col-lg-3 col-xs-6">
		<!-- small box -->
		<div class="small-box bg-aqua">
			<div class="inner">
				<p>Jumlah Mahasiswa diatas 7 tahun</p>
				
				<h3>90</h3>
			</div>
			<div class="icon">
				<i class="fa fa-refresh"></i>
			</div>
			<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
		</div>
	</div>

	<!-- ./col -->
	<div class="col-lg-3 col-xs-6">
		<!-- small box -->
		<div class="small-box bg-purple">
			<div class="inner">
				<p>Mahasiswa Diatas 7 Tahun dan Terancam Drop Out</p>
				
				<h3>90</h3>
			</div>
			<div class="icon">
				<i class="fa fa-clock-o"></i>
			</div>
			<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-sm-6">
		<div class="box box-primary">
			<div class="box-header with-border">
				<h3 class="box-title">Grafik Mahasiswa per Kampus</h3>
			</div>
			<div class="box-body">
				<?= $this->render('_grafikMahasiswaPerKampus'); ?>
			</div>
		</div>
	</div>

	<div class="col-sm-6">
		<div class="box box-primary">
			<div class="box-header with-border">
				<h3 class="box-title">Grafik Mahasiswa per Jenis Kelamin</h3>
			</div>
			<div class="box-body">
				<?= $this->render('_grafikMahasiswaPerJenisKelamin'); ?>
			</div>
		</div>
	</div>
</div>

