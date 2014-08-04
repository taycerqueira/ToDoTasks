<?php
/* @var $this TarefaController */
/* @var $data Tarefa */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('titulo')); ?>:</b>
	<?php echo CHtml::encode($data->titulo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descricao')); ?>:</b>
	<?php echo CHtml::encode($data->descricao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dataCriacao')); ?>:</b>
	<?php echo CHtml::encode($data->dataCriacao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dataConclusao')); ?>:</b>
	<?php echo CHtml::encode($data->dataConclusao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('isPublic')); ?>:</b>
	<?php echo CHtml::encode($data->isPublic); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('criadorId')); ?>:</b>
	<?php echo CHtml::encode($data->criadorId); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('tipoTarefaId')); ?>:</b>
	<?php echo CHtml::encode($data->tipoTarefaId); ?>
	<br />

	*/ ?>

</div>