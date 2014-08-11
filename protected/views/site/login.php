<div div class="container">

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
			    array('buttonType' => 'submit', 'label' => 'Entrar')
			);
			 
			$this->endWidget();
			unset($form);

		?>

	</div>
	<!-- form -->

</div>