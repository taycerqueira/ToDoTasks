<?php
/* @var $this TarefaController */
/* @var $model Tarefa */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'titulo'); ?>
		<?php echo $form->textField($model,'titulo',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'descricao'); ?>
		<?php echo $form->textField($model,'descricao',array('size'=>60,'maxlength'=>300)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dataCriacao'); ?>
		<?php echo $form->textField($model,'dataCriacao'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dataConclusao'); ?>
		<?php echo $form->textField($model,'dataConclusao'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'isPublic'); ?>
		<?php echo $form->textField($model,'isPublic'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'criadorId'); ?>
		<?php echo $form->textField($model,'criadorId'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tipoTarefaId'); ?>
		<?php echo $form->textField($model,'tipoTarefaId'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->