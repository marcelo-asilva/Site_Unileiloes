<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>UniLeilões</title>
        <!--<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />-->
        <meta charset="utf-8"></meta>
        <link rel="stylesheet" type="text/css" href="../../Template/style.css" />
        <link rel="stylesheet" type="text/css" href="../../Template/js/jquery-ui-1.10.3.custom.min.css" />
        <!--[if IE 6]>
        <link rel="stylesheet" type="text/css" href="iecss.css" />
        <![endif]-->
        <script type="text/javascript" src="../../Template/js/boxOver.js"></script>
        <script type = "text/javascript" src="../../Template/js/jquery-1.9.1.js"></script>
        <script type = "text/javascript" src="../../Template/js/jquery-ui-1.10.3.custom.min.js"></script>
    </head>
    <?php
    //Includes Necessarios
    require_once '../../Template/config.php';
    require_once $CONTROLLER . '/Unileiloes.php';
    ?>

    <body>
        <div id="main_container">
            <div class="top_bar">
                <div class="top_search">
                    <div class="search_text">Buscar Produto</div>
                    <input type="text" class="search_input" name="search" />
                    <input type="image" src="../../Template/images/search.gif" class="search_bt"/>
                </div>
                <div class="languages">
                    <div class="lang_text"></div>
                </div>
            </div>
            <div class="top_bar"> 
                <div id="header">
                    <div id="logo"><img src="../../Template/images/logoBranca6.png" width="640" height="170"/></div>
                </div>

                <!--Inicio do menuTOPO-->
                <div id="main_content">
                    <div id="menu_tab">
                        <div class="left_menu_corner"></div>
                        <ul class="menu">
                            <li><a href="<?php echo $URL_VIEW . "index/index.php"; ?>" class="nav1">Home</a></li>
                            <li class="divider"></li>
                            <li><a href="<?php echo $URL_VIEW . "Produtos/cadastro_produto.php"; ?>" class="nav2">Cadastrar Produto</a></li>
                            <li class="divider"></li>
                            <li><a href="<?php echo $URL_VIEW . "Lotes/Lote.php"; ?>" class="nav2">Cadastrar Lote</a></li>
                            <li class="divider"></li>
                            <li><a href="<?php echo $URL_VIEW . "Leiloes/cadastro_leilao.php"; ?>" class="nav2">Cadastrar Leilao</a></li>
                            <li class="divider"></li>
                            <!--                            <li><a href="#" class="nav2">Cadastrar Produtos</a></li>
                                                        <li class="divider"></li>-->
                            <!--<li><a href="#" class="nav3">Minhas Compras</a></li>-->

<!--                            <li class="divider"></li>
                            <li><a href="#" class="nav4">Criar Conta</a></li>
                            <li class="divider"></li>
                            <li><a href=#" class="nav4">Logar</a></li>
                            <li class="divider"></li>-->
                            <!--<li><a href="#" class="nav5">Logar</a></li>
                            <li class="divider"></li>-->

                        </ul>
                        <div class="right_menu_corner"></div>
                    </div>
                    <!-- final do menuTOPO -->