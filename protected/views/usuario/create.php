<?php
/* @var $this UsuarioController */
/* @var $model Usuario */

$this->pageTitle=Yii::app()->name . ' - Cadastrar';

?>

<div class="container" style="width: 30%">

	<h2 style="text-align:center;">Cadastro</h2>

	<div class="form">
		<?php $this->renderPartial('_form', array('model'=>$model)); ?>
	</div> 
	<!-- form -->

</div>	