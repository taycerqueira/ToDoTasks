<?php

/* @var $this TarefaController */
/* @var $model Tarefa */

//Yii::app()->homeUrl = $this->createUrl('usuario/home', array('idusuario' => Yii::app()->user->id));
$usuario = Usuario::model()->findByPk(Yii::app()->user->id);

?>

<div class="container">

	<div class="page-header">
		<h1>To Do Tasks</h1>
	</div>
	
	<?php 
		$this->widget(
		    'booster.widgets.TbBreadcrumbs',
		    array(
				'homeLink' => CHtml::link('Home', $this->createAbsoluteUrl('usuario/home',array('id'=>Yii::app()->user->id))),
		        'links' => array('Nova Tarefa'),
		    )
		);
	?>

	<div class="panel panel-primary" style="width: 50%;">
	
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
												'format' => 'dd/mm/yyyy',
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
								'hint' => 'Hora de Início',
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
								'hint' => 'Hora de Término',
						)
				);
				
				echo '</div>';
				
				echo $form->checkboxGroup($model, 'isPublic');
				
				echo $form->dropDownListGroup(
					$model,
					'tipoTarefaId',
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