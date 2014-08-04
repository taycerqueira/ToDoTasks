<?php
/* @var $this TipoTarefaController */
/* @var $model TipoTarefa */

$this->breadcrumbs=array(
	'Tipo Tarefas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TipoTarefa', 'url'=>array('index')),
	array('label'=>'Create TipoTarefa', 'url'=>array('create')),
	array('label'=>'View TipoTarefa', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TipoTarefa', 'url'=>array('admin')),
);
?>

<h1>Update TipoTarefa <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>