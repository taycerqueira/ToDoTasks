<?php
/* @var $this TarefaController */
/* @var $model Tarefa */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tarefa-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'titulo'); ?>
		<?php echo $form->textField($model,'titulo',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'titulo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descricao'); ?>
		<?php echo $form->textField($model,'descricao',array('size'=>60,'maxlength'=>300)); ?>
		<?php echo $form->error($model,'descricao'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dataCriacao'); ?>
		<?php echo $form->textField($model,'dataCriacao'); ?>
		<?php echo $form->error($model,'dataCriacao'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dataConclusao'); ?>
		<?php echo $form->textField($model,'dataConclusao'); ?>
		<?php echo $form->error($model,'dataConclusao'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'isPublic'); ?>
		<?php echo $form->textField($model,'isPublic'); ?>
		<?php echo $form->error($model,'isPublic'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'criadorId'); ?>
		<?php echo $form->textField($model,'criadorId'); ?>
		<?php echo $form->error($model,'criadorId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipoTarefaId'); ?>
		<?php echo $form->textField($model,'tipoTarefaId'); ?>
		<?php echo $form->error($model,'tipoTarefaId'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->