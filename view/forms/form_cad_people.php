<div class="col-lg-3"></div>
<div class="col-lg-6">
<div class="jumbotron" style="background-color:#F0FFFF; border-radius:10px;">
<h3>Cadastro de pessoas</h3>
<br>
<br>																									<!-- atributo enctype="multipart/form-data" é usado para uploads -->
<form action="<?php echo base_url();?>/control/control_cad_people.php" method="POST" class="text-center" enctype="multipart/form-data"> 
	<label>Nome</label>
	<input type="text" name="nome" id="nome"  required class="form-control text-center" placeholder="Digite o nome" data-toggle="popover" data-placement="right" data-content="">

	<br>

	<label>Email</label>
	<input type="email" name="email"  required id="email" class="form-control text-center" placeholder="Digite o email" data-toggle="popover" data-placement="right" data-content="">

	<br>

	<label>Telefone</label>
	<input type="text" name="telef" required  id="campoTel" class="form-control text-center" placeholder="(00) 00000-0000" data-toggle="popover" data-placement="right" data-content="">


	<br>

	
	<button class="btn btn-success" id="btvalida" type="button" data-toggle="modal" data-target="#cadast" > <span class="glyphicon glyphicon-ok"> <strong style="font-family:arial;">Cadastrar</strong> </span>  </button>

	<button class="btn btn-primary" type="reset"> <span class="glyphicon glyphicon-erase"> <strong style="font-family:arial;">Limpar Campos</strong> </span>  </button>

</form>
</div>
</div>

<div class="col-lg-3"></div>





<!-- DIV PARA MODAL -->
<div class="modal fade text-center" id="cadast">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">

			<div class="modal-header">
				<h4 class="modal-title" > Confirma o cadastro? </h4>
			</div>	

			<div class="modal-body text-center">
				
					



					<!-- type button para opcao de cancelar para nao submitar, data-dismiss para sair do modal ao clicar -->
					<button type="button" class="btn btn-default" data-dismiss="modal"> Cancelar </button>

					<button  id="confcadpes" class="btn btn-success"> Confirmar</button>

				
			</div>

		
		</div> <!-- content -->
	</div> <!-- dialog -->
</div> <!-- modal fade-->