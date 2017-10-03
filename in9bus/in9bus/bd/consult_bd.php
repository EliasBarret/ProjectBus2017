	<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link href="../css/bootstrap-theme.min.css" rel="stylesheet">
	<link href="../css/ie10-viewport-bug-workaround.css" rel="stylesheet">
	<link href="../css/theme.css" rel="stylesheet">
</head>

<body>

	<!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="../home.php">In9bus</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="../home.php">Início</a></li>
            <li><a href="../consult_tela1.php">Consultar</a></li>
            <li class="active"><a href="../bd/consult_bd.php">Geral</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>


	<?php 

	include "conexxao.php";

	//$matricula=trim($_POST['matricula']);		

	//$sql = "SELECT * FROM FRANCISCOCASTELO_VW_GIS WHERE IMOV_ID = '".$matricula."'";
	$sql = "SELECT * FROM FRANCISCOCASTELO_VW_GIS WHERE IMOV_ID";

	$result = mysqli_query($conecta,$sql);
		
	echo "<table class = 'table table-bordered' >
			
			<tr>
				<td><center>IMOV_ID </td>
				<td><center>SITUACAO_LIGACAO_AGUA </td>
				<td><center>EXCLUIDO </td>
				<td><center>LOCALIDADE </td>
				<td><center>CATEGORIA_IMOVEL </td>
				<td><center>PERFIL_IMOVEL </td>
				<td><center>SETOR </td>
				<td><center>QUADRA </td>
				<td><center>LOTE </td>
				<td><center>SUBLOTE </td>
				<td><center>TIPO_LOGRADOURO </td>
				<td><center>TITULO_LOGRADOURO </td>
				<td><center>NOME_LOGRADOURO </td>
				<td><center>NUMERO_IMOVEL </td>
				<td><center>TIPO_AREA_QUADRA </td>
				<td><center>QT_CONTAS_ABERTO </td>
				<td><center>VALOR_CONTAS_ABERTO </td>
				<td><center>NEGATIVADO </td>
				<td><center>NAO_MEDIDO </td>
				<td><center>DATA_INSTAL_HIDROMETRO_AGUA </td>
				<td><center>CONSUMO_MEDIDO </td>
				<td><center>CONSUMO_FATURADO </td>
				<td><center>CONSUMO_MEDIO </td>
				<td><center>TIPO_CONSUMO </td>
				<td><center>SIGLA_ANORMALIDADE_CONSUMO </td>
				<td><center>ANORMALIDADE_LEITURA </td>
				<td><center>LOTEAMENTO </td>
				<td><center>COMPLEMENTO </td>
				<td><center>SITUACAO_ESGOTO </td>
				<td><center>MUNICIPIO </td>
				<td><center>BAIRRO </td>
				<td><center>UNIDADE_NEGOCIO </td>
				<td><center>DATA_INICIO_RELACAO </td>
				<td><center>NOME_CLIENTE </td>
				<td><center>CPF_CNPJ </td>
				<td><center>QUANTIDADE_ECONOMIAS </td>
				<td><center>POCO </td>
				<td><center>TARIFA_CONSUMO </td>
				<td><center>DATA_LIGACAO_AGUA </td>
				<td><center>PERFIL_LIGACAO_AGUA </td>
				<td><center>CONSUMO_MEDIO_HIDROMETRO_AGUA </td>
				<td><center>GRUPO_FATURAMENTO </td>
				<td><center>DIA_VENCIMENTO </td>
				<td><center>EMPRESA_LEITURISTA </td>
				<td><center>CARTEIRA_CLIENTE </td>
				<td><center>GERENCIA_REGIONAL </td>
				<td><center>CONTA_FATURADA </td>
				<td><center>NOMECLIENTE_RESP </td>
			</tr>";

	while($line = mysqli_fetch_array($result, MYSQLI_BOTH)){
	
			echo "<tr>
					<td><center>".$line["IMOV_ID"]."</td>
					<td><center>".$line["SITUACAO_LIGACAO_AGUA"]."</td>
					<td><center>".$line["EXCLUIDO"]."</td>
					<td><center>".$line["LOCALIDADE"]."</td>
					<td><center>".$line["CATEGORIA_IMOVEL"]."</td>
					<td><center>".$line["PERFIL_IMOVEL"]."</td>
					<td><center>".$line["SETOR"]."</td>
					<td><center>".$line["QUADRA"]."</td>
					<td><center>".$line["LOTE"]."</td>
					<td><center>".$line["SUBLOTE"]."</td>
					<td><center>".$line["TIPO_LOGRADOURO"]."</td>
					<td><center>".$line["TITULO_LOGRADOURO"]."</td>
					<td><center>".$line["NOME_LOGRADOURO"]."</td>
					<td><center>".$line["NUMERO_IMOVEL"]."</td>
					<td><center>".$line["TIPO_AREA_QUADRA"]."</td>
					<td><center>".$line["QT_CONTAS_ABERTO"]."</td>
					<td><center>".$line["VALOR_CONTAS_ABERTO"]."</td>
					<td><center>".$line["NEGATIVADO"]."</td>
					<td><center>".$line["NAO_MEDIDO"]."</td>
					<td><center>".$line["DATA_INSTAL_HIDROMETRO_AGUA"]."</td>
					<td><center>".$line["CONSUMO_MEDIDO"]."</td>
					<td><center>".$line["CONSUMO_FATURADO"]."</td>
					<td><center>".$line["CONSUMO_MEDIO"]."</td>
					<td><center>".$line["TIPO_CONSUMO"]."</td>
					<td><center>".$line["SIGLA_ANORMALIDADE_CONSUMO"]."</td>
					<td><center>".$line["ANORMALIDADE_LEITURA"]."</td>
					<td><center>".$line["LOTEAMENTO"]."</td>
					<td><center>".$line["COMPLEMENTO"]."</td>
					<td><center>".$line["SITUACAO_ESGOTO"]."</td>
					<td><center>".$line["MUNICIPIO"]."</td>
					<td><center>".$line["BAIRRO"]."</td>
					<td><center>".$line["UNIDADE_NEGOCIO"]."</td>
					<td><center>".$line["DATA_INICIO_RELACAO"]."</td>
					<td><center>".$line["NOME_CLIENTE"]."</td>
					<td><center>".$line["CPF_CNPJ"]."</td>
					<td><center>".$line["QUANTIDADE_ECONOMIAS"]."</td>
					<td><center>".$line["POCO"]."</td>
					<td><center>".$line["TARIFA_CONSUMO"]."</td>
					<td><center>".$line["DATA_LIGACAO_AGUA"]."</td>
					<td><center>".$line["PERFIL_LIGACAO_AGUA"]."</td>
					<td><center>".$line["CONSUMO_MEDIO_HIDROMETRO_AGUA"]."</td>
					<td><center>".$line["GRUPO_FATURAMENTO"]."</td>
					<td><center>".$line["DIA_VENCIMENTO"]."</td>
					<td><center>".$line["EMPRESA_LEITURISTA"]."</td>
					<td><center>".$line["CARTEIRA_CLIENTE"]."</td>
					<td><center>".$line["GERENCIA_REGIONAL"]."</td>
					<td><center>".$line["CONTA_FATURADA"]."</td>
					<td><center>".$line["NOMECLIENTE_RESP"]."</td>
				</tr>";

		}
		
	?>

</body>
</html>

				