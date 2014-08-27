<?php
/* @var $this TagController */
/* @var $model Tag */
/* @var $idusuario Integer */

$usuario = Usuario::model()->findByPk($idusuario);

?>

<div class="container" style="width: 37%; margin-left: 60px;">

	<div class="page-header">
		<h1>To Do Tasks</h1>
	</div>
	
	<div>
		<blockquote>
			<h2>Nova Tag</h2>
		</blockquote>
	</div>

	<div class="panel panel-primary">
	
		<div class="panel-heading">
			Tag
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
							'label' => 'Criar Tag'
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