<?php

/* @var $this TagController */

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
		        'links' => array('Minhas Tags'),
		    )
		);
	?>
	
	<div>
		<blockquote>
			<h2>Minhas Tags</h2>
		</blockquote>
	</div>
	
	<?php 
		$this->widget(
				'booster.widgets.TbButton',
				array(
						'label' => 'Nova Tag',
						'context' => 'primary',
						'buttonType' => 'link',
						'url' => $this->createUrl('tag/create', array('idusuario' => Yii::app()->user->id)),
				)
		);
		
		echo ' ';
	?>
	
	<br></br>
	
	<?php 
	
		if($usuario->tags != null){
			
			$tags = $usuario->tags;
	
			$gridDataProvider = new CArrayDataProvider($tags);
				
			$gridColumns = array(
					array('name'=>'nome', 'header'=>'Tags'), //para cada coluna adicionar um novo array como este.
					array(
							'htmlOptions' => array('nowrap'=>'nowrap'),
							'class'=>'booster.widgets.TbButtonColumn',
							'template'=>'{delete} {update}',
							'deleteConfirmation'=>'Tem certeza que deseja excluir essa tag?',
					)
			);
				
			$this->widget(
					'booster.widgets.TbGridView',
					array(
							'dataProvider' => $gridDataProvider,
							'type'=>'striped',
							'columns' => $gridColumns,
							'htmlOptions' => array('style'=>'width: 300px'),
					)
			);
		}
		
		else{

			echo '<div class="alert alert-info">';
			echo 'Não existem tags cadastradas';
			echo '</div>';
			
		}
	
	?>

	<br></br>

</div>
