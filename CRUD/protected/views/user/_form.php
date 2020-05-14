<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	'htmlOptions'=>array('enctype' => 'multipart/form-data'),
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="form-group row">
		<?php echo $form->labelEx($model,'first_name'); ?>
		<?php echo $form->textField($model,'first_name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'first_name'); ?>
	</div>

	<div class="form-group row">
		<?php echo $form->labelEx($model,'last_name'); ?>
		<?php echo $form->textField($model,'last_name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'last_name'); ?>
	</div>

	<div class="form-group row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>
<?php if($model->isNewRecord) { ?>
	<div class="form-group row">
		<?php echo $form->labelEx($model,'image'); ?>
		<?php echo $form->fileField($model,'image'); ?>
		<?php echo $form->error($model,'image'); ?>
	</div>

<?php } else { ?>

	<div class="form-group row">
		<?php echo('Current Image'); ?>
		<?php echo CHtml::image(Yii::app()->request->baseUrl.'/uploads/'.$model->image, 'image', array('class' => 'img-circle', 'style'=>'max-width: 50px')); ?>
		<?php echo $form->labelEx($model,'image'); ?>
		<?php echo $form->fileField($model,'image'); ?>
		<?php echo $form->error($model,'image'); ?>
	</div>
<?php } ?>

	<div class="form-group row">
		<?php echo $form->labelEx($model,'marks'); ?>
		<?php echo $form->textField($model,'marks'); ?>
		<?php echo $form->error($model,'marks'); ?>
	</div>

	<div class="">
		<?php $status = array( 1=>'Active', 0=>'Inactive');?>
		<?php echo $form->labelEx($model,'status'); ?>
		<?php $model->isNewRecord ? $model->status = 1: $model->status = $model->status ;  ?>
		<?php 
		echo $form->radioButtonList($model,'status',
                    $status,
					array(
						'labelOptions'=>array('style'=>'display:inline'),
						'separator' => "&nbsp;&nbsp;&nbsp;"
					)
			);
		?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row">
	<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-primary btn-lg')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->