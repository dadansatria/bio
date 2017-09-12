<?php

use app\assets\AppAsset;
use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */

dmstr\web\AdminLteAsset::register($this);
AppAsset::register($this);


$hide = "$('.hide-alert').animate({opacity: 1.0}, 3000).fadeOut('slow')";
$this->registerJs($hide, $this::POS_END, '');


?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title><?php echo Html::encode($this->title); ?></title>
    <meta name="author" content="Digital Data Studio">
    <meta name="robots" content="noodp,noydir"/>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <?php
      $baseUrl = Yii::$app->request->baseUrl;
      $resources = Yii::$app->request->baseUrl.'/resources';
    ?>
    <?php $this->head() ?>
  </head>
  <body class="login-page">
  <?php foreach (Yii::$app->session->getAllFlashes() as $key => $message) {
            echo '<div class="alert hide-alert alert-' . $key . '" style="border-radius:0px;margin-bottom:0px">' . $message . '</div>';
        } ?>
      <?php echo $content; ?>
  </div>
    <?php $this->endBody() ?>
  </body>
</html>
<?php $this->endPage() ?>
