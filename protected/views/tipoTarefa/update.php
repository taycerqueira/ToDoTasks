<?php

/* @var $this TipoTarefaController */
/* @var $model TipoTarefa */

?>

<div class="container" style="width: 37%; margin-left: 60px;">

	<div class="page-header">
		<h1>To Do Tasks</h1>
	</div>
	
	<div class="panel panel-primary">
	
		<div class="panel-heading">
			Editar Tipo de Tarefa
		</div>
	
		<div class="panel-body" style="width: 400px; margin-left: 30px; margin-top: 20px">

			<?php 
			
				/** @var TbActiveForm $form */
			
				$form = $this->beginWidget(
					'booster.widgets.TbActiveForm',
					array(
						'id' => 'verticalForm',
						'type' => 'vertical',
					)
				); 
			
				echo $form->textFieldGroup(
						$model, 'nome',
						array(
								'wrapperHtmlOptions' => array(
										'class' => 'col-sm-5',
								),
						)
				);
				
				
			?>
			
		<div class="form-actions">
			
			<?php 
					$this->widget(
						'booster.widgets.TbButton',
						array(
							'buttonType' => 'submit',
							'context' => 'primary',
							'label' => 'Salvar'
						)
					); 

					$this->endWidget();
			?>

		</div>
	</div>		
</div>