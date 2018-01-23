<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Atualizazado com Sucesso!</title>
</head>

<body>
<?php 

$search = explode(",","ç,æ,œ,á,é,í,ó,ú,ã,à,è,ì,ò,ù,ä,ë,ï,ö,ü,ÿ,â,ê,î,ô,û,å,e,i,ø,u");
$replace = explode(",","c,ae,oe,a,e,i,o,u,a,a,e,i,o,u,a,e,i,o,u,y,a,e,i,o,u,a,e,i,o,u");

// RECEBENDO OS DADOS PREENCHIDOS DO FORMULÁRIO !
$filial = strtoupper($filial = str_replace($search, $replace, ($_POST ["filial"]))); //atribuição dos campos vindo do formulário para variavel
$cpfTrab = strtoupper($cpfTrab = str_replace($search, $replace, ($_POST ["cpfTrab"])));
$nisTrab = strtoupper($nisTrab = str_replace($search, $replace, ($_POST ["nisTrab"])));
$nmTrab = strtoupper($nmTrab = str_replace($search, $replace, ($_POST ["nmTrab"])));
$sexo = strtoupper($sexo = str_replace($search, $replace, ($_POST ["sexo"])));
$racaCor = strtoupper($racaCor = str_replace($search, $replace, ($_POST ["racaCor"])));
$estCiv = strtoupper($estCiv = str_replace($search, $replace, ($_POST ["estCiv"])));
$grauInstr = strtoupper($grauInstr = str_replace($search, $replace, ($_POST ["grauInstr"])));
$nmSoc = strtoupper($nmSoc = str_replace($search, $replace, ($_POST ["nmSoc"])));
$dtNascto1	= strtoupper ($dtNascto1 = str_replace ($search, $replace, ($_POST ["dtNascto1"])));	
$codMunic1	= strtoupper ($codMunic1 = str_replace ($search, $replace, ($_POST ["codMunic1"])));	
$uf1	= strtoupper ($uf1 = str_replace ($search, $replace, ($_POST ["uf1"])));	
$paisNascto	= strtoupper ($paisNascto = str_replace ($search, $replace, ($_POST ["paisNascto"])));	
$paisNac	= strtoupper ($paisNac = str_replace ($search, $replace, ($_POST ["paisNac"])));	
$nmMae	= strtoupper ($nmMae = str_replace ($search, $replace, ($_POST ["nmMae"])));	
$nmPai	= strtoupper ($nmPai = str_replace ($search, $replace, ($_POST ["nmPai"])));	
$nrCtps	= strtoupper ($nrCtps = str_replace ($search, $replace, ($_POST ["nrCtps"])));	
$serieCtps	= strtoupper ($serieCtps = str_replace ($search, $replace, ($_POST ["serieCtps"])));
$ufCtps	= strtoupper ($ufCtps = str_replace ($search, $replace, ($_POST ["ufCtps"])));	
$nrRic	= strtoupper ($nrRic = str_replace ($search, $replace, ($_POST ["nrRic"])));	
$orgaoEmissor1	= strtoupper ($orgaoEmissor1 = str_replace ($search, $replace, ($_POST ["orgaoEmissor1"])));	
$dtExped1	= strtoupper ($dtExped1 = str_replace ($search, $replace, ($_POST ["dtExped1"])));	
$nrRg	= strtoupper ($nrRg = str_replace ($search, $replace, ($_POST ["nrRg"])));
$orgaoEmissor2	= strtoupper ($orgaoEmissor2 = str_replace ($search, $replace, ($_POST ["orgaoEmissor2"])));
$dtExped2	= strtoupper ($dtExped2 = str_replace ($search, $replace, ($_POST ["dtExped2"])));
$nrRne = strtoupper ($nrRne = str_replace ($search, $replace, ($_POST ["nrRne"])));
$orgaoEmissor3	= strtoupper ($orgaoEmissor3 = str_replace ($search, $replace, ($_POST ["orgaoEmissor3"])));
$dtExped3	= strtoupper ($dtExped3 = str_replace ($search, $replace, ($_POST ["dtExped3"])));
$nrOc	= strtoupper ($nrOc = str_replace ($search, $replace, ($_POST ["nrOc"])));
$orgaoEmissor4	= strtoupper ($orgaoEmissor4 = str_replace ($search, $replace, ($_POST ["orgaoEmissor4"])));
$dtExped4	= strtoupper ($dtExped4 = str_replace ($search, $replace, ($_POST ["dtExped4"])));	
$dtValid1	= strtoupper ($dtValid1 = str_replace ($search, $replace, ($_POST ["dtValid1"])));	
$nrRegCnh	= strtoupper ($nrRegCnh = str_replace ($search, $replace, ($_POST ["nrRegCnh"])));			
$dtExped	= strtoupper ($dtExped = str_replace ($search, $replace, ($_POST ["dtExped"])));		
$ufCnh	= strtoupper ($ufCnh = str_replace ($search, $replace, ($_POST ["ufCnh"])));	
$dtValid	= strtoupper ($dtValid = str_replace ($search, $replace, ($_POST ["dtValid"])));	
$dtPriHab	= strtoupper ($dtPriHab = str_replace ($search, $replace, ($_POST ["dtPriHab"])));	
$categoriaCnh	= strtoupper ($categoriaCnh = str_replace ($search, $replace, ($_POST ["categoriaCnh"])));	
$tpLograd	= strtoupper ($tpLograd = str_replace ($search, $replace, ($_POST ["tpLograd"])));
$rua	= strtoupper ($rua = str_replace ($search, $replace, ($_POST ["rua"])));
$nrLograd	= strtoupper ($nrLograd = str_replace ($search, $replace, ($_POST ["nrLograd"])));
$complemento	= strtoupper ($complemento = str_replace ($search, $replace, ($_POST ["complemento"])));	
$bairro = strtoupper ($bairro = str_replace ($search, $replace, ($_POST ["bairro"])));	
$cep	= strtoupper ($cep = str_replace ($search, $replace, ($_POST ["cep"])));;	
$ibge	= strtoupper ($ibge = str_replace ($search, $replace, ($_POST ["ibge"])));
$uf	= strtoupper ($uf = str_replace ($search, $replace, ($_POST ["uf"])));
$cidade	= strtoupper ($cidade = str_replace ($search, $replace, ($_POST ["cidade"])));	
$paisResid	= strtoupper ($paisResid = str_replace ($search, $replace, ($_POST ["paisResid"])));	
$dscLograd1	= strtoupper ($dscLograd1 = str_replace ($search, $replace, ($_POST ["dscLograd1"])));	
$nrLograd1	= strtoupper ($nrLograd1 = str_replace ($search, $replace, ($_POST ["nrLograd1"])));
$complemento1	= strtoupper ($complemento1 = str_replace ($search, $replace, ($_POST ["complemento1"])));	
$bairro1	= strtoupper ($bairro1 = str_replace ($search, $replace, ($_POST ["bairro1"])));	
$nmCid	= strtoupper ($nmCid = str_replace ($search, $replace, ($_POST ["nmCid"])));	
$codPostal	= strtoupper ($codPostal = str_replace ($search, $replace, ($_POST ["codPostal"])));	
$dtChegada	= strtoupper ($dtChegada = str_replace ($search, $replace, ($_POST ["dtChegada"])));
$classTrabEstrang	= strtoupper ($classTrabEstrang = str_replace ($search, $replace, ($_POST ["classTrabEstrang"])));	
$casadoBr	= strtoupper ($casadoBr = str_replace ($search, $replace, ($_POST ["casadoBr"])));
$filhosBr	= strtoupper ($filhosBr = str_replace ($search, $replace, ($_POST ["filhosBr"])));
$defFisica	= strtoupper ($defFisica = str_replace ($search, $replace, ($_POST ["defFisica"])));	
$defVisual	= strtoupper ($defVisual = str_replace ($search, $replace, ($_POST ["defVisual"])));
$defAuditiva	= strtoupper ($defAuditiva = str_replace ($search, $replace, ($_POST ["defAuditiva"])));	
$defMental	= strtoupper ($defMental = str_replace ($search, $replace, ($_POST ["defMental"])));
$defIntelectual	= strtoupper ($defIntelectual = str_replace ($search, $replace, ($_POST ["defIntelectual"])));	
$reabReadap= strtoupper ($reabReadap = str_replace ($search, $replace, ($_POST ["reabReadap"])));	
$observacao	= strtoupper ($observacao = str_replace ($search, $replace, ($_POST ["observacao"])));	
$tpDep	= strtoupper ($tpDep = str_replace ($search, $replace, ($_POST ["tpDep"])));
$nmDep	= strtoupper ($nmDep = str_replace ($search, $replace, ($_POST ["nmDep"])));
$dtNascto	= strtoupper ($dtNascto = str_replace ($search, $replace, ($_POST ["dtNascto"])));	
$cpfDep	= strtoupper ($cpfDep = str_replace ($search, $replace, ($_POST ["cpfDep"])));
$depIRRF	= strtoupper ($depIRRF = str_replace ($search, $replace, ($_POST ["depIRRF"])));
$depSF = strtoupper ($depSF = str_replace ($search, $replace, ($_POST ["depSF"])));
$incTrab	= strtoupper ($incTrab = str_replace ($search, $replace, ($_POST ["incTrab"])));	
$trabAposent	= strtoupper ($trabAposent = str_replace ($search, $replace, ($_POST ["trabAposent"])));
$fonePrinc	= strtoupper ($fonePrinc = str_replace ($search, $replace, ($_POST ["fonePrinc"])));
$foneAlternat	= strtoupper ($foneAlternat = str_replace ($search, $replace, ($_POST ["foneAlternat"])));
$emailPrinc= strtoupper ($emailPrinc = str_replace ($search, $replace, ($_POST ["emailPrinc"])));
$emailAltern	= strtoupper ($emailAltern = str_replace ($search, $replace, ($_POST ["emailAltern"])));	

//Gravando no banco de dados !

$servername = "fe_cadesocial.mysql.dbaas.com.br";
$username = "fe_cadesocial";
$password = "A0v4yJXGj";
$dbname = "fe_cadesocial";

// Criando Conexão
$conn = new mysqli($servername, $username, $password, $dbname);
// Checando conexão
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO `esocial` ( `filial` , `cpfTrab` , `nisTrab` , `nmTrab` , `sexo` , `racaCor` , `estCiv` , `grauInstr` , `nmSoc` , `dtNascto1` , `codMunic1` , `uf1` , `paisNascto` , `paisNac` , `nmMae` , `nmPai` , `nrCtps` , `serieCtps` , `ufCtps` , `nrRic` , `orgaoEmissor1` , `dtExped1` , `nrRg` , `orgaoEmissor2` , `dtExped2` , `nrRne` , `orgaoEmissor3` , `dtExped3` , `nrOc` , `orgaoEmissor4` , `dtExped4` , `dtValid1` , `nrRegCnh` , `dtExped` , `ufCnh` , `dtValid` , `dtPriHab` , `categoriaCnh` , `tpLograd` , `rua` , `nrLograd` , `complemento` , `bairro` , `cep` , `ibge` , `uf` , `cidade` , `paisResid` , `dscLograd1` , `nrLograd1` , `complemento1` , `bairro1` , `nmCid` , `codPostal` , `dtChegada` , `classTrabEstrang` , `casadoBr` , `filhosBr` , `defFisica` , `defVisual` , `defAuditiva` , `defMental` , `defIntelectual` , `reabReadap` , `observacao` , `tpDep` , `nmDep` , `dtNascto` , `cpfDep` , `depIRRF` , `depSF` , `incTrab` , `trabAposent` , `fonePrinc` , `foneAlternat` , `emailPrinc` , `emailAltern` , `id` ) VALUES ( '$filial' , '$cpfTrab' , '$nisTrab' , '$nmTrab' , '$sexo' , '$racaCor' , '$estCiv' , '$grauInstr' , '$nmSoc' , '$dtNascto1' , '$codMunic1' , '$uf1' , '$paisNascto' , '$paisNac' , '$nmMae' , '$nmPai' , '$nrCtps' , '$serieCtps' , '$ufCtps' , '$nrRic' , '$orgaoEmissor1' , '$dtExped1' , '$nrRg' , '$orgaoEmissor2' , '$dtExped2' , '$nrRne' , '$orgaoEmissor3' , '$dtExped3' , '$nrOc' , '$orgaoEmissor4' , '$dtExped4' , '$dtValid1' , '$nrRegCnh' , '$dtExped' , '$ufCnh' , '$dtValid' , '$dtPriHab' , '$categoriaCnh' , '$tpLograd' , '$rua' , '$nrLograd' , '$complemento' , '$bairro' , '$cep' , '$ibge' , '$uf' , '$cidade' , '$paisResid' , '$dscLograd1' , '$nrLograd1' , '$complemento1' , '$bairro1' , '$nmCid' , '$codPostal' , '$dtChegada' , '$classTrabEstrang' , '$casadoBr' , '$filhosBr' , '$defFisica' , '$defVisual' , '$defAuditiva' , '$defMental' , '$defIntelectual' , '$reabReadap' , '$observacao' , '$tpDep' , '$nmDep' , '$dtNascto' , '$cpfDep' , '$depIRRF' , '$depSF' , '$incTrab' , '$trabAposent' , '$fonePrinc' , '$foneAlternat' , '$emailPrinc' , '$emailAltern' , '' )";
if ($conn->query($sql) === TRUE) {
    echo "Atualizado com Sucesso. Enviar Documentos...";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

header("Location: http://www.fazenda.org.br/esocial/Upload"); 
?> 
</body>
</html>

