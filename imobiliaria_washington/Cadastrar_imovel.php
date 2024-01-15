<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>site imobiliario</title>
<link rel="stylesheet" href="cssmenu/styles.css">
<link href="css/stilos.css" rel="stylesheet" type="text/css" />
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script src="cssmenu/script.js"></script>
</head>

<body>

<div id="conteiner">
<p>Bem Vindo entre com seu login e senha aqui mesmo!</p>
  <div id="banner">
    <div id="logo"><img src="img/logo.gif" width="237" height="160" alt="logo" /></div>
    <div id="conteudo_direita">
      <ul>
        <li>TEL:(11) 9999-9999</li>
        <li>TEL:(11) 9999-9999</li>
        <li class="creci">Creci:</li>
        <li><img src="img/redes_social_banner.jpg" width="296" height="59" /></li>
      </ul>
    </div>
  </div>
  <div id='cssmenu'><!--Menu do site-->
    <ul id="hacked-li">
      <li class='active'><a href='index.php'>Home</a></li>
      <li><a href='Sobre_Empresa.php'>Sobre Empresa</a></li>
      <li><a href='Cadastrar_imovel.php'>Cadastrar Imovel</a></li>
      <li><a href='Simulador_imovel.php'>Simulador Imovel</a></li>
      <li><a href='Contato.php'>Contato</a></li>
    </ul>
  </div>
  <!--Fim menu do site-->
  <div id="cadastro_usuario">
    <form action="" method="post">
      <fieldset>
        <legend>Dados Pessoal</legend>
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
         <label for="senha">Senha:
          <input type="text" name="senha" id="senha" />
        </label>
        <label><input type="submit" name="cad" id="enviar_cad" value="Cadastrar" />
        </label>
      </fieldset>
    </form>
    <form action="" method="post">
      <fieldset>
        <legend>Login</legend>
        <label for="nome2">Usuario:
          <input type="text" name="Usuario3" value="Digite seu Email" id="Usuario" />
        </label>
        <label for="senha">Senha:
          <input type="text" name="senha" value="Digite sua Senha" id="senha" />
        </label>
        <input type="submit" id="login" value="Entrar como usuario" />
        
      </fieldset>
    </form>
    <p>Após cadastrar seus dados faça seu login aqui mesmo, para cadastrar seu imovel!</p>
  </div>
  <div id="rodape">
    <ul>
      <li class="titulo">Informações do <br />
        Corretor</li>
      <li>Nome: Jose alves</li>
      <li>Email:</li>
      <li>josealves@gmail.com</li>
    </ul>
    <ul>
      <li class="titulo">Telefones</li>
      <li>(11)-99999-9999</li>
      <li>(11)-99999-9999</li>
      <li>(11)-99999-9999</li>
    </ul>
    <ul>
      <li class="titulo">Mapa do Golle</li>
      <li><img src="img/mapa.jpg" width="186" height="207" /></li>
    </ul>
    <form action="" method="post">
      <label class="titulo">Digite seu Email
        para Nós entrar
        em contato</label>
      <label>Email:</label>
      <input name="email" type="text" value="" id="email" />
      <label>
        <input name="enviar" type="image" value="enviar" src="img/Enviar.jpg" />
      </label>
      <label><img src="img/redes_social_rodape.jpg" width="264" height="47" /></label>
    </form>
  </div>
  <div class="clear"></div>
</div>
</body>
</html>
