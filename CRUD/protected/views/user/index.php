<?php
/* @var $this UserController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Users',
);
?>
<div class= "card">
	<div class = "card-body">
	<?php
		$this->menu=array(
		array('label'=>'Create User', 'url'=>array('create')),
		array('label'=>'Manage', 'url'=>array('admin')),
		);
	?>
	</div>
</div>


<h1>Users</h1>

<div class= "card">
	<div class = "card-body">
	<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
	)); ?>
	</div>
</div>

