<?php
/* @var $this TarefaController */
/* @var $model Tarefa */

$this->breadcrumbs=array(
	'Tarefas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Tarefa', 'url'=>array('index')),
	array('label'=>'Create Tarefa', 'url'=>array('create')),
	array('label'=>'View Tarefa', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Tarefa', 'url'=>array('admin')),
);
?>

<h1>Update Tarefa <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>