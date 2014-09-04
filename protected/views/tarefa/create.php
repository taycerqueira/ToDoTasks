<?php

/* @var $this TarefaController */
/* @var $model Tarefa */

$usuario = Usuario::model()->findByPk(Yii::app()->user->id);

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
						'id' => 'tarefa-form',
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
						'dia',
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
										'options' => array(
												'disableFocus' => true, 
												'showMeridian' => false
										),
								),
								'hint' => 'Hora de início',
								'noAppend' => true, 
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
										'options' => array(
												'disableFocus' => true, 
												'showMeridian' => false 
										),
								),
								'hint' => 'Hora de término',
						)
				);
				
				echo '</div>';
				
				echo $form->checkboxGroup($model, 'isPublic');
				
				echo $form->dropDownListGroup(
					$model,
					'tipoTarefa',
					array(
						'wrapperHtmlOptions' => array(
							'class' => 'col-sm-2',
						),
						'widgetOptions' => array(  
							'data' => CHtml::listData($usuario->tipoTarefas, 'id', 'nome'),
							'htmlOptions' => array(),
						)
					)
				); 
				
				echo $form->dropDownListGroup(
						$model,
						'tags',
						array(
								'wrapperHtmlOptions' => array(
										'class' => 'col-sm-5',
								),
								'widgetOptions' => array(
										'data' => CHtml::listData($usuario->tags, 'id', 'nome'),
										'htmlOptions' => array('multiple' => true),
								)
						)
				);
			
			?>
			
			<br></br>
			
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