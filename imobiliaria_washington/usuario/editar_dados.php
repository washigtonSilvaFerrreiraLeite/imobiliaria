<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Alterar dados Pessoais</title>
<link href="estilo_usuario.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="conteinner">
  <div id="banner">
    <h1>Adiministração do usuario, seja bem vindo!</h1></div>
 <div id="menu_simple">
<ul>
<li><a href="index.php">Dados Cliente</a></li>
<li><a href="Cadastrar_Imovel.php">Cadastrar Imovel</a></li>
<li><a href="Imoveis_Cadastrados.php">Imoveis Cadastrados</a></li>
<li><a href="#">Link 4</a></li>
<li><a href="#">Link 5</a></li>
</ul>
</div>
  <div id="conteudo_editar_dados">
<form action="editar_dados.php" method="post">
      <fieldset>
        <legend>Alterar dados pessoais</legend>
        <label for="nome">Nome:
          <input type="text" name="nome2" id="nome" />
        </label>
        <label for="email">Email:
          <input type="text" name="email2" id="email" />
        </label>
        <label for="tel">Tel:
          <input type="text" name="tel" id="tel" />
        </label>
        <label for="cid">Cidade:
          <input type="text" name="cid" id="cid" />
        </label>
        <label for="endereco">Endereço:
          <input type="text" name="endereco" id="endereco" />
        </label>
         <label for="senha">Senha antiga:
          <input type="text" name="senha" id="senha" />
        </label>
         </label>
         <label for="senha1">Senha Nova:
          <input type="text" name="senha1" id="senha1" />
        </label>
         </label>
         <label for="senha2"> Confirma senha Nova:
           <input type="text" name="senha2" id="senha2" />
        </label>
        <label><input type="submit" name="alterar" id="alterar" value="Alterar Dados" />
        </label>
        </label>
        <label><input name="Cancelar" type="submit"  id="cancelar" value="Cancelar" />
        </label>
        
      </fieldset>
    </form>
   
  </div>
  <div id="footer">Content for  id "footer" Goes Here</div>
</div>
</body>
</html>