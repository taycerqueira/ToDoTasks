<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Entrar';

?>

<div class="container" style="width: 30%">
<div class="form">

<h2 style="text-align:center;">Login</h2>

	<?php 
	
		$form=$this->beginWidget(
			'booster.widgets.TbActiveForm', 
			array(
				'id'=>'usuario-login-form',
				'htmlOptions' => array('class' => 'well'), // for inset effect
				'enableAjaxValidation'=>false,
			)
		); 
	?>

	<p class="note">Compos com <span class="required">*</span> sao obrigatorios.</p>

	<?php 
		echo $form->errorSummary($model); 
		echo $form->textFieldGroup($model, 'email', array('size'=>60,'maxlength'=>70)); 
		echo $form->passwordFieldGroup($model, 'senha', array('size'=>10,'maxlength'=>10)); 
		echo $form->checkboxGroup($model, 'rememberMe');
	
		$this->widget(
			'booster.widgets.TbButton',
			 array(
				    'buttonType' => 'submit', 
				    'label' => 'Login',
				    'context' => 'primary',
				    'htmlOptions' => array('style'=>'width: 100px; margin-left: 35%;'),
				  )
			 );
	
		$this->endWidget();
		unset($form);
	?>

</div><!-- form -->
</div>