   <div class="intro-header">

        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-message">
                        <h1>To Do Tasks</h1>
                        <h3>Seu sistema de gerenciamento de tarefas</h3>
                        <hr class="intro-divider">
						<div class="form">
	                         <?php 
		                        /** @var TbActiveForm $form */
		                        $form = $this->beginWidget(
		                        		'booster.widgets.TbActiveForm',
		                        		array(
		                        				'id' => 'verticalForm',
		                        				'htmlOptions' => array('class' => 'well'), // for inset effect
		                        		)
		                        );
	
								$usuario = new Usuario();	                        
								
		                        echo $form->textFieldGroup($usuario, 'email');
		                        echo $form->passwordFieldGroup($usuario, 'senha');
		                        //echo $form->checkboxGroup($model, 'checkbox');
		                        
		                        $this->widget(
		                        		'booster.widgets.TbButton',
		                        		array('buttonType' => 'submit', 'label' => 'Login')
		                        );
		                        
		                        $this->endWidget();
		                        unset($form);
	                        ?>
						</div>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    
    <div class="content-section-a">

        <div class="container">

                 <hr class="section-heading-spacer">
                 <div class="clearfix"></div>
                 <h2 class="section-heading">To Do Tasks... (alguma descricao)</h2>
                 <p class="lead">Mais informacoes... </p>


        </div>
        <!-- /.container -->

    </div>
