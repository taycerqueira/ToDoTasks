<?php

/* @var $this UsuarioController */
/* @var $model Usuario */

?>

<div class="container">
	<div class="page-header">
		<h1>To Do Tasks</h1>
		<h3>Ol� <?php echo $model->nome ?>, seja bem-vind@!</h3>
	</div>
	
	<?php
	
		$this->widget(
		    'booster.widgets.TbBreadcrumbs',
		    array(
		        'homeLink' => 'Home',
		        'links' => array('')
		    )
		);
	
		$this->widget(
				'booster.widgets.TbButton',
				array(
						'label' => 'Nova Tarefa',
						'context' => 'primary',
						'buttonType' => 'link',
						'url' => $this->createUrl('tarefa/create', array('id' => $model->id)),
				
					 )
				
		);

		echo ' ';
	
		$this->widget(
				'booster.widgets.TbButton',
				array(
						'label' => 'Meus Tipos de Tarefa',
						'context' => 'primary',
						'buttonType' => 'link',
						'url' => $this->createUrl('tipoTarefa/view', array('idusuario' => $model->id)),
				)
		);
		
		echo ' ';
	
		$this->widget(
				'booster.widgets.TbButton',
				array(
						'label' => 'Minhas Tags',
						'context' => 'primary',
						'buttonType' => 'link',
						'url' => $this->createUrl('tag/view', array('idusuario' => $model->id)),
				)
		);
	
		echo ' ';
	
	?>
	
	<br></br>
	
	<div>
		<blockquote>
			<h2>Minhas Tarefas</h2>
		</blockquote>
	</div>
	
	<?php 
	
		
		if($model->tarefas != null){
			
			$tarefas = $model->tarefas;
			
			$gridDataProvider = new CArrayDataProvider($tarefas);
			
			$gridColumns = array(
					array('name'=>'titulo', 'header'=>'T�tulo'),
					array('name'=>'descricao', 'header'=>'Descri��o'),
					array('name'=>'dia', 'header'=>'Dia', 'value'=>'Yii::app()->dateFormatter->format("d/MM/y", strtotime($data->dia))'),
					array('name'=>'horaInicio', 'header'=>'In�cio', 'value'=>'Yii::app()->dateFormatter->format("HH:mm", strtotime($data->horaInicio))'),
					array('name'=>'horaFim', 'header'=>'Fim', 'value'=>'Yii::app()->dateFormatter->format("HH:mm", strtotime($data->horaFim))'),
					array('name'=>'criador.nome', 'header'=>'Criador'),
					
					array(
							'htmlOptions' => array('nowrap'=>'nowrap'),
							'class'=>'booster.widgets.TbButtonColumn',
							'template'=>'{view} {delete} {update}',
							'viewButtonUrl'=>'Yii::app()->createUrl("/tarefa/view", array("id" => $data["id"]))',
							'deleteButtonUrl'=>'Yii::app()->createUrl("/tarefa/delete", array("id" => $data["id"]))',
							'updateButtonUrl'=>'Yii::app()->createUrl("/tarefa/update", array("id" => $data["id"]))',
							'deleteConfirmation'=>'Tem certeza que deseja excluir essa tarefa?',
					)
			);
			
			$this->widget(
					'booster.widgets.TbGridView',
					array(
							'dataProvider' => $gridDataProvider,
							'type'=>'striped',
							'columns' => $gridColumns,
							'htmlOptions' => array('style'=>'width: 700px'),
					)
			);

		}
		
		else {
		
			echo '<div class="alert alert-info">';
			echo 'N�o existem tarefas cadastradas';
			echo '</div>';
		}
	
	?>
</div>

