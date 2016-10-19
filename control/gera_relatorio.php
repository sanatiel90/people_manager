<?php


include_once dirname(__DIR__).'/model/config.php';

include_once base_server().'/model/class/Connection.class.php';

include_once base_server().'/model/class/Manager.class.php';

include_once base_server().'/control/Validade.class.php';

require_once base_server().'/control/fpdf/fpdf.php';



//funcao para definir o local correto do fuso horario, para nao ficar as 3 horas a mais
date_default_timezone_set('America/Sao_Paulo');


//funcao utf8_decode(string) serve para permitir os acentos

//obj de manager
$man = new Manager();


$filters[$_POST['ca']] = '%'.$_POST['bu'].'%';

$extra = " ORDER BY ";
$extra .= $_POST['or'];

//esta select ira retornar o msm resultado da ultima busca informada
//os valores POST pegues acima indicam qual foi o campo pesquisado, a busca e ordem; eles foram
//pegues pelos input hidden or, ca, bu

$list_pes = $man->select_like("pessoas",null,$filters,$extra);






class PDF extends FPDF{

//funcao q define o cabeçalho do rel
	function Header(){

		$this->SetFont('Arial','B',16);
		$this->Cell(45);
		$this->Cell(110,0,'People Manager - '.utf8_decode('Relatório').' de pessoas',10,0,'C');
		$this->Ln(10);
		$this->Cell(201,0,'Data/Hora: '.date('d/m/Y H:i:s'),0,1,'C');
		$this->Ln(20);
		
	}

//funcao q define o rodape, com a pagina atual, do rel
	function Footer(){
		$this->SetY(-15);
		$this->SetFont('Arial','I',8);
		$this->Cell(0,10,'Pagina '.$this->PageNo().'/{nb}',0,0,'C');
	}


}


//criando novo obj de pdf
$pdf = new PDF('P','mm','A4');

$pdf->AliasNbPages();

$pdf->SetTitle("relatorio_pessoas");

//add uma pagina
$pdf->AddPage();

//defininido fonte
$pdf->SetFont('Arial','B',12);



//criando celuluas do relatorio para os titulos dos campos
	$pdf->Cell(12,1,'ID',0,0,'C');
	$pdf->Cell(60,1,'Nome',0,0,'C');
	$pdf->Cell(75,1,'Email',0,0,'C');
	$pdf->Cell(35,1,'Telefone',0,1,'C');
	$pdf->Ln(3);
	
$pdf->SetFont('Times','',12);	

if($list_pes == null){
	$pdf->Ln(5);
	$pdf->Cell(190,10,' '.utf8_decode('Não').' existem dados a serem mostrados',1,0,'C');

} else{
	//celular com os resultados da busca
	foreach ($list_pes as $k) {
		$pdf->Cell(12,10,$k['cod_pes'],1,0,'C');

		//no caso do nome colocar a funcao ut8_decode para caso o nome tenha acento ele ser mostrado normalmente
		$pdf->Cell(60,10,utf8_decode($k['nome_pes']),1,0,'C');
		
		$pdf->Cell(75,10,$k['email_pes'],1,0,'C');
		$pdf->Cell(35,10,$k['tel_pes'],1,1,'C');
		//$pdf->Ln(5);


	}

}	

//mostra pdf
$pdf->Output();




?>