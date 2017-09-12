<?php
use yii\helpers\Html;
use yii\helpers\Url;

/* @var $this \yii\web\View */
/* @var $content string */
?>

	<header class="main-header">
	<nav class="navbar navbar-static-top">
		<div class="container">
		<div class="navbar-header">
			<a href="index.php" class="navbar-brand">
				<div class="row">
					<div class="responsive">
						<div class="col-xs-1">
							<?= Html::img('@web/images/makarti.png', ['style' => 'width: 40px; margin-top: -5px']); ?>
							<div>&nbsp;</div>
						</div>
					</div>
				</div>
			</a>
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
			<i class="fa fa-bars"></i>
			</button>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse pull-right" id="navbar-collapse">
			<ul class="nav navbar-nav">
			<li><a href="<?= Url::to(['site/index']); ?>"> <i class="fa fa-home"></i> Home </a></li>
			<li><a href="<?= Url::to(['site/login']); ?>"> <i class="fa fa-info-circle"></i> Login</a></li>

			<?= Html::endForm() ?>
		</div>

		<!-- /.navbar-custom-menu -->
		</div>
		<!-- /.container-fluid -->
	</nav>
	</header>
