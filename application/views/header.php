<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>Sistema de pagos</title>
        <link rel="stylesheet" href="<?php echo base_url();?>css/styles.css" />
        <link href="<?php echo base_url();?>js/css/ui-lightness/jquery-ui-1.10.4.css" rel="stylesheet">
	<script src="<?php echo base_url();?>js/js/jquery-1.10.2.js"></script>
	<script src="<?php echo base_url();?>js/js/jquery-ui-1.10.4.js"></script>
        <link rel="stylesheet" href="<?php echo base_url();?>componentes/bootstrap/css/bootstrap.css" />
        <script src="<?php echo base_url();?>componentes/bootstrap/js/bootstrap.js"></script>
        <script>
            $(function(){
                $('#menu_header').hide();
                $('#h_user_info').click(function(){
                    $('#menu_header').toggle();
                });
            });
        </script>
    </head>
    <body>
        <header>
<!--            <div id="h_contain">
                <div id="h_user_info">
                    <img id="img_user" width="30" src="<?php echo base_url()?>/images/user-default.png" >
                    <div id="info">
                        <span id='nombre'>Diego Eduardo Macías Jasso</span><br>     
                        <span id='matricula'>UP100224</span>
                    </div>
                    
                </div>
            </div>-->
            <div id="menu_header" hidden>
                <div id="boton_cambia_pass" class="buttonUserInfo"><span >Cambiar contraseña</span></div>
                <div id="boton_perfil" class="buttonUserInfo"><span>Perfil</span></div>
                <div id="boton_salir" class="buttonUserInfo" ><span >Salir</span></div>
            </div>    
        </header>
        <section>
            <div class="wrapperSecond">
                
                
