<?php
/* @var $this TipoTarefaController */

$usuario = Usuario::model()->findByPk(Yii::app()->user->id);

?>

<div class="container" style="width: 37%; margin-left: 60px;">

	<div class="page-header">
		<h1>To Do Tasks</h1>
	</div>
	
	<div>
		<blockquote>
			<h2>Meus Tipos de Tarefa</h2>
		</blockquote>
	</div>
	
	<?php 
		$this->widget(
				'booster.widgets.TbButton',
				array(
						'label' => 'Novo Tipo',
						'context' => 'primary',
						'buttonType' => 'link',
						'url' => $this->createUrl('tipoTarefa/create', array('idusuario' => Yii::app()->user->id)),
				)
		);
		
		echo ' ';
	?>
	
	<br></br>
	
	<?php 
	
		if($usuario->tipoTarefas != null){
			
			$tipos = $usuario->tipoTarefas;
	
			$gridDataProvider = new CArrayDataProvider($tipos);
				
			$gridColumns = array(
					array('name'=>'nome', 'header'=>'Tipos'), //para cada coluna adicionar um novo array como este.
					array(
							'htmlOptions' => array('nowrap'=>'nowrap'),
							'class'=>'booster.widgets.TbButtonColumn',
							'template'=>'{delete} {update}',
							'deleteConfirmation'=>'Tem certeza que deseja excluir esse tipo de tarefa?',
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
			echo 'Não existem tipos de tarefa cadastrados';
			echo '</div>';
			
		}
	
	?>

	<br></br>

</div>

