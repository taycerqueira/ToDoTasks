<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br" xml:lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>To Do Tasks</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo Yii::app()->request->baseUrl ?>/css/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo Yii::app()->request->baseUrl ?>/css/css/landing-page.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo Yii::app()->request->baseUrl ?>/css/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo Yii::app()->request->baseUrl ?>/css/http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">


        <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<div class="well">

    <!-- Navigation -->
        <?php
            $this->widget(
                'booster.widgets.TbNavbar',
                array(
					'id' => 'navbar',
                    'brand' => 'To Do Tasks',
                    'brandOptions' => array('style' => 'width:auto; margin-left: 50px;'),
                    'fixed' => 'top',
                    'fluid' => true,
                    'items' => array(
                        array(
							'id' => 'menu',
                            'class' => 'booster.widgets.TbMenu',
                            'type' => 'navbar',
                            'items' => array(
                                array('label' => 'Home', 'url' => $this->createAbsoluteUrl('site/index'), 'active' => true),
                                array('label' => 'Entrar', 'url' => $this->createAbsoluteUrl('site/login')),
                                array('label' => 'Cadastrar', 'url' => $this->createAbsoluteUrl('usuario/create')),
                            )
                        ),

                    )

                )
            );
        ?>
</div>
      
<!-- Conteúdo da Página -->

<?php echo $content; ?>

<!-- Footer -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="list-inline">
                        <li>
                            <a href="#home">Home</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="#about">Sobre</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="#uefs">UEFS</a>
                        </li>
                    </ul>
                    <p class="copyright text-muted small">Copyright &copy; Assessoria Especial de Informática - Gerencia de Desenvolvimento. Universidade Estadual de Feira de Santana</p>
                </div>
            </div>
        </div>
    </footer>

</html>
