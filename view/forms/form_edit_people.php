<?php

include_once base_server().'/model/class/Connection.class.php';

include_once base_server().'/model/class/Manager.class.php';

include_once base_server().'/control/Validade.class.php';

$man = new Manager();

$filter['cod_pes'] = $_GET['id'];

$pes = $man->select("pessoas",null,$filter);


?>

<div class="col-lg-3"></div>
<div class="col-lg-6">
<div class="jumbotron" style="background-color:#F0FFFF; border-radius:10px;">
<h3>Edição de pessoas</h3>
<br>
<br>

<form action="<?php echo base_url();?>/control/control_edit_people.php" method="POST" class="text-center" enctype="multipart/form-data"> 
	<label>Id</label>
	<input type="text" name="id" readonly required class="form-control text-center" value="<?php foreach($pes as $key){ echo $key['cod_pes']; } ?>">

	<br>


	<label>Nome</label>
	<input type="text" name="nome"  id="nome" required class="form-control text-center" value="<?php foreach($pes as $key){ echo $key['nome_pes']; } ?>" data-toggle="popover" data-placement="right" data-content="">

	<br>

	<label>Email</label>
	<input type="email" name="email"  required id="email" class="form-control text-center" placeholder="Digite o email" value="<?php foreach($pes as $key){ echo $key['email_pes'];} ?>"  data-toggle="popover" data-placement="right" data-content="">

	<br>

	<label>Telefone</label>
	<input type="text" name="telef" required  class="form-control text-center" id="campoTel" placeholder="(00) 00000-0000" value="<?php foreach($pes as $key){ echo $key['tel_pes'];} ?>"  data-toggle="popover" data-placement="right" data-content="">


	<br>


	<button class="btn btn-success" id="btvalida" type="button" data-toggle="modal" data-target="#cadast"  > <span class="glyphicon glyphicon-ok"> <strong style="font-family:arial;">Alterar </strong> </span>  </button>

	<button class="btn btn-primary" type="reset"> <span class="glyphicon glyphicon-erase"> <strong style="font-family:arial;">Resetar Edição</strong> </span>  </button>

</form>

</div>
</div>

<div class="col-lg-3"></div>



<!-- DIV PARA MODAL -->
<div class="modal fade text-center" id="cadast">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">

			<div class="modal-header">
				<h4 class="modal-title" > Atualizar dados? </h4>
			</div>	

			<div class="modal-body text-center">
				
					



					<!-- type button para opcao de cancelar para nao submitar, data-dismiss para sair do modal ao clicar -->
					<button type="button" class="btn btn-default" data-dismiss="modal"> Cancelar </button>

					<button  id="confcadpes" class="btn btn-success"> Confirmar</button>

				
			</div>

		
		</div> <!-- content -->
	</div> <!-- dialog -->
</div> <!-- modal fade-->