<?php
/* @var $this TarefaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tarefas',
);

$this->menu=array(
	array('label'=>'Create Tarefa', 'url'=>array('create')),
	array('label'=>'Manage Tarefa', 'url'=>array('admin')),
);
?>

<h1>Tarefas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
