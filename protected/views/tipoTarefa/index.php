<?php
/* @var $this TipoTarefaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tipo Tarefas',
);

$this->menu=array(
	array('label'=>'Create TipoTarefa', 'url'=>array('create')),
	array('label'=>'Manage TipoTarefa', 'url'=>array('admin')),
);
?>

<h1>Tipo Tarefas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
