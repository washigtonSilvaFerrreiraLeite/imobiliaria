<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>site imobiliario</title>
<link href="cssmenu/styles.css" rel="stylesheet" type="text/css" />
<link href="css/stilos.css" rel="stylesheet" type="text/css" />
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script src="cssmenu/script.js"></script>
<script type="text/javascript" src="fotos_jquery/jquery-1.10.2.js"></script>
<script type="text/javascript">
//<![CDATA[
	$(document).ready(function() {
		$('.abre-fecha').hide();
		$('<div id="tela" ><img src="uploads_imgs/casa2.jpg" alt="Descrição da imagem" /></div>')
		.insertBefore('#galeria');
		$('.foto').click(function(event) {
			event.preventDefault();
			$('#tela img').remove();
			$('<img />')
			.attr('src', $(this).attr('src'))
			.css('opacity', '0.3')
			.appendTo('#tela')
			.animate({opacity: 1 }, 2000);
		});
	});
   // ]]>
</script>
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
  <div id="descricao_imovel">
    <div id="descricao_do_imovel_left">
      <div id="galeria"> <a href="uploads_imgs/casa2.jpg"><img src="uploads_imgs/casa2.jpg" width="110" height="98" class="foto" /></a> <a href="uploads_imgs/casa2.jpg"><img src="uploads_imgs/casa2.jpg" width="110" height="98" class="foto" /></a> <a href="uploads_imgs/casa2.jpg"><img src="uploads_imgs/casa2.jpg" width="110" height="98" class="foto" /></a> <a href="uploads_imgs/casa2.jpg"><img src="uploads_imgs/casa2.jpg" width="110" height="98" class="foto" /></a> <a href="uploads_imgs/casa2.jpg"><img src="uploads_imgs/casa2.jpg" width="110" height="98" class="foto" /></a> <a href="uploads_imgs/casa2.jpg"><img src="uploads_imgs/casa2.jpg" width="110" height="98" class="foto" /></a> <a href="uploads_imgs/casa2.jpg"><img src="uploads_imgs/casa2.jpg" width="110" height="98" class="foto" /></a> <a href="uploads_imgs/casa3.jpg"><img src="uploads_imgs/casa3.png" width="110" height="98" class="foto" /></a> <a href="uploads_imgs/casa2.jpg"><img src="uploads_imgs/casa2.jpg" width="110" height="98" class="foto" /></a> <a href="uploads_imgs/casa2.jpg"><img src="uploads_imgs/casa2.jpg" width="110" height="98" class="foto" /></a> </div>
    </div>
    <div id="dados_imovel_right">
      <h1><span class="codigo">Codigo: 4323</span> <span>R$1.000.000,00</span></h1>
      <div id="dados_imovel">
        <ul>
          <li class="tipo">Tipo: Apartamento </li>
          <li class="finalidade">Finalidade: Alugar </li>
          <li>Cidade: Embu das artes</li>
          <li>Bairros: Jardim Julia</li>
          <li>Endereço: Av das pombas</li>
          <li>Sala: 2</li>
          <li>Cosinha: 2</li>
          <li>Banheiros: 3</li>
          <li>Quartos: 5</li>
          <li>Garagem: 1</li>
          <li>Pisina: 1</li>
          <li>Churrasquira: 1</li>
          <li>Salão de jogos: 1</li>
          <li>Quadra de futsal: 1</li>
          <li>Salna: 1</li>
          <li>Metros Quadrados: 126m2</li>
        </ul>
      </div>
    </div>
    <div id="descricao_adicionais"> 
    <h1>Descrições Adicionais</h1>
    <span>Mapa do Google</span>
    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. 
Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
<div class="mapa"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5168.252614861128!2d-46.80234435840178!3d-23.657839320187158!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce536e98f8e6cf%3A0xdea6a8263a737d50!2sAv.+das+Pombas+-+Jardim+Vazame%2C+Embu+das+Artes+-+SP%2C+06826-380!5e0!3m2!1spt-BR!2sbr!4v1459190998204" width="338" height="250" frameborder="0" style="border:0" allowfullscreen></iframe></div>
    <div class="clear"></div>
    </div>
    <form action="" method="post" id="form1">
    <input name="nome" type="text" value="Nome:" id="nome" />
    <input name="email" type="text" value="Email:" id="email" />
    <input name="tel" type="text" value="Tel:" id="tel" />
    <input name="codigo" type="text" id="codigo" value="Codigo: 4323" readonly="readonly" />
    <textarea name="menssagem" cols="" rows="">Olá! Achei esse imóvel através do site . Por favor, gostaria de mais informações sobre o mesmo. Aguardo contato. Grato.</textarea>
    <input name="Enviar" type="submit" value="Enviar" id="enviar"/>
    </form>
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
      <li><img src="img/mapa.jpg" alt="mapa" width="186" height="207" /></li>
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
