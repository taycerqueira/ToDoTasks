<?php
/* @var $this TarefaController */
/* @var $model Tarefa */

$this->breadcrumbs=array(
	'Tarefas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Tarefa', 'url'=>array('index')),
	array('label'=>'Manage Tarefa', 'url'=>array('admin')),
);
?>

<h1>Create Tarefa</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>