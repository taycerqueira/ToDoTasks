<?php
/* @var $this TipoTarefaController */
/* @var $model TipoTarefa */

$this->breadcrumbs=array(
	'Tipo Tarefas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TipoTarefa', 'url'=>array('index')),
	array('label'=>'Manage TipoTarefa', 'url'=>array('admin')),
);
?>

<h1>Create TipoTarefa</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>