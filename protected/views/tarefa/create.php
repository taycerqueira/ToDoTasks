<?php

/* @var $this TarefaController */
/* @var $model Tarefa */
/* @var $idusuario Integer */

$usuario = Usuario::model()->findByPk($idusuario);

?>

<div class="container" style="width: 50%; margin-left: 60px;">

	<div class="page-header">
		<h1>To Do Tasks</h1>
	</div>

	<div class="panel panel-primary">
	
		<div class="panel-heading">
			Nova Tarefa
		</div>
		
		<div class="panel-body" style="width: 500px; margin-left: 30px; margin-top: 20px">
		
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
						$model, 'titulo',
						array(
								'wrapperHtmlOptions' => array(
										'class' => 'col-sm-5',
								),
						)
				);
			
				echo $form->textAreaGroup(
						$model,
						'descricao',
						array(
								'wrapperHtmlOptions' => array(
										'class' => 'col-sm-5',
								),
								'widgetOptions' => array(
										'htmlOptions' => array('rows' => 5),
								)
						)
				);
				
				echo '<h5>Data: </h5>';
				echo '<div class="well" style="width: 80%">';
				
				echo $form->datePickerGroup(
						$model,
						'diaTarefa',
						array(
								'widgetOptions' => array(
										'options' => array(
												'language' => 'pt',
										),
								),

								'hint' => 'Clique para exibir o calendário',
								'prepend' => '<i class="glyphicon glyphicon-calendar"></i>'
						)
				);
				
				echo $form->timePickerGroup(
						$model,
						'horaInicio',
						array(
								'widgetOptions' => array(
										'wrapperHtmlOptions' => array(
												'class' => 'col-sm-3'
										),
								),
								'hint' => 'Hora de início',
						)
				);
				
				echo $form->timePickerGroup(
						$model,
						'horaFim',
						array(
								'widgetOptions' => array(
										'wrapperHtmlOptions' => array(
												'class' => 'col-sm-3'
										),
								),
								'hint' => 'Hora de término',
						)
				);
				
				echo '</div>';
				
				echo $form->checkboxGroup($model, 'isPublic');
			
			?>
			
			<div class="form-actions">
			
				<?php 
					$this->widget(
						'booster.widgets.TbButton',
						array(
							'buttonType' => 'submit',
							'context' => 'primary',
							'label' => 'Criar Tarefa'
						)
					); 
				?>
				
				<?php 
				
					$this->widget(
							'booster.widgets.TbButton',
							array('buttonType' => 'reset', 'label' => 'Limpar')
					);
				
				?>
				
				<?php 
					$this->endWidget();
					unset($form);
				?>

			</div>
			
			<br>
		
		</div>
	</div>
</div>