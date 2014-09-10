<?php

/* @var $this TarefaController */
/* @var $model Tarefa */

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
		        'links' => array('Detalhes da Tarefa'),
		    )
		);
	?>
	
	<div>
		<blockquote>
			<h2>Tarefa <?php echo $model->id ?></h2>
		</blockquote>
	</div>
	
	<div>
		<h4>Detalhes: <h4>
	</div>
	
	<?php 	
	
	
		echo '<div class="well">';
		$this->widget(
				'booster.widgets.TbDetailView',
				array(
						'data' => $model,
						'type' => 'bordered, striped',
						'attributes' => array(
								array('name' => 'titulo', 'label' => 'Título'),
								array('name' => 'descricao', 'label' => 'Descrição'),
								array('name' => 'dia', 'label' => 'Dia', 'value' => Yii::app()->dateFormatter->format("d/MM/y", strtotime($model->dia))),
								array('name' => 'horario', 'label' => 'Horário', 'value' => Yii::app()->dateFormatter->format("HH:mm", strtotime($model->horaInicio)).' - '.Yii::app()->dateFormatter->format("HH:mm", strtotime($model->horaFim))),
								array('name' => 'tipo', 'label' => 'Tipo', 'value' => $model->tipoTarefa->nome),
								array('name' => 'visibilidade', 'label' => 'Visibilidade', 'value' => $model->getVisibilidade()),
						),
				)
		);
		
		echo '</div>';
		
		/*$this->widget(
				'booster.widgets.TbButton',
				array(
						'label' => 'Editar',
						'context' => 'primary',
						'htmlOptions' => array('style' => 'float:right'),
				)
		);*/
		
		echo ' ';
	?>
	
	
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

					$this->endWidget();
					unset($form);
				?>
		    </div>
		 
		    <div class="modal-footer">
		        <?php 
			        $this->widget(
			            'booster.widgets.TbButton',
			            array(
			                'context' => 'primary',
			                'label' => 'Salvar',
			                'url' => '#',
			                'htmlOptions' => array('data-dismiss' => 'modal'),
			            )
			        ); 
				?>
		        <?php 
			        $this->widget(
			            'booster.widgets.TbButton',
			            array(
			                'label' => 'Fechar',
			                'url' => '#',
			                'htmlOptions' => array('data-dismiss' => 'modal'),
			            )
			        ); 
				?>
		    </div>
		 
		<?php 
		
			$this->endWidget(); 
			
		?>
		
		<?php 
			$this->widget(
			    'booster.widgets.TbButton',
			    array(
			        'label' => 'Editar',
			        'context' => 'primary',
			        'htmlOptions' => array(
			            'data-toggle' => 'modal',
			            'data-target' => '#myModal',
						'style' => 'float:right',
			        ),
			    )
			);
		?>
		
		<br>
		<div><h4>Compartilhada com: <h4></div>
		
	<?php 
	
		if($model->isPublic == 0){

			echo '<div class="alert alert-info">';
			echo 'Tarefa Privada. Para compartilhar essa tarefa com outras pessoas, altere a visibilidade para "Pública"';
			echo '</div>';
			
		}
		
		else{	

			if(sizeof($model->usuarios) > 1){ //maior que 1 pois o array vai ter sempre 1 ou mais itens, visto que o próprio usuários vai estar no array. Se tiver 1 item, não tem o que exibir uma vez que esse item é referente ao próprio usuário.
					
				$usuarios = $model->usuarios;
				
				//Remove o próprio usuário do array, uma vez que é obvio que a tarefa é compartilhada com ele mesmo.
				foreach ($usuarios as $indice => $usuario){

					if($usuario->id == Yii::app()->user->id){
						unset($usuarios[$indice]);
					}

				}
					
				$gridDataProvider = new CArrayDataProvider($usuarios);
					
				$gridColumns = array(
						array('name'=>'nome', 'header'=>'Nome'),
						array('name'=>'email', 'header'=>'E-mail'),
							
						array(
								'htmlOptions' => array('nowrap'=>'nowrap'),
								'class'=>'booster.widgets.TbButtonColumn',
								'template'=>'{delete}',
						)
				);

				echo '<div class="well">';
				$this->widget(
						'booster.widgets.TbGridView',
						array(
								'dataProvider' => $gridDataProvider,
								'type'=>'striped',
								'columns' => $gridColumns,
						)
				);
				echo '</div>';
			
			}
			
			else {
			
				echo '<div class="alert alert-info">';
				echo 'Essa tarefa não foi compartilhada com outros usuários ainda.';
				echo '</div>';
			}		
		}
		
		$this->widget(
				'booster.widgets.TbButton',
				array(
						'label' => 'Adicionar',
						'context' => 'primary',
						'htmlOptions' => array('style' => 'float:right'),
				)
		);
		
		echo ' ';
	
	?>
	
	<br>
	<div><h4>Tags: <h4></div>
	
	<div class="well">
		<?php 
		
			foreach ($model->tags as $tag){
				$this->widget(
						'booster.widgets.TbButton',
						array(
								'label' => $tag->nome,
								'context' => 'info',
						)
				);

				echo ' ';
			}
		
		?>
	</div>
	
	<?php 
		$this->widget(
				'booster.widgets.TbButton',
				array(
						'label' => 'Editar',
						'context' => 'primary',
						'htmlOptions' => array('style' => 'float:right'),
				)
		);
	?>

</div>

