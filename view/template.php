<!DOCTYPE html>
<html lang="pt-br">
<head>
        <!-- caso tenha sido enviado opt, q eh pra pesquisar, listar e cadastrar, a codificacao vai ser utf-8; caso nao tenha opt, q vai ser a pagina inicia, a codificacao sera ISO -->

      <?php /*if(isset($_GET['opt'])){ echo '<meta charset="utf-8">';} else{ echo '<meta charset="ISO-8859-1">'; } */?>

      <meta charset="utf-8">

                                                 <!-- chamada da funcao static para verificar qual nome certo para o pageTitle-->
	<title>	<?php if(isset($_GET['opt'])){ $pageTitle = Validate::valPageTitle($_GET['opt']); } echo $pageTitle; ?>	</title>

	<!-- linkando com css do bootstrap -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/view/assets/bootstrap/css/bootstrap.css">

</head>

<body id="corpo">

  <div class="container text-center">
  	
  <header class="row navbar" style="background-color:lightgreen;" >
  	<div class="col-lg-5"></div>

  	<div class="col-lg-2"  >
  	<a href="<?php echo base_url(); ?>" class="navbar-brand" ><span data-toggle="tooltip" data-placement="right"  title="Inicio" >People Manager</span></a>
  	</div>

  	<div class="col-lg-5"></div>
  </header>

  
  </div>

 	<section class="row text-center">
 		
 		<div class="col-lg-3"></div>

 		<div class="col-lg-6" >
                       <div class="col-md-3"><a class="btn btn-primary btn-block" href="<?php echo base_url(); ?>" >INICIO</a></div>  
                        <div class="col-lg-3"><a class="btn btn-primary btn-block" href="?opt=pesq_people">PESQUISAR</a></div>  
                         <div class="col-lg-3"><a class="btn btn-primary btn-block" href="?opt=cad_people">CADASTRAR</a></div>
                           <div class="col-lg-3"><a class="btn btn-primary btn-block" href="?opt=list_people">LISTAR TODOS</a></div>

 			<?php pageContent(); ?>
 			
 		</div>
 		
 		<div class="col-lg-3" ></div>
 	</section>


 <!--
       1º script: plugin do jquery
       2º script: plugin da mascara de inputs
       3º script: javascript do bootstrap
   -->

  <script src="<?php echo base_url();?>/view/assets/bootstrap/js/jquery.js"></script>
  <script src="<?php echo base_url();?>/view/assets/bootstrap/js/jquery.maskedinput.js"></script>
  <script src="<?php echo base_url();?>/view/assets/bootstrap/js/bootstrap.js"></script>


<footer class="row">
   <hr>
   
    <div class="col-lg-12 text-center">
         
           
           <span style="font-family:Arial; color:#4169E1;" >
            People Manager - <?php echo date('Y'); ?>
            
            | Todos os direitos reservados
           </span> 
            
            
        </div>

  </footer>
  
  <br>



 </body>

</html>							