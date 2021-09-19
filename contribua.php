<?php
    include 'header.php';
    header('Content-Type: text/html; charset=UTF-8');
?>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<body>
  <div class="topnav">
    <img src="./view/img/ultimate-removebg-preview.png" />

    <a href="./sobre.php">Acessibilidade</a>
    <a href="./sobre.php">Sobre</a>
    <a href="./contribua.php">Contribua!</a>
    <a href="./tutoriais.php">Tutoriais</a>
    <a href="./tesauros.php">Tesauros da Computação</a>
    <a href="./index.php">Página Inicial</a>

  </div>

  <div class="titulo-container">
    <h2>Trodoon - DICIONÁRIO GRATUÍTO DE SINÔNIMOS DA COMPUTAÇÃO</h2>
    <div class="search-container">
      <form action="search.php" method="POST">
        <input type="text" placeholder="Busque aqui pelo tesauro..." name="search" />
        <button type="submit" name="submit-search"><i class="fa fa-search">Go</i></button>
      </form>
    </div>
  </div>


<div class="formulario-container">
<iframe src="https://docs.google.com/forms/d/e/1FAIpQLSefOVeSN-YBolJ0-922ecjMhxit6P0g2XDGJ_OQrwczTUY1SA/viewform?embedded=true" width="940" height="1088" frameborder="0" marginheight="0" marginwidth="0">Carregando…</iframe>
</div>


  <footer class="fundo-contribua-container">
    Sistema web desenvolvido como objetivo de obtenção de nota na disciplina de Trabalho de Conclusão de Curso no curso de Ciência da Computação - Universidade Estadual do Centro-Oeste.
  </footer>
</body>