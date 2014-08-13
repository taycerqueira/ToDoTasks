
<div class="container" style="width: 30%">

	<h2 style="text-align:center;">Login</h2>

	<div class="form">

		<?php

			/** @var TbActiveForm $form */
			$form = $this->beginWidget(
			    'booster.widgets.TbActiveForm',
			    array(
			        'id' => 'verticalForm',
			        'htmlOptions' => array('class' => 'well'), // for inset effect
			    )
			);
			 
			echo $form->textFieldGroup($model, 'email');
			echo $form->passwordFieldGroup($model, 'senha');
			$this->widget(
			    'booster.widgets.TbButton',
			    array(
			    	'buttonType' => 'submit', 
			    	'label' => 'Entrar',
			    	'context' => 'primary',
			    	'htmlOptions' => array('style'=>'width: 80px; margin-left: 38%;'),
			    )
			);
			 
			$this->endWidget();
			unset($form);

		?>	
	
	</div> <!-- form -->
</div>

