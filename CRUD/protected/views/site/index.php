<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<div class="jumbotron">
  <h2 class="display-4">Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h2>
  <p class="lead">This is a model task for DOT Operating Authority. This page is a simple introduction-style component for calling extra attention to featured content or information.</p>
  <hr class="my-4">
  <p>View all active records</p>
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="http://localhost/yii/crud/index.php?r=user" role="button">View</a>
  </p>
</div>

