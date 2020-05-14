<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->first_name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'View', 'url'=>array('index')),
	array('label'=>'Create User', 'url'=>array('create')),
	array('label'=>'User Details', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage', 'url'=>array('admin')),
);
?>

<h1>Update User <?php echo $model->first_name; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>