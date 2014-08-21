<?php
/* @var $this TarefaController */
/* @var $model Tarefa */
/* @var $usuario Usuario */
?>

<div class="page-header">
	<h1>To Do Tasks</h1>
	<h3>Olá <?php echo $usuario->nome ?>, seja bem-vind@!</h3>
	<h4>Nova Tarefa</h4>
</div>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>