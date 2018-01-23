<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<small><small><font face="Verdana">
<head>
<link rel="shortcut icon" href="http://infocosolucao.esy.es/favicon.ico" type="image/x-icon">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Atualização de Funcionários</title>
<center><img src="http://infocosolucao.esy.es/preencha.png"/> </center>
<center><font color="#000000"><b><h3><u></u></font></h3></b><p></center>
<link rel="stylesheet" type="text/css" href="estilo.css">
<script src="https://code.jquery.com/jquery-3.2.1.min.js"
integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
crossorigin="anonymous"></script>

<!-- Script Valida Recaptcha -->
<script>
    window.onload = function() {
    var recaptcha = document.forms["cadastro"]["g-recaptcha-response"];
    recaptcha.required = true;
    recaptcha.oninvalid = function(e) {
    // fazer algo, no caso to dando um alert
    alert("Por favor complete o captchaba");
      }
   }
   </script>

<!-- Valida Campo -->   
<script type="text/javascript">
function validaCampo()
{
if(document.cadastro.filial.value=="")
	{
	alert("O Campo Filial é obrigatório!");
	return false;
	}
else
	if(document.cadastro.cpfTrab.value=="")
	{
	alert("O Campo CPF é obrigatório!");
	return false;
	}
else
	if(document.cadastro.nisTrab.value=="")
	{
	alert("O Campo PIS é obrigatório!");
	return false;
	}
else
	if(document.cadastro.nmTrab.value=="")
	{
	alert("O Campo Nome é obrigatório!");
	return false;
	}
else
	if(document.cadastro.sexo.value=="")
	{
	alert("O Campo Sexo é obrigatório!");
	return false;
	}
else
	if(document.cadastro.racaCor.value=="")
	{
	alert("O Campo Raca/Cor é obrigatório!");
	return false;
	}
else
	if(document.cadastro.estCiv.value=="")
	{
	alert("O Campo Estado Civil é obrigatório!");
	return false;
	}
else
	if(document.cadastro.grauInstr.value=="")
	{
	alert("O Campo Grau Instrução é obrigatório!");
	return false;
	}
else	
if(document.cadastro.dtNascto1.value=="")
	{
	alert("O Campo Nascimento é obrigatório!");
	return false;
	}
else	
if(document.cadastro.codMunic1.value=="")
	{
	alert("O Campo CEP Cidade Nascimento é obrigatório!");
	return false;
	}
else	
if(document.cadastro.uf1.value=="")
	{
	alert("O Campo UF CTPS é obrigatório!");
	return false;
	}
else	
if(document.cadastro.paisNascto.value=="")
	{
	alert("O Campo Codigo Pais é obrigatório!");
	return false;
	}
else	
if(document.cadastro.paisNac.value=="")
	{
	alert("O Campo País Nascimento é obrigatório!");
	return false;
	}
else	
if(document.cadastro.nmMae.value=="")
	{
	alert("O Campo Nome Mãe é obrigatório!");
	return false;
	}
else	
if(document.cadastro.nmPai.value=="")
	{
	alert("O Campo Nome Pai é obrigatório!");
	return false;
	}
else	
if(document.cadastro.nrCtps.value=="")
	{
	alert("O Campo Número CTPS é obrigatório!");
	return false;
	}
else	
if(document.cadastro.serieCtps.value=="")
	{
	alert("O Campo Série CTPS é obrigatório!");
	return false;
	}
else	
if(document.cadastro.ufCtps.value=="")
	{
	alert("O Campo UF CTPS é obrigatório!");
	return false;
	}
else	
if(document.cadastro.nrRg.value=="")
	{
	alert("O Campo RG é obrigatório!");
	return false;
	}
else	
if(document.cadastro.orgaoEmissor2.value=="")
	{
	alert("O Campo Órgão Emisso RG é obrigatório!");
	return false;
	}
else	
if(document.cadastro.dtExped2.value=="")
	{
	alert("O Campo Data Expedição RG é obrigatório!");
	return false;
	}
else	
if(document.cadastro.tpLograd.value=="")
	{
	alert("O Campo Tipo de Logradouro é obrigatório!");
	return false;
	}
else	
if(document.cadastro.cep.value=="")
	{
	alert("O Campo CEP é obrigatório!");
	return false;
	}
else	
if(document.cadastro.nrLograd.value=="")
	{
	alert("O Campo Número é obrigatório!");
	return false;
	}
else	
if(document.cadastro.defFisica.value=="")
	{
	alert("O Campo Deficiente Físico? é obrigatório!");
	return false;
	}
else	
if(document.cadastro.defVisual.value=="")
	{
	alert("O Campo Deficiente Visual? é obrigatório!");
	return false;
	}
else	
if(document.cadastro.defAuditiva.value=="")
	{
	alert("O Campo Deficiente Auditivo? é obrigatório!");
	return false;
	}
else	
if(document.cadastro.defMental.value=="")
	{
	alert("O Campo Deficiente Mental? é obrigatório!");
	return false;
	}
else	
if(document.cadastro.defIntelectual.value=="")
	{
	alert("O Campo Deficiente Intelectual? 	  é obrigatório!");
	return false;
	}
else	
if(document.cadastro.reabReadap.value=="")
	{
	alert("O Campo Reabilitado/Adaptado? é obrigatório!");
	return false;
	}
else	
if(document.cadastro.trabAposent.value=="")
	{
	alert("O Campo Aposentado? é obrigatório!");
	return false;
	}
else	
if(document.cadastro.fonePrinc.value=="")
	{
	alert("O Campo Telefone é obrigatório!");
	return false;
	}
else	
if(document.cadastro.foneAlternat.value=="")
	{
	alert("O Campo Celular é obrigatório!");
	return false;
	}
else	
if(document.cadastro.emailPrinc.value=="")
	{
	alert("O Campo Email é obrigatório!");
	return false;
	}
else	
if(document.cadastro.emailAltern.value=="")
	{
	alert("O Campo Email Alternativo é obrigatório!");
	return false;
	}
else
return true;
}
<!-- Fim do JavaScript que validará os campos obrigatórios! -->
</script>

<!-- Script CEP -->
    <script type="text/javascript" >
	
        $(document).ready(function() {

            function limpa_formulário_cep() {
                // Limpa valores do formulário de cep.
                $("#rua").val("");
                $("#bairro").val("");
                $("#cidade").val("");
                $("#uf").val("");
                $("#ibge").val("");
            }
            
            //Quando o campo cep perde o foco.
            $("#cep").blur(function() {

                //Nova variável "cep" somente com dígitos.
                var cep = $(this).val().replace(/\D/g, '');

                //Verifica se campo cep possui valor informado.
                if (cep != "") {

                    //Expressão regular para validar o CEP.
                    var validacep = /^[0-9]{8}$/;

                    //Valida o formato do CEP.
                    if(validacep.test(cep)) {

                        //Preenche os campos com "..." enquanto consulta webservice.
                        $("#rua").val("...");
                        $("#bairro").val("...");
                        $("#cidade").val("...");
                        $("#uf").val("...");
                        $("#ibge").val("...");

                        //Consulta o webservice viacep.com.br/
                        $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                            if (!("erro" in dados)) {
                                //Atualiza os campos com os valores da consulta.
                                $("#rua").val(dados.logradouro);
                                $("#bairro").val(dados.bairro);
                                $("#cidade").val(dados.localidade);
                                $("#uf").val(dados.uf);
                                $("#ibge").val(dados.ibge);
                            } //end if.
                            else {
                                //CEP pesquisado não foi encontrado.
                                limpa_formulário_cep();
                                alert("CEP não encontrado.");
                            }
                        });
                    } //end if.
                    else {
                        //cep é inválido.
                        limpa_formulário_cep();
                        alert("Formato de CEP inválido.");
                    }
                } //end if.
                else {
                    //cep sem valor, limpa formulário.
                    limpa_formulário_cep();
                }
            });
        });

    </script>
	
<!-- script CEP Municipio-->
    <script type="text/javascript" >
	
        $(document).ready(function() {

            function cidade_ibge() {
                // Limpa valores do formulário de cep.
                $("#cidade_mun").val("");
                $("#uf1").val("");
                $("#codMunic1").val("");
            }
            
            //Quando o campo cep perde o foco.
            $("#cep_mun").blur(function() {

                //Nova variável "cep" somente com dígitos.
                var cep_mun = $(this).val().replace(/\D/g, '');

                //Verifica se campo cep possui valor informado.
                if (cep_mun != "") {

                    //Expressão regular para validar o CEP.
                    var validacep = /^[0-9]{8}$/;

                    //Valida o formato do CEP.
                    if(validacep.test(cep_mun)) {

                        //Preenche os campos com "..." enquanto consulta webservice.
                        $("#cidade_mun").val("...");
                        $("#uf1").val("...");
                        $("#codMunic1").val("...");

                        //Consulta o webservice viacep.com.br/
                        $.getJSON("https://viacep.com.br/ws/"+ cep_mun +"/json/?callback=?", function(dados) {

                            if (!("erro" in dados)) {
                                //Atualiza os campos com os valores da consulta.
                                $("#cidade_mun").val(dados.localidade);
                                $("#uf1").val(dados.uf);
                                $("#codMunic1").val(dados.ibge);
                            } //end if.
                            else {
                                //CEP pesquisado não foi encontrado.
                                cidade_ibge();
                                alert("CEP não encontrado.");
                            }
                        });
                    } //end if.
                    else {
                        //cep é inválido.
                        cidade_ibge();
                        alert("Formato de CEP inválido.");
                    }
                } //end if.
                else {
                    //cep sem valor, limpa formulário.
                    cidade_ibge();
                }
            });
        });

    </script>	

</head></head>
<body>

<!-- CADASTRAIS -->  
<fieldset>
<legend> Informações Pessoais do Trabalhador </legend>
<form id="cadastro" name="cadastro" method="post" action="cadastro.php" onsubmit="return validaCampo(); return false;">
  <table width="1100" border="0">
    <tr>
      <td>Filial:</td>
      <td><input name="filial" type="text" id="filial" size="4" maxlength="4" />
		<span class="style1"></span></td>
	</tr>  
	
    <tr>
      <td width="69">CPF:</td>
      <td width="546"><input name="cpfTrab" type="text" id="cpfTrab" size="15" maxlength="11" />
        <small><small><i><span class="style1">Apenas Números</span></td></small></small></i>
    </tr>
	
	<tr>
      <td width="69">PIS:</td>
      <td width="546"><input name="nisTrab" type="text" id="nisTrab" size="15" maxlength="11" />
        <span class="style1"></span></td>
    </tr>
	
	<tr>
      <td width="69">Nome Completo:</td>
      <td width="546"><input name="nmTrab" type="text" id="nmTrab" size="70" maxlength="70" />
        <span class="style1"></span></td>
    </tr>
	
	<tr>
      <td>Sexo:</td>
      <td><select name="sexo" id="sexo">
        <option>Selecione...</option>
        <option value="M">Masculino</option>
        <option value="F">Feminino</option>
          </select>
        <span class="style1"></span></td>
	</tr>
	
	<tr>
      <td>Raça/Cor:</td>
      <td><select name="racaCor" id="racaCor">
        <option>Selecione...</option>
        <option value="1">Branca</option>
        <option value="2">Negra</option>
        <option value="3">Parda</option>
        <option value="4">Amarela</option>
        <option value="5">Indígena</option>
        <option value="6">Não Informado</option>
           </select>
        <span class="style1"></span></td>
    </tr>
	
	<tr>
	<td>Estado Civil:</td>
      <td><select name="estCiv" id="estCiv">
        <option>Selecione...</option>
        <option value="1">Solteiro</option>
        <option value="2">Casado</option>
		<option value="3">Divorciado</option>
		<option value="4">Separado</option>
		<option value="5">Viúvo</option>
          </select>
        <span class="style1"></span></td>  	
    </tr>	
	
	<tr>
	<td>Grau de Instrução:</td>
      <td><select name="grauInstr" id="grauInstr">
        <option>Selecione...</option>
        <option value="01">Analfabeto, inclusive o que, embora tenha recebido instrução, não se alfabetizou;</option>
        <option value="02">Até o 5º ano incompleto do Ensino Fundamental (antiga 4ª série) ou que se tenha alfabetizado sem ter frequentado escola regular;</option>
		<option value="03">5º ano completo do Ensino Fundamental;</option>
        <option value="04">Do 6º ao 9º ano do Ensino Fundamental incompleto (antiga 5ª a 8ª série);</option>
		<option value="05">Ensino Fundamental Completo;</option>
        <option value="06">Ensino Médio Incompleto;</option>
		<option value="07">Ensino Médio Completo;</option>
        <option value="08">Educação Superior Incompleta;</option>
		<option value="09">Educação Superior Completa;</option>
        <option value="10">Pós-Graduação Completa;</option>
		<option value="11">Mestrado Completo;</option>
        <option value="12">Doutorado Completo.</option>
	</tr>
	
	<tr>
      <td width="69">Nome Social:</td>
      <td width="546"><input name="nmSoc" type="text" id="nmSoc" size="20" maxlength="0" />
        <span class="style1"></span></td>
    </tr>
	</tr>	
   </td>
  </tr>
 </table>
</fieldset></br>

<!-- FUNCIONAIS -->  
<fieldset>
<legend>Informações de Nascimento do trabalhador</legend>
<form id="cadastro" name="cadastro" method="post" action="cadastro.php" onsubmit="return validaCampo(); return false;">
  <table width="1100" border="0">
    
	<tr>
      <td>Data de Nascimento:</td>
      <td><input name="dtNascto1" type="text" id="dtNascto1" size="10" maxlength="8" />
             <small><small><i><span class="style1">Apenas Números</span></td></small></small></i>
	</tr>
	
	<tr>
      <td>CEP Cidade Nascimento:</td>
      <td><input name="cep_mun" type="text" id="cep_mun" size="10" maxlength="8" />
		<small><small><i><span class="style1">Apenas Números</span></td></small></small></i>
	</tr> 
	
	<tr>
      <td>Munícipio:</td>
      <td><input name="cidade_mun" type="text" id="cidade_mun" size="25" maxlength="7" />
	
	<tr>
      <td>IBGE:</td>
      <td><input name="codMunic1" type="text" id="codMunic1" size="10" maxlength="7" />
	  
	  <tr>
      <td>UF:</td>
      <td><input name="uf1" type="text" id="uf1" size="10" maxlength="2" />
	         
	</tr>
	
	<tr>
	  <td>País de Nascimento:</td>
      <td><select name="paisNascto" id="paisNascto">
        <option>Selecione...</option>		
<option value="008">Abu Dhabi</option>
<option value="013">Afeganistão</option>
<option value="756">África do Sul</option>
<option value="017">Albânia</option>
<option value="023">Alemanha</option>
<option value="037">Andorra</option>
<option value="040">Angola</option>
<option value="041">Anguilla</option>
<option value="043">Antigua</option>
<option value="053">Arábia Saudita</option>
<option value="063">Argentina</option>
<option value="064">Armênia</option>
<option value="065">Aruba</option>
<option value="069">Austrália</option>
<option value="072">Áustria</option>
<option value="073">Azerbaijão</option>
<option value="077">Bahamas</option>
<option value="080">Bahrein</option>
<option value="081">Bangladesh</option>
<option value="083">Barbados</option>
<option value="087">Bélgica</option>
<option value="229">Benin</option>
<option value="090">Bermudas</option>
<option value="101">Botsuana</option>
<option value="105">Brasil</option>
<option value="108">Brunei</option>
<option value="111">Bulgária</option>
<option value="031">Burkina Fasso</option>
<option value="127">Cabo Verde</option>
<option value="145">Camarões</option>
<option value="141">Camboja</option>
<option value="149">Canadá</option>
<option value="153">Cazaquistão</option>
<option value="788">Chade</option>
<option value="158">Chile</option>
<option value="160">China</option>
<option value="848">Cidade do Vaticano</option>
<option value="169">Colômbia</option>
<option value="177">Congo</option>
<option value="190">Coréia do Sul</option>
<option value="193">Costa do Marfim</option>
<option value="196">Costa Rica</option>
<option value="195">Croácia</option>
<option value="232">Dinamarca</option>
<option value="009">Dirce</option>
<option value="235">Dominica</option>
<option value="249">EUA</option>
<option value="240">Egito</option>
<option value="244">Emirados Árabes</option>
<option value="239">Equador</option>
<option value="247">Eslováquia</option>
<option value="246">Eslovênia</option>
<option value="245">Espanha</option>
<option value="251">Estônia</option>
<option value="253">Etiópia</option>
<option value="267">Filipinas</option>
<option value="271">Finlândia</option>
<option value="275">França</option>
<option value="281">Gabão</option>
<option value="285">Gâmbia</option>
<option value="289">Gana</option>
<option value="291">Geórgia</option>
<option value="293">Gibraltar</option>
<option value="297">Granada</option>
<option value="301">Grécia</option>
<option value="309">Guadalupe</option>
<option value="313">Guam</option>
<option value="317">Guatemala</option>
<option value="325">Guiana Francesa</option>
<option value="334">Guiné-bissau</option>
<option value="341">Haiti</option>
<option value="573">Holanda</option>
<option value="345">Honduras</option>
<option value="351">Hong Kong</option>
<option value="355">Hungria</option>
<option value="357">Iêmen</option>
<option value="365">Indonésia</option>
<option value="367">Inglaterra</option>
<option value="375">Irlanda</option>
<option value="379">Islândia</option>
<option value="383">Israel</option>
<option value="386">Itália</option>
<option value="391">Jamaica</option>
<option value="399">Japão</option>
<option value="403">Jordânia</option>
<option value="431">Líbano</option>
<option value="455">Malásia</option>
<option value="474">Marrocos</option>
<option value="493">México</option>
<option value="495">Mônaco</option>
<option value="501">Montserrat</option>
<option value="517">Nepal</option>
<option value="521">Nicarágua</option>
<option value="525">Niger</option>
<option value="528">Nigéria</option>
<option value="538">Noruega</option>
<option value="542">Nova Caledônia</option>
<option value="548">Nova Zelândia</option>
<option value="580">Panamá</option>
<option value="589">Peru</option>
<option value="599">Polinésia Francesa</option>
<option value="603">Polônia</option>
<option value="611">Porto Rico</option>
<option value="607">Portugal</option>
<option value="623">Quênia</option>
<option value="647">Rep. Dominicana</option>
<option value="670">Romênia</option>
<option value="675">Ruanda</option>
<option value="676">Rússia</option>
<option value="728">Senegal</option>
<option value="735">Serra Leoa</option>
<option value="741">Singapura</option>
<option value="744">Síria</option>
<option value="750">Sri Lanka</option>
<option value="759">Sudão</option>
<option value="764">Suécia</option>
<option value="767">Suiça</option>
<option value="770">Suriname</option>
<option value="776">Tailândia</option>
<option value="820">Tunísia</option>
<option value="827">Turquia</option>
<option value="831">Ucrânia</option>
<option value="833">Uganda</option>
<option value="845">Uruguai</option>
<option value="850">Venezuela</option>
<option value="858">Vietnã</option>
<option value="890">Zâmbia</option>
                 
		<td>País de Nacionalidade:</td>	 
		<td><select name="paisNac" id="paisNac">
<option>Selecione...</option>		
<option value="008">Abu Dhabi</option>
<option value="013">Afeganistão</option>
<option value="756">África do Sul</option>
<option value="017">Albânia</option>
<option value="023">Alemanha</option>
<option value="037">Andorra</option>
<option value="040">Angola</option>
<option value="041">Anguilla</option>
<option value="043">Antigua</option>
<option value="053">Arábia Saudita</option>
<option value="063">Argentina</option>
<option value="064">Armênia</option>
<option value="065">Aruba</option>
<option value="069">Austrália</option>
<option value="072">Áustria</option>
<option value="073">Azerbaijão</option>
<option value="077">Bahamas</option>
<option value="080">Bahrein</option>
<option value="081">Bangladesh</option>
<option value="083">Barbados</option>
<option value="087">Bélgica</option>
<option value="229">Benin</option>
<option value="090">Bermudas</option>
<option value="101">Botsuana</option>
<option value="105">Brasil</option>
<option value="108">Brunei</option>
<option value="111">Bulgária</option>
<option value="031">Burkina Fasso</option>
<option value="127">Cabo Verde</option>
<option value="145">Camarões</option>
<option value="141">Camboja</option>
<option value="149">Canadá</option>
<option value="153">Cazaquistão</option>
<option value="788">Chade</option>
<option value="158">Chile</option>
<option value="160">China</option>
<option value="848">Cidade do Vaticano</option>
<option value="169">Colômbia</option>
<option value="177">Congo</option>
<option value="190">Coréia do Sul</option>
<option value="193">Costa do Marfim</option>
<option value="196">Costa Rica</option>
<option value="195">Croácia</option>
<option value="232">Dinamarca</option>
<option value="009">Dirce</option>
<option value="235">Dominica</option>
<option value="249">EUA</option>
<option value="240">Egito</option>
<option value="244">Emirados Árabes</option>
<option value="239">Equador</option>
<option value="247">Eslováquia</option>
<option value="246">Eslovênia</option>
<option value="245">Espanha</option>
<option value="251">Estônia</option>
<option value="253">Etiópia</option>
<option value="267">Filipinas</option>
<option value="271">Finlândia</option>
<option value="275">França</option>
<option value="281">Gabão</option>
<option value="285">Gâmbia</option>
<option value="289">Gana</option>
<option value="291">Geórgia</option>
<option value="293">Gibraltar</option>
<option value="297">Granada</option>
<option value="301">Grécia</option>
<option value="309">Guadalupe</option>
<option value="313">Guam</option>
<option value="317">Guatemala</option>
<option value="325">Guiana Francesa</option>
<option value="334">Guiné-bissau</option>
<option value="341">Haiti</option>
<option value="573">Holanda</option>
<option value="345">Honduras</option>
<option value="351">Hong Kong</option>
<option value="355">Hungria</option>
<option value="357">Iêmen</option>
<option value="365">Indonésia</option>
<option value="367">Inglaterra</option>
<option value="375">Irlanda</option>
<option value="379">Islândia</option>
<option value="383">Israel</option>
<option value="386">Itália</option>
<option value="391">Jamaica</option>
<option value="399">Japão</option>
<option value="403">Jordânia</option>
<option value="431">Líbano</option>
<option value="455">Malásia</option>
<option value="474">Marrocos</option>
<option value="493">México</option>
<option value="495">Mônaco</option>
<option value="501">Montserrat</option>
<option value="517">Nepal</option>
<option value="521">Nicarágua</option>
<option value="525">Niger</option>
<option value="528">Nigéria</option>
<option value="538">Noruega</option>
<option value="542">Nova Caledônia</option>
<option value="548">Nova Zelândia</option>
<option value="580">Panamá</option>
<option value="589">Peru</option>
<option value="599">Polinésia Francesa</option>
<option value="603">Polônia</option>
<option value="611">Porto Rico</option>
<option value="607">Portugal</option>
<option value="623">Quênia</option>
<option value="647">Rep. Dominicana</option>
<option value="670">Romênia</option>
<option value="675">Ruanda</option>
<option value="676">Rússia</option>
<option value="728">Senegal</option>
<option value="735">Serra Leoa</option>
<option value="741">Singapura</option>
<option value="744">Síria</option>
<option value="750">Sri Lanka</option>
<option value="759">Sudão</option>
<option value="764">Suécia</option>
<option value="767">Suiça</option>
<option value="770">Suriname</option>
<option value="776">Tailândia</option>
<option value="820">Tunísia</option>
<option value="827">Turquia</option>
<option value="831">Ucrânia</option>
<option value="833">Uganda</option>
<option value="845">Uruguai</option>
<option value="850">Venezuela</option>
<option value="858">Vietnã</option>
<option value="890">Zâmbia</option>
 
			  
    </tr>

	<tr>
      <td width="69">Nome Mãe:</td>
      <td width="546"><input name="nmMae" type="text" id="nmMae" size="50" maxlength="70" />
        <span class="style1"></span></td>
		
	<td width="69">Nome Pai:</td>
      <td width="546"><input name="nmPai" type="text" id="nmPai" size="50" maxlength="70" />
        <span class="style1"></span></td>	
    </tr>
	</table>
</fieldset></br>

<!-- DOCUMENTOS -->  
<fieldset>
<legend> Informações de Documentos do Trabalhador </legend>
<form id="cadastro" name="cadastro" method="post" action="cadastro.php" onsubmit="return validaCampo(); return false;">
  <table width="1300" border="0">
    <tr>
      <td>Carteira de Trabalho:</td>
      <td><input name="nrCtps" type="text" id="nrCtps" size="15" maxlength="11" />
		<span class="style1"></span></td>
	
      <td>Serie CTPS:</td>
      <td><input name="serieCtps" type="text" id="serieCtps" size="10" maxlength="5" />
		<span class="style1"></span></td>
		
		<td>UF CTPS:</td>
      <td><select name="ufCtps" id="ufCtps">
        <option>Selecione...</option>
		<option value="AC">AC</option>
        <option value="AL">AL</option>
        <option value="AM">AM</option>
		<option value="AP">AP</option>
		<option value="BA">BA</option>
		<option value="CE">CE</option>
        <option value="DF">DF</option>
		<option value="ES">ES</option>
		<option value="GO">GO</option>
		<option value="MA">MA</option>
        <option value="MG">MG</option>
		<option value="MS">MS</option>
		<option value="MT">MT</option>
		<option value="PA">PA</option>
        <option value="PB">PB</option>
		<option value="PE">PE</option>
		<option value="PI">PI</option>
		<option value="PR">PR</option>
        <option value="RJ">RJ</option>
		<option value="RN">RN</option>
		<option value="RO">RO</option>
		<option value="RR">RR</option>
        <option value="RS">RS</option>
		<option value="SC">SC</option>
		<option value="SE">SE</option>
		<option value="SP">SP</option>
		<option value="TO">TO</option>
	</tr>
	
	<tr>
      <td>Número DNI:</td>
      <td><input name="nrRic" type="text" id="nrRic" size="15" maxlength="14" />
		<span class="style1"></span></td>
		
	 <td>Órgão Emissor:</td>
      <td><input name="orgaoEmissor1" type="text" id="orgaoEmissor1" size="10" maxlength="20" />
		<span class="style1"></span></td>
	   	
		
	  <td>Data de Exp.:</td>
      <td><input name="dtExped1" type="text" id="dtExped1" size="10" maxlength="8" /></td>
    </tr>        		
	<tr>
      <td>RG:</td>
      <td><input name="nrRg" type="text" id="nrRg" size="15" maxlength="14" />
		<span class="style1"></span></td>
		
		<td>Órgão Emissor:</td>
      <td><input name="orgaoEmissor2" type="text" id="orgaoEmissor2" size="10" maxlength="20" />
		<span class="style1"></span></td>
		
	<td>Data de Exp.:</td>
      <td><input name="dtExped2" type="text" id="dtExped2" size="10" maxlength="8" />
		<span class="style1"></span></td>
	</tr>	
	<tr> 
    	<tr>
      <td>Reg. Nac. Estrang:</td>
      <td><input name="nrRne" type="text" id="nrRne" size="15" maxlength="14" />
		<span class="style1"></span></td>
		
		<td>Órgão Emissor:</td>
      <td><input name="orgaoEmissor3" type="text" id="orgaoEmissor3" size="10" maxlength="20" />
		<span class="style1"></span></td>
		
	 <td>Data de Exp.:</td>
      <td><input name="dtExped3" type="text" id="dtExped3" size="10" maxlength="8" />
		<span class="style1"></span></td> 
	
	<tr> 
    	<tr>
      <td>Nº Insc.Órgão Classe:</td>
      <td><input name="nrOc" type="text" id="nrOc" size="15" maxlength="14" />
		<span class="style1"></span></td>
		
		<td>Órgão Emissor:</td>
      <td><input name="orgaoEmissor4" type="text" id="orgaoEmissor4" size="10" maxlength="20" />
		<span class="style1"></span></td>
		
	  <td>Data de Exp.:</td>
      <td><input name="dtExped4" type="text" id="dtExped4" size="10" maxlength="8" />
		<span class="style1"></span></td>

	<td>Data de Validade:</td>
      <td><input name="dtValid1" type="text" id="dtValid1" size="10" maxlength="8" />
		<span class="style1"></span></td> 	
	
	<tr> 
    	<tr>
      <td>Número CNH:</td>
      <td><input name="nrRegCnh" type="text" id="nrRegCnh" size="15" maxlength="12" />
		<span class="style1"></span></td>
	
    <td>Data de Exp.:</td>
      <td><input name="dtExped" type="text" id="dtExped" size="10" maxlength="8" />
		<span class="style1"></span></td>
	
		
		
	  <td>UF CNH:</td>
      <td><select name="ufCnh" id="ufCnh">
        <option>Selecione...</option>
		<option value="AC">AC</option>
        <option value="AL">AL</option>
        <option value="AM">AM</option>
		<option value="AP">AP</option>
		<option value="BA">BA</option>
		<option value="CE">CE</option>
        <option value="DF">DF</option>
		<option value="ES">ES</option>
		<option value="GO">GO</option>
		<option value="MA">MA</option>
        <option value="MG">MG</option>
		<option value="MS">MS</option>
		<option value="MT">MT</option>
		<option value="PA">PA</option>
        <option value="PB">PB</option>
		<option value="PE">PE</option>
		<option value="PI">PI</option>
		<option value="PR">PR</option>
        <option value="RJ">RJ</option>
		<option value="RN">RN</option>
		<option value="RO">RO</option>
		<option value="RR">RR</option>
        <option value="RS">RS</option>
		<option value="SC">SC</option>
		<option value="SE">SE</option>
		<option value="SP">SP</option>
		<option value="TO">TO</option>	
		
	<td>Data de Validade:</td>
      <td><input name="dtValid" type="text" id="dtValid" size="10" maxlength="8" />
		<span class="style1"></span></td>	
		
    <td>Data 1ª Habilitação:</td>
      <td><input name="dtPriHab" type="text" id="dtPriHab" size="10" maxlength="8" />
		<span class="style1"></span></td>

	<td>Cat. CNH:</td>
      <td><select name="categoriaCnh" id="categoriaCnh">
        <option>Selecione...</option>
		<option value="A">A</option>
        <option value="B">B</option>
        <option value="C">C</option>
		<option value="D">D</option>
		<option value="E">E</option>
		<option value="AB">AB</option>
        <option value="AC">AC</option>
		<option value="AD">AD</option>
		<option value="AE">AE</option>
			
	</tr>	 
   </td>
  </tr>
 </table>
</fieldset></br>

<!-- Endereço -->  
<fieldset>
<legend> Informações do Endereço do Trabalhador </legend>
<form id="cadastro" name="cadastro" method="post" action="cadastro.php" onsubmit="return validaCampo(); return false;">
  <table width="300" border="0">
  
    <td>Tp. Logradouro:</td>
      <td><select name="tpLograd" id="tpLograd">
        <option>Selecione...</option>
		<option value="AL">Alameda</option>
        <option value="AV">Avenida</option>
        <option value="BAL">Balneário</option>
		<option value="BL">Bloco</option>
		<option value="CH">Chácara</option>
		<option value="CJ">Conjunto</option>
        <option value="COND">Condomínio</option>
		<option value="EST">Estrada</option>
		<option value="FAZ">Fazenda</option>
		<option value="GAL">Galeria</option>
		<option value="GJA">Granja</option>
		<option value="JD">Jardim</option>
		<option value="LG">Largo</option>
		<option value="LOT">Loteamento</option>
		<option value="PÇ">Praça</option>
		<option value="PR">Praia</option>
		<option value="PRQ">Parque</option>
		<option value="Q">Quadra</option>
		<option value="R">Rua</option>
		<option value="ST">Setor</option>
		<option value="TV">Travessa</option>
		<option value="VL">Vila</option>
		
     <tr>
      <td>CEP:</td>
      <td><input name="cep" type="text" id="cep" size="10" maxlength="8" />
		<small><small><i><span class="style1">Apenas Números</span></td></small></small></i>
	</tr>  
	
  	<tr>
	<td>Endereço:</td>
      <td><input name="rua" type="text" id="rua" size="80" />
		<span class="style1"></span></td>
	</tr>
    
    <tr>	
	<td>Bairro:</td>
      <td><input name="bairro" type="text" id="bairro" size="60" />
		<span class="style1"></span></td>
		
	<td>Número:</td>
      <td><input name="nrLograd" type="text" id="nrLograd" size="5" maxlength="10" />
		<span class="style1"></span></td>
		
	<td>Compl:</td>
      <td><input name="complemento" type="text" id="complemento" size="10" maxlength="30" />
		<span class="style1"></span></td>	
	</tr>
	
	<tr>
	<td>Cidade:</td>
      <td><input name="cidade" type="text" id="cidade" size="40" />
		<span class="style1"></span></td>
	</tr>
	
	<tr>
	<td>Estado:</td>
      <td><input name="uf" type="text" id="uf" size="2" />
		<span class="style1"></span></td>
	</tr>
	
	<tr>
	<td>IBGE:</td>
      <td><input name="ibge" type="text" id="ibge" size="7" />
		<span class="style1"></span></td>
	</tr>		  
   </td>
  </tr>
 </table>
</fieldset></br>

<!-- Reside Exterior -->  
<fieldset>
<legend> Preenchido Caso Trabalhador Resida no Exterior  </legend>
<form id="cadastro" name="cadastro" method="post" action="cadastro.php" onsubmit="return validaCampo(); return false;">
  <table width="300" border="0">
    	
	<tr>
	<td>País Residente:</td>
      <td><select name="paisResid" id="paisResid">
        <option>Selecione...</option>		
<option value="008">Abu Dhabi</option>
<option value="013">Afeganistão</option>
<option value="756">África do Sul</option>
<option value="017">Albânia</option>
<option value="023">Alemanha</option>
<option value="037">Andorra</option>
<option value="040">Angola</option>
<option value="041">Anguilla</option>
<option value="043">Antigua</option>
<option value="053">Arábia Saudita</option>
<option value="063">Argentina</option>
<option value="064">Armênia</option>
<option value="065">Aruba</option>
<option value="069">Austrália</option>
<option value="072">Áustria</option>
<option value="073">Azerbaijão</option>
<option value="077">Bahamas</option>
<option value="080">Bahrein</option>
<option value="081">Bangladesh</option>
<option value="083">Barbados</option>
<option value="087">Bélgica</option>
<option value="229">Benin</option>
<option value="090">Bermudas</option>
<option value="101">Botsuana</option>
<option value="105">Brasil</option>
<option value="108">Brunei</option>
<option value="111">Bulgária</option>
<option value="031">Burkina Fasso</option>
<option value="127">Cabo Verde</option>
<option value="145">Camarões</option>
<option value="141">Camboja</option>
<option value="149">Canadá</option>
<option value="153">Cazaquistão</option>
<option value="788">Chade</option>
<option value="158">Chile</option>
<option value="160">China</option>
<option value="848">Cidade do Vaticano</option>
<option value="169">Colômbia</option>
<option value="177">Congo</option>
<option value="190">Coréia do Sul</option>
<option value="193">Costa do Marfim</option>
<option value="196">Costa Rica</option>
<option value="195">Croácia</option>
<option value="232">Dinamarca</option>
<option value="009">Dirce</option>
<option value="235">Dominica</option>
<option value="249">EUA</option>
<option value="240">Egito</option>
<option value="244">Emirados Árabes</option>
<option value="239">Equador</option>
<option value="247">Eslováquia</option>
<option value="246">Eslovênia</option>
<option value="245">Espanha</option>
<option value="251">Estônia</option>
<option value="253">Etiópia</option>
<option value="267">Filipinas</option>
<option value="271">Finlândia</option>
<option value="275">França</option>
<option value="281">Gabão</option>
<option value="285">Gâmbia</option>
<option value="289">Gana</option>
<option value="291">Geórgia</option>
<option value="293">Gibraltar</option>
<option value="297">Granada</option>
<option value="301">Grécia</option>
<option value="309">Guadalupe</option>
<option value="313">Guam</option>
<option value="317">Guatemala</option>
<option value="325">Guiana Francesa</option>
<option value="334">Guiné-bissau</option>
<option value="341">Haiti</option>
<option value="573">Holanda</option>
<option value="345">Honduras</option>
<option value="351">Hong Kong</option>
<option value="355">Hungria</option>
<option value="357">Iêmen</option>
<option value="365">Indonésia</option>
<option value="367">Inglaterra</option>
<option value="375">Irlanda</option>
<option value="379">Islândia</option>
<option value="383">Israel</option>
<option value="386">Itália</option>
<option value="391">Jamaica</option>
<option value="399">Japão</option>
<option value="403">Jordânia</option>
<option value="431">Líbano</option>
<option value="455">Malásia</option>
<option value="474">Marrocos</option>
<option value="493">México</option>
<option value="495">Mônaco</option>
<option value="501">Montserrat</option>
<option value="517">Nepal</option>
<option value="521">Nicarágua</option>
<option value="525">Niger</option>
<option value="528">Nigéria</option>
<option value="538">Noruega</option>
<option value="542">Nova Caledônia</option>
<option value="548">Nova Zelândia</option>
<option value="580">Panamá</option>
<option value="589">Peru</option>
<option value="599">Polinésia Francesa</option>
<option value="603">Polônia</option>
<option value="611">Porto Rico</option>
<option value="607">Portugal</option>
<option value="623">Quênia</option>
<option value="647">Rep. Dominicana</option>
<option value="670">Romênia</option>
<option value="675">Ruanda</option>
<option value="676">Rússia</option>
<option value="728">Senegal</option>
<option value="735">Serra Leoa</option>
<option value="741">Singapura</option>
<option value="744">Síria</option>
<option value="750">Sri Lanka</option>
<option value="759">Sudão</option>
<option value="764">Suécia</option>
<option value="767">Suiça</option>
<option value="770">Suriname</option>
<option value="776">Tailândia</option>
<option value="820">Tunísia</option>
<option value="827">Turquia</option>
<option value="831">Ucrânia</option>
<option value="833">Uganda</option>
<option value="845">Uruguai</option>
<option value="850">Venezuela</option>
<option value="858">Vietnã</option>
<option value="890">Zâmbia</option>
</tr>	
	

	<tr>
	<td>Endereço:</td>
      <td><input name="dscLograd1" type="text" id="dscLograd" size="80" />
		<span class="style1"></span></td>
	</tr>	
  
    <tr>	
	<td>Bairro:</td>
      <td><input name="bairro1" type="text" id="bairro1" size="60" />
		<span class="style1"></span></td>
		
	<td>Número:</td>
      <td><input name="nrLograd1" type="text" id="nrLograd1" size="5" maxlength="10" />
		<span class="style1"></span></td>
		
	<td>Compl:</td>
      <td><input name="complemento1" type="text" id="complemento1" size="10" maxlength="30" />
		<span class="style1"></span></td>	
	</tr>  
  
    <tr>
	<td>Cidade:</td>
      <td><input name="nmCid" type="text" id="nmCid" size="50" />
		<span class="style1"></span></td>
	</tr>	 
  
    <tr>
      <td>CEP:</td>
      <td><input name="codPostal" type="text" id="codPostal" size="10" maxlength="12" />
		<span class="style1"></span></td>
	</tr>  
	
 	</tr>		  
   </td>
  </tr>
 </table>
</fieldset></br>

<!-- Trabalhador Exterior -->  
<fieldset>
<legend> Preenchido Caso Trabalhador Seja Estrangeiro  </legend>
<form id="cadastro" name="cadastro" method="post" action="cadastro.php" onsubmit="return validaCampo(); return false;">
  <table width="300" border="0">
    
    <tr>
      <td>Data de Chegada:</td>
      <td><input name="dtChegada" type="text" id="dtChegada" size="10" maxlength="8" />
             <small><small><i><span class="style1">Apenas Números</span></td></small></small></i>
	</tr>

	<tr>
	<td>Class. Estrangeiro:</td>
      <td><select name="classTrabEstrang" id="classTrabEstrang">
        <option>Selecione...</option>
        <option value="1">Visto permanente;</option>
        <option value="2">Visto temporário;</option>
		<option value="3">Asilado;;</option>
        <option value="4">Refugiado;;</option>
		<option value="5">Solicitante de Refúgio;</option>
        <option value="6">Residente fora do Brasil;</option>
		<option value="7">Deficiente físico e com mais de 51 anos;</option>
        <option value="8">Com residência provisória e anistiado, em situação irregular;</option>
		<option value="9">Permanência no Brasil em razão de filhos ou cônjuge brasileiros;</option>
        <option value="10">Beneficiado pelo acordo entre países do Mercosul;</option>
		<option value="11">Dependente de agente diplomático e/ou consular de países que mantém convênio de reciprocidade para o exercício de atividade remunerada no Brasil;</option>
        <option value="12">Beneficiado pelo Tratado de Amizade, Cooperação e Consulta entre a República Federativa do Brasil e a República Portuguesa;</option>
	</tr>
	
	<tr>	
	<td>Casado com Brasileiro(a)?</td>
      <td><input name="casadoBr" type="radio" value="S" />
        Sim
        <input name="casadoBr" type="radio" value="N" />
        Não <span class="style1"></span> </td>	
	<tr>	
	
	<tr>	
	<td>Filhos Brasileiros?</td>
      <td><input name="filhosBr" type="radio" value="S" />
        Sim
        <input name="filhosBr" type="radio" value="N" />
        Não <span class="style1"></span> </td>	
	<tr>	
 	</tr>		  
   </td>
  </tr>
 </table>
</fieldset></br>

		
<!-- Pessoa com Deficiencia-->  
<fieldset>
<legend> Pessoa com Deficiência </legend>
<form id="cadastro" name="cadastro" method="post" action="cadastro.php" onsubmit="return validaCampo(); return false;">
 <table width="300" border="0">  
  
    <tr>
      <td>Deficiente Físico?</td>
      <td><input name="defFisica" type="radio" value="S"/>
        Sim
        <input name="defFisica" type="radio" value="N" />
        Não <span class="style1"></span> </td>
	<tr>	
	<td>Deficiente Visual?</td>
      <td><input name="defVisual" type="radio" value="S" />
        Sim
        <input name="defVisual" type="radio" value="N" />
        Não <span class="style1"></span> </td>	
	<tr>	
	<td>Deficiente Auditivo?</td>
      <td><input name="defAuditiva" type="radio" value="S" />
        Sim
        <input name="defAuditiva" type="radio" value="N" />
        Não <span class="style1"></span> </td>	
	<tr>	
	<td>Deficiente Mental?</td>
      <td><input name="defMental" type="radio" value="S" />
        Sim
        <input name="defMental" type="radio" value="N" />
        Não <span class="style1"></span> </td>		
	<tr>
	<td>Deficiente Intelectual?</td>
      <td><input name="defIntelectual" type="radio" value="S" />
        Sim
        <input name="defIntelectual" type="radio" value="N" />
        Não <span class="style1"></span> </td>	
	<tr>
    <td>Reabilitado/Adaptado?</td>
      <td><input name="reabReadap" type="radio" value="S"/>
        Sim
        <input name="reabReadap" type="radio" value="N" />
        Não <span class="style1"></span> </td>	
	
	<tr>
      <td>Obrservação:</td>
      <td><input name="observacao" type="text" id="observacao" size="100" maxlength="255" />
        <span class="style1"></span></td>
    
	</tr>	
   </td>
  </tr>
 </table>
</fieldset></br>

<!-- Dependente -->  
<fieldset>
<legend> Informações dos Dependentes  </legend>
<form id="cadastro" name="cadastro" method="post" action="cadastro.php" onsubmit="return validaCampo(); return false;">
  <table width="300" border="0">
    
    <tr>
	<td>Tipo de Dependente:</td>
      <td><select name="tpDep" id="tpDep">
        <option>Selecione...</option>
        <option value="01">Cônjuge;</option>
        <option value="02">Companheiro(a) com o(a) qual tenha filho ou viva há mais de 5 (cinco) anos ou possua Declaração de União Estável;</option>
		<option value="03">Filho(a) ou enteado(a);</option>
        <option value="04">Filho(a) ou enteado(a), universitário(a) ou cursando escola técnica de 2º grau;</option>
		<option value="06">Irmão(ã), neto(a) ou bisneto(a) sem arrimo dos pais, do(a) qual detenha a guarda judicial;</option>
		<option value="07">Irmão(ã), neto(a) ou bisneto(a) sem arrimo dos pais, universitário(a) ou cursando escola técnica de 2° grau, do(a) qual detenha a guarda judicial;</option>
        <option value="09">Pais, avós e bisavós;</option>
        <option value="10">Menor pobre do qual detenha a guarda judicial;</option>
		<option value="11">A pessoa absolutamente incapaz, da qual seja tutor ou curador;</option>
        <option value="12">Ex-cônjuge;</option>
		<option value="99">Agregado/Outros;</option>
	</tr>
	
	<tr>
      <td width="69">Nome:</td>
      <td width="546"><input name="nmDep" type="text" id="nmDep" size="70" maxlength="70" />
        <span class="style1"></span></td>
    </tr>
	
	<tr>
      <td>Data de Nascimento:</td>
      <td><input name="dtNascto" type="text" id="dtNascto" size="10" maxlength="8" />
             <small><small><i><span class="style1">Apenas Números</span></td></small></small></i>
	</tr>
	
	<tr>
      <td width="69">CPF:</td>
      <td width="546"><input name="cpfDep" type="text" id="cpfDep" size="15" maxlength="11" />
        <span class="style1"></span></td>
    </tr>
	
	<tr>
      <td>Deduz IRRF?</td>
      <td><input name="depIRRF" type="radio" value="S" />
        Sim
        <input name="depIRRF" type="radio" value="N" />
        Não <span class="style1"></span> </td>
	<tr>	
	<td>Salário Família?</td>
      <td><input name="depSF" type="radio" value="S" />
        Sim
        <input name="depSF" type="radio" value="N" />
        Não <span class="style1"></span> </td>	
	</tr>	
	<tr>	
	<td>Defic. Fisica ou Mental?</td>
      <td><input name="incTrab" type="radio" value="S" />
        Sim
        <input name="incTrab" type="radio" value="N" />
        Não <span class="style1"></span> </td>	
	</tr>		  
   </table>
</fieldset></br>

<!-- Aposentadoria -->
<fieldset>
<legend> Informações de Aposentadoria do Trabalhador </legend>
<form id="cadastro" name="cadastro" method="post" action="cadastro.php" onsubmit="return validaCampo(); return false;">
  <table width="300" border="0">

    <tr>	
	<td>Aposentado?</td>
      <td><input name="trabAposent" type="radio" value="S" />
        Sim
        <input name="trabAposent" type="radio" value="N" />
        Não <span class="style1"></span> </td>	
	<tr>	
  
      </tr>	
	<tr>	
 	</tr>		  
   </td>
  </tr>
 </table>
</fieldset></br>

<!-- Contato -->
<fieldset>
<legend> Informações de Contato </legend>
<form id="cadastro" name="cadastro" method="post" action="cadastro.php" onsubmit="return validaCampo(); return false;">
  <table width="350" border="0">
<tr>
      <td>Telefone:</td>
      <td><input name="fonePrinc" type="text" id="fonePrinc" value="(DDD)XXXX-XXXX" onfocus="this.value='';" size="15" maxlength="13" />
             <small><small><i><span class="style1">Apenas Números</span></td></small></small></i>
	</tr>
	
	  <td>Celular:</td>
      <td><input name="foneAlternat" type="text" id="foneAlternat" value="(DDD)9XXXX-XXXX" onfocus="this.value='';" size="15" maxlength="13" />
             <small><small><i><span class="style1">Apenas Números</span></td></small></small></i>
	</tr>
	
	<tr>
      <td>Email:</td>
      <td><input name="emailPrinc" type="text" id="emailPrinc" value="seu@email.com.br" onfocus="this.value='';" size="40" maxlength="60" />
      <span class="style1"></span></td>
    </tr>	
	
	<tr>
      <td>Email Alternativo:</td>
      <td><input name="emailAltern" type="text" id="emailAltern" value="seu@email.com.br" onfocus="this.value='';" size="40" maxlength="60" />
      <span class="style1"></span></td>
    </tr>	
	</table>
</fieldset></br>	


<!-- Observacoes-->  
<fieldset>

<legend> Observações </legend>
 <table cellspacing="10">
   
<small>- O campo <u>FILIAL</u> deve ser preenchido com os 4 números depois da barra / contidos no CNPJ da filial<br>
Exemplo: CNPJ 48.555.775/0075-96, número da filial 0075.<p>

</center><p>

<center><b>Qualquer dúvida, entre em contato com o Departamento Pessoal.</b><br>
        <b><a href="mailto:dep.pessoal@fazenda.org.br">dep.pessoal@fazenda.org.br</a></b><br>
		<b>Telefone:(12) 3128-8800</b>
    </table>
    </fieldset><br>
		
<script src='https://www.google.com/recaptcha/api.js?hl=pt-BR'></script>
<div class="g-recaptcha" data-sitekey="6Ldk3UEUAAAAALPW2b--M314x1FixK8LxwA8ydaT"></div><br>

    <td>
        <input name="cadastrar" type="submit" id="cadastrar" value="Enviar" />
		
        <input name="limpar" type="reset" id="limpar" value="Limpar" />
		
		<input type="button" value="Imprimir" onClick="window.print()"/>
          
          <br></p></b>
      <p>&nbsp; </p></td>
    
</form>

<!-- FIM --> 
<br><br><br><footer>
<center><img src="http://infocosolucao.esy.es/rodape.png"/> </center>
     <center>&copy; 2017 &#8226; 2017 TI - Escritório Central &#8226 <span class="negrito">Tel</span>:<span class="azul_skype">(12) 3128 8825</span> &#8226; <a href="mailto:gustavofreire.ti@gmail.com"> ®Todos Direitos Reservados - Gustavo Freire</a> &#8226 <span class="negrito">Caixa postal</span> 529 &#8226 <span class="negrito">CEP</span> 12511-970 - Guaratinguet&aacute;/SP</div>
  </footer>

</body>
</html>
