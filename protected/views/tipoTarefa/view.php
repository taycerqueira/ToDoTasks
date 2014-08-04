<?php
/* @var $this TipoTarefaController */
/* @var $model TipoTarefa */

$this->breadcrumbs=array(
	'Tipo Tarefas'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List TipoTarefa', 'url'=>array('index')),
	array('label'=>'Create TipoTarefa', 'url'=>array('create')),
	array('label'=>'Update TipoTarefa', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete TipoTarefa', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TipoTarefa', 'url'=>array('admin')),
);
?>

<h1>View TipoTarefa #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nome',
		'criadorId',
	),
)); ?>
