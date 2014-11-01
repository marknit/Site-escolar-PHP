<!DOCTYPE html>
<html>
<head>
<meta charset = "utf-8"/>
<title>Formulario-resultado</title>
<link rel="stylesheet" href="css/estilo.css"/>
</head>

<body id="corpo-principal">
	<div id="interface">
    
    <?php
	$nome=isset($_GET["tNome"])?$_GET["tNome"]:null;
	$senha=isset($_GET["tSenha"])?$_GET["tSenha"]:null;
	$email=isset($_GET["tEmail"])?$_GET["tEmail"]:null;
	$nasc=isset($_GET["tNasc"])?$_GET["tNasc"]:null;
	$msg=isset($_GET["tMsg"])?$_GET["tMsg"]:null;
	echo="Aquivo modificado";
	
	?>
 
	
     <form >
         <fieldset><legend>Identificação do Usuário</legend>
        	
            <p><?php echo"Nome: $nome" ?></p>           
            <p><?php echo"Senha: $senha" ?></p> 
            <p><?php echo"E-mail: $email" ?></p> 
            <p><?php echo"Nascimento: $nasc" ?></p> 
            
            <fieldset><legend>Sexo</legend>
                <input type="radio" name="tSexo" id="cMasc" checked/><label for="cMasc">Masculino</label>
                <input type="radio" name="tSexo" id="cFem"/><label for="cFem">Feminino</label>
            </fieldset>
          </fieldset>
          <fieldset><legend>Endereço do Usuário</legend>
          <p><label for="cEndereco">Logradouro:</label><input type="text" name="tEndereco" id="cEndereco" size="18" maxlength="80" placeholder="Rua, Trav, Av..."/></p>
          <p><label for="cNum">Número:</label><input type="number" name="tNum" id="cNum" min="0" max="99999" placeholder="299"/></p>
          <p><label for="cEst">Estado:</label><select name="tEst" id="cEst">
          <optgroup label="Região Sudeste">
              <option value="RJ">Rio de Janeiro</option>
              <option selected value="SP">São Paulo</option>
              <option value="MG">Minas Gerais</option>
          </optgroup>
          <optgroup label="Região Sul">
              <option value="PR">Paraná</option>
              <option value="SC">Santa Catarina</option>
              <option value="RS">Rio Grande do Sul</option>
           </optgroup>
          </select></p>
          <p><label for="cCid">Cidade:</label><input type="text" name="tCid" id="cCid" size="20" maxlength="40" placeholder="  Sua Cidade" list="cidade"/>
          <datalist id="cidade">
              <option value="Rio de Janeiro"></option>
              <option value="Niterói"></option>
              <option value="Belford Roxo"></option>
              <option value="Nova Iguaçu"></option>
          </datalist>
          </p>
          
          
          </fieldset>
           <p>Mensagem</p>
            <?php echo"$nome ecreveu: $msg" ?>
             <p><input type="checkbox" name="tAtivo" id="cAtivo"/><label for="cAtivo">Receber Newsletters</label></p>
            <input type="image" name="tImg" id="cImg"img src="imagens/botao-enviar.png"/>
      </form>

    </div>
</body>
</html>
