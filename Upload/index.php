<?php

if($_POST['submit'] == "Upload"){
	include('config/UpLoadTree.php');
	$upload = new Upload($_FILES['arquivo']['name'] , $_FILES['arquivo']['size'] , $_FILES['arquivo']['tmp_name'] , $_FILES['arquivo']['type']);
}
if($_POST['submit'] == "Upload Todos"){
	include('config/MultiploUpLoadTree.php');
	$multiploUpload = new MultiploUpload($_FILES['arquivo']['name'] , $_filial['filial'] , $_nome['nome'] , $_FILES['arquivo']['size'] , $_FILES['arquivo']['tmp_name'] , $_FILES['arquivo']['type']);
	
header("refresh: 3; url=seusite"); 
}
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<center><img src="http://upimage.png"/></center>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Envio de Documentos</title>
<script type="text/javascript" src="js/jquery.js">             	</script>
<script type="text/javascript" src="js/interface/interface.js"> </script>
<script type="text/javascript" src="js/funcoes.js">           	</script>
<link href="css/estilo.css" type="text/css" rel="stylesheet" />

</head>
<body>
	<div>
	<fieldset>
        	<legend>Enviar Documentos</legend>
        	<small><font face="verdana" color="#000000" > 
			<b>Trabalhador:<br></b>
			● CPF – Cadastro de Pessoa Física<br>
			● Cartão PIS-PASEP - Inscrição INSS<br>
			● Comprovante de Escolaridade<br>
			● Certidão de Nascimento ou Certidão de Casamento<br>
			● CTPS: Número de Série, Qualificação Civil, Alterações de Identidade<br>
			● DNI (Caso Possua)<br>
			● RG – Registro Geral<br>
			● Registro Nacionalidade Estrangeira (Caso seja Estrangeiro)<br>
			● Inscrição Órgão de Classe (Encontra na Carteira de Trabalho, caso possua ensino superior)<br>
			● CNH – Carteira Nacional de Habilitação (Caso Possua)<br>
			● Comprovante de Residência<br>
			● Trabalhador Estrangeiro – Todos Documentos citados<br><br>
			
			<b>Dependentes:</b><br>
			● RG, Certidão de Nascimento e CPF dos dependentes<br>
			● Preencher ficha de Dependentes, assinar e enviar digitalizada junto dos demais documentos: <a href="https://www.google.com.br/url?sa=t&rct=j&q=&esrc=s&source=web&cd=1&ved=0ahUKEwjYx7XHu9rYAhUKjJAKHQV2DhIQFggoMAA&url=http%3A%2F%2Fwww.portal.cps.sp.gov.br%2Fcrh%2Fnpp%2Fmanuais-e-modelos%2Fdownloads%2Flaca%2Fdeclaracao-dependentes.doc&usg=AOvVaw2EUQaRBykvE9MNC7MLrmaf">Download Ficha</a> <br><br>
			<font face="verdana" color="red"> <b><small><small>(Clicar em download para baixar a ficha de “Declaração de Encargos de Familia para fins de Imposto de Renda”. Assinar e enviar digitalizada junto dos demais documentos.)<br>
			Envio de arquivos; digitalizar os documentos com resolucão de 100 x 100 dpi.</b>
			
    </fieldset><br><br></small></small></font>
	
<form action="index.php" method="POST" enctype="multipart/form-data">	
<font face="verdana" color="#000000" > 
<fieldset>	
<legend> Informar Dados </legend>
     <tr>
      <td>Filial:</td>
      <td><input name="filial" type="text" id="filial" size="4" maxlength="4" />
		<span class="style1"></span></td><br>
	</tr>  
	
	<tr>
      <td width="69">Nome:</td>
      <td width="546"><input name="nome" type="text" id="nome" size="30" maxlength="70" />
        <span class="style1"></span></td><br>
    </tr>
    </fieldset>
</div>	
 

</br>

	<tr>	
    </form>
    </div>
    
    <div id="MultiploUpload">
    	<a href="#" id="windowOpen">Clique aqui para carregar arquivos...</a>
	</div>
    
    <!-- Início Janela Filé -->
    <div id="window">
        <div id="windowTop">
            <div id="windowTopContent">Documentos</div>
            <img src="images/window_min.jpg"   id="windowMin" />
            <img src="images/window_max.jpg"   id="windowMax" />
            <img src="images/window_close.jpg" id="windowClose" />
        </div>
        <div id="windowBottom">
            <div id="windowBottomContent">
                &nbsp;
            </div>
        </div>    
        <div id="windowContent">
            <form action="index.php" method="POST" enctype="multipart/form-data">
                <fieldset>
                    <span>
                        <input type="file"   name="arquivo[]"  />
                    </span>
                    <span id="result">
                    	<!-- Se for precionado o + aqui é adicionado os campos -->
                    </span>
                    <span>
                    	<a href="#" onClick="adicionaCampo();">Adicionar arquivo +</a>
                    </span>
                    
                    <span>
                        <input type="submit" name="submit" value="Upload Todos" id="submit"/>    
                    </span>
                </fieldset>
            </form>
        </div>
        <img src="images/window_resize.gif" id="windowResize" />
	</div>
    <!-- Arquivo INI da Janela(window) -->
	<script src="js/fc.js"></script>
    <!-- Fim Janela Filé -->
</html>
</body>