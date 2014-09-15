<?php

/* @var $this TarefaController */
/* @var $model Tarefa */

?>

	<!-- INICIO DO MODAL -->
	
		<?php 
			$this->beginWidget(
			    'booster.widgets.TbModal',
			    array('id' => 'myModal')
			); 
		?>
		 	
		    <div class="modal-header">
		        <a class="close" data-dismiss="modal">&times;</a>
		        <h4>Editar Tarefa</h4>
		    </div>
		 
		    <div class="modal-body">
		        
		        <?php 
		        
		        	$usuario = Usuario::model()->findByPk(Yii::app()->user->id);
			
					/** @var TbActiveForm $form */
				
					$form = $this->beginWidget(
						'booster.widgets.TbActiveForm',
						array(
							'id' => 'tarefa-form-update',
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
													//'showAnim'=>'fold',
											),
									),
									'hint' => 'Clique para exibir o calendário',
									'value' => '12/09/2014',
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
													//'disableFocus' => true, 
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
													//'disableFocus' => true, 
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

					//$this->endWidget();
					//unset($form);
				?>
		    </div>
		 
		    <div class="modal-footer">
		        <?php 
			        $this->widget(
			            'booster.widgets.TbButton',
			            array(
			                'context' => 'primary',
			                'label' => 'Salvar',
							'buttonType' => 'submit',
			                //'url' => $this->createUrl('update', array('id' => $model->id)),
			                'htmlOptions' => array('data-dismiss' => 'modal'),
			            )
			        ); 
				?>
		        <?php 
			        $this->widget(
			            'booster.widgets.TbButton',
			            array(
			                'label' => 'Fechar',
			                //'url' => '#',
			                'htmlOptions' => array('data-dismiss' => 'modal'),
			            )
			        ); 
				?>
		    </div>
		    
		<?php 
			$this->endWidget(); 	
			//unset($form);
			$this->endWidget();
		?>
		
		<!-- FIM DO MODAL -->
