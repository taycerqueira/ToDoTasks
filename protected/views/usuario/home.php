<?php
/* @var $this UsuarioController */
/* @var $model Usuario */
?>

<div class="container">
	<div class="page-header">
		<h1>To Do Tasks</h1>
		<h3>Olá <?php echo $model->nome ?>, seja bem-vind@!</h3>
	</div>
	
	<?php
	
		$this->widget(
				'booster.widgets.TbButton',
				array(
						'label' => 'Nova Tarefa',
						'context' => 'primary',
						'buttonType' => 'POST',
						'url' => array($this::createUrl('tarefa/create'), 'usuario' => $model),
				)
		); 
		
		echo ' ';
	
		$this->widget(
				'booster.widgets.TbButton',
				array(
						'label' => 'Meus Tipos de Tarefa',
						'context' => 'primary',
						'buttonType' => 'link',
				)
		);
		
		echo ' ';
	
		$this->widget(
				'booster.widgets.TbButton',
				array(
						'label' => 'Minhas Tags',
						'context' => 'primary',
						'buttonType' => 'link',
						'url' => array('tag/create'),
				)
		);
	
		echo ' ';
	
	?>
	
	<h2>Tarefas</h2>
	
	<?php 
	
		if($model->tarefas != null){
			
			$tarefas = $model->tarefas;
			
			$gridDataProvider = new CArrayDataProvider($tarefas);
			
			$gridColumns = array(
					array('name'=>'id', 'header'=>'#', 'htmlOptions'=>array('style'=>'width: 60px')),
					array('name'=>'titulo', 'header'=>'Título'),
					array('name'=>'criador', 'header'=>'Criador'),
					array('name'=>'descricao', 'header'=>'Descricao'),
					array(
							'htmlOptions' => array('nowrap'=>'nowrap'),
							'class'=>'booster.widgets.TbButtonColumn',
							'viewButtonUrl'=>null,
							'updateButtonUrl'=>null,
							'deleteButtonUrl'=>null,
					)
			);
			
			$this->widget(
					'booster.widgets.TbGridView',
					array(
							'dataProvider' => $gridDataProvider,
							'template' => "{items}",
							'columns' => $gridColumns,
					)
			);
		}
		
		else {
		
			echo '<div class="alert alert-info">';
			echo 'Não existem tarefas cadastradas';
			echo '</div>';
		}
	
	?>
</div>

