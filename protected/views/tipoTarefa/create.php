<?php

/* @var $this TipoTarefaController */
/* @var $model TipoTarefa */

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
		        'links' => array('Meus Tipos de Tarefa' => $this->createUrl('tipoTarefa/view', array('id'=>Yii::app()->user->id)), 'Novo Tipo de Tarefa'),
		    )
		);
	?>
	
	<div>
		<blockquote>
			<h2>Novo Tipo de Tarefa</h2>
		</blockquote>
	</div>

	<div class="panel panel-primary" style="width: 45%;">
	
		<div class="panel-heading">
			Tipo de Tarefa
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