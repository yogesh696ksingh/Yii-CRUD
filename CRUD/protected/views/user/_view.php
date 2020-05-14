<?php
/* @var $this UserController */
/* @var $data User */
?>

<div class="view">
	<?php echo CHtml::image(Yii::app()->request->baseUrl.'/uploads/'.$data->image, 'image', array('class' => 'img-circle pull-right', 'style'=>'max-width: 50px')); ?>
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('first_name')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->first_name), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('last_name')); ?>:</b>
	<?php echo CHtml::encode($data->last_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />
	

	<b><?php echo CHtml::encode($data->getAttributeLabel('marks')); ?>:</b>
	<?php echo CHtml::encode($data->marks); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status ? 'Active' : 'Inactive'); ?>
	<br />


</div>