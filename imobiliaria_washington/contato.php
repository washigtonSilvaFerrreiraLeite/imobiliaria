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
  <div id="fomulario_pesquisa">
    <form action="index.php" method="post">
      <label>
        <select name="nome" size="">
          <option value="teste1">teste1 teste1</option>
          <option value="teste2">teste1 teste1</option>
          <option value="teste3">teste1 teste1</option>
          <option value="teste4">teste1 teste1</option>
        </select>
        <select name="nome" size="" class="half-line">
          <option value="teste1">teste1 teste1</option>
          <option value="teste2">teste1 teste1</option>
          <option value="teste3">teste1 teste1</option>
          <option value="teste4">teste1 teste1</option>
        </select>
        <select name="nome" size="">
          <option value="teste1">teste1 teste1</option>
          <option value="teste2">teste1 teste1</option>
          <option value="teste3">teste1 teste1</option>
          <option value="teste4">teste1 teste1</option>
        </select>
        <input name="codigo" type="text" value="Digite o Codigo" id="codigo" />
      </label>
      <label>
        <select name="nome" size="">
          <option value="teste1">teste1 teste1</option>
          <option value="teste2">teste1 teste1</option>
          <option value="teste3">teste1 teste1</option>
          <option value="teste4">teste1 teste1</option>
        </select>
        <select name="nome" size="" class="half-line">
          <option value="teste1">teste1 teste1</option>
          <option value="teste2">teste1 teste1</option>
          <option value="teste3">teste1 teste1</option>
          <option value="teste4">teste1 teste1</option>
        </select>
        <select name="nome" size="">
          <option value="teste1">teste1 teste1</option>
          <option value="teste2">teste1 teste1</option>
          <option value="teste3">teste1 teste1</option>
          <option value="teste4">teste1 teste1</option>
        </select>
        <input name="Perquisar" type="submit" id="Perquisar" value="Perquisar" />
      </label>
    </form>
  </div>
  <div id="contato">
    <h1>Contato Real Imovel</h1>
    <form action="" method="post" name="form3" id="form3">
      <label>Nome:
        <input type="text" name="nome" id="nome" />
      </label>
      <label>Email:
        <input type="text" name="email3" id="email3" />
      </label>
  <label>Telefone:
    <input type="text" name="tel3" id="tel3" />
      </label>
      <label>Estado:
        <input type="text" name="estado" id="estado" />
      </label>
      <label>Cidade:
        <input type="text" name="cidade" id="cidade" />
      </label>
      <label>Mensagem:
        <textarea name="mensagem3" id="mensagem3" cols="45" rows="5"></textarea>
      </label>
      <label class="Enviar"> 
        <input name="Enviar" type="submit" class="Enviar"  id="Enviar_form1" value="Enviar" />
      </label>
</form>
  </div>
  <div id="conteudo_imoveis_right">
    <h1>Ultimos Imoveis</h1>
    <a href="#">
    <ul>
      <li class="font_maior">Local:  SP/ Morumbi</li>
      <li class="img_left"><img src="uploads_imgs/casa1.jpg" width="122" height="131" /></li>
      <li>Sala: 1</li>
      <li>Csinha: 1</li>
      <li>Banheiro: 1</li>
      <li>Quartos: 1</li>
      <li>Tipo: temporada</li>
      <li class="preco">Preço: $2.0000.00</li>
    </ul>
    </a> <a href="#">
    <ul>
      <li class="font_maior">Local:  SP/ Morumbi</li>
      <li class="img_left"><img src="uploads_imgs/casa1.jpg" width="122" height="131" /></li>
      <li>Sala: 1</li>
      <li>Csinha: 1</li>
      <li>Banheiro: 1</li>
      <li>Quartos: 1</li>
      <li>Tipo: temporada</li>
      <li class="preco">Preço: $2.0000.00</li>
    </ul>
    </a> <a href="#">
    <ul>
      <li class="font_maior">Local:  SP/ Morumbi</li>
      <li class="img_left"><img src="uploads_imgs/casa1.jpg" width="122" height="131" /></li>
      <li>Sala: 1</li>
      <li>Csinha: 1</li>
      <li>Banheiro: 1</li>
      <li>Quartos: 1</li>
      <li>Tipo: temporada</li>
      <li class="preco">Preço: $2.0000.00</li>
    </ul>
    </a>
    <div class="clear"></div>
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
    <form action="" method="post" id="form2">
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
