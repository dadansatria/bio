<?php

	use yii\helpers\Html;

	$this->title = "Berkas Regulasi";
?>

<div class="box box-primary">
	<div class="box-header with-border">
		<h3 class="box-title">Daftar Berkas Regulasi</h3>
	</div>
	<div class="box-body">
		<table class="table table-bordered table-hover table-stripped">
			<tr>
				<th class="text-center" width="5%">No</th>
				<th class="text-center" width="90%">Judul Berkas</th>
				<th class="text-center" width="5%">&nbsp;</th>
			</tr>
			<tr>
				<td class="text-center">1</td>
				<td>Pedoman Pelayanan</td>
				<td><?= Html::a("<i class='fa fa-download'></i>",['get-berkas','berkas' => 'pedoman-pelayanan.pdf'], ['target' => '_blank', 'class' => 'btn btn-success btn-flat']); ?></td>
			</tr>
			<tr>
				<td class="text-center">2</td>
				<td>SOP Pelayanan Penggunaan Aula</td>
				<td><?= Html::a("<i class='fa fa-download'></i>",['get-berkas','berkas' => 'sop-pelayanan-penggunaan-aula.pdf'], ['target' => '_blank', 'class' => 'btn btn-success btn-flat']); ?></td>
			</tr>
			<tr>
				<td class="text-center">3</td>
				<td>SOP Pelayanan Penggunaan Kamar Asrama</td>
				<td><?= Html::a("<i class='fa fa-download'></i>",['get-berkas','berkas' => 'sop-pelayanan-penggunaan-kamar-asrama.pdf'], ['target' => '_blank', 'class' => 'btn btn-success btn-flat']); ?></td>
			</tr>
			<tr>
				<td class="text-center">4</td>
				<td>SOP Pelayanan Penggunaan Video Conference</td>
				<td><?= Html::a("<i class='fa fa-download'></i>",['get-berkas','berkas' => 'sop-pelayanan-penggunaan-video-conference.pdf'], ['target' => '_blank', 'class' => 'btn btn-success btn-flat']); ?></td>
			</tr>
			<tr>
				<td class="text-center">5</td>
				<td>SOP Pelayanan Perawatan Kendaraan Dinas OPS</td>
				<td><?= Html::a("<i class='fa fa-download'></i>",['get-berkas','berkas' => 'sop-pelayanan-perawatan-kendaraan-dinas-ops.pdf'], ['target' => '_blank', 'class' => 'btn btn-success btn-flat']); ?></td>
			</tr>
			<tr>
				<td class="text-center">6</td>
				<td>SOP Pelayanan Perebaikan Perawatan Peralatan</td>
				<td><?= Html::a("<i class='fa fa-download'></i>",['get-berkas','berkas' => 'sop-pelayanan-perbaikan-perawatan-peralatan-ktr.pdf'], ['target' => '_blank', 'class' => 'btn btn-success btn-flat']); ?></td>
			</tr>			
		</table>
	</div>
</div>