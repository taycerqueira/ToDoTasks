<?php 

	/** @var TbActiveForm $form */
	$form = $this->beginWidget(
	    'booster.widgets.TbActiveForm',
	    array(
	    	'id'=>'usuario-form',
	        //'id' => 'verticalForm',
	        'htmlOptions' => array('class' => 'well'), // for inset effect
	        'enableAjaxValidation'=>false,
	    )
	);
	 
	echo $form->textFieldGroup($model, 'nome', array('size'=>60,'maxlength'=>100));
	echo $form->textFieldGroup($model, 'email', array('size'=>60,'maxlength'=>70));
	echo $form->passwordFieldGroup($model, 'senha', array('size'=>10,'maxlength'=>10));
	$this->widget(
		'booster.widgets.TbButton',
		 array(
			    'buttonType' => 'submit', 
			    'label' => 'Cadastrar',
			    'context' => 'primary',
			    'htmlOptions' => array('style'=>'width: 100px; margin-left: 35%;'),
			  )
		 );
	 
	$this->endWidget();
	unset($form); 
	
?>
