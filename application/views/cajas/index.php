<link href="<?php echo base_url();?>js/css/ui-lightness/jquery-ui-1.10.4.css" rel="stylesheet">
<script src="<?php echo base_url();?>js/js/jquery-1.10.2.js"></script>
<script src="<?php echo base_url();?>js/js/jquery-ui-1.10.4.js"></script>
<script>
    $(function(){
        
         $('#menuAccordion').accordion();
         
        $('#mainMenu').appendTo('#h_contain');
        
        $('#estadoDeCuenta').click(function(){
            $('#main-content').load("<?php echo base_url()?>index.php/vistas/estado_de_cuenta_C_view"); 
            $(this).addClass("active");
            $('#reportes').removeClass("active");
            $('#conceptos').removeClass("active");
        });
        $('#reportes').click(function(){
            $('#main-content').load("<?php echo base_url()?>index.php/vistas/reportes_C_view"); 
            $(this).addClass("active");
            $('#estadoDeCuenta').removeClass("active");
            $('#conceptos').removeClass("active");
        });
        $('#conceptos').click(function(){
            $('#main-content').load("<?php echo base_url()?>index.php/vistas/conceptos_C_view"); 
            $(this).addClass("active");
            $('#reportes').removeClass("active");
            $('#estadoDeCuenta').removeClass("active");
        });
    });
    
</script>
<style>
    .buttonMenu{
        width: 26.6%;
    }
</style>
    
<!--<div id="mainMenu">
    <div id="estadoDeCuenta" class="buttonMenu">
        <span>Estado de Cuenta</span>
    </div>
    <div id="reportes" class="buttonMenu">
        <span>Reportes</span>
    </div>
    <div id="conceptos" class="buttonMenu">
        <span>Conceptos</span>
    </div>
</div>-->

<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Sistema de Pagos</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active" id="estadoDeCuenta"><a href="#">Estado de Cuenta</a></li>
        <li id="reportes"><a href="#">Reportes</a></li>
        <li id="conceptos"><a href="#">Conceptos</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<section id="main-content">
    
</section>
</div>
</section>