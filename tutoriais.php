<?php
    include 'header.php';
    header('Content-Type: text/html; charset=UTF-8');
?>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<body>
  <div class="topnav">
    <img src="./view/img/ultimate-removebg-preview.png" />  

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


  <div class="tutorial-container">
  <h3>Tutoriais Disponíveis:</h3>
      <ul style="list-style-type:disc">
        <li>
          <a href="http://www.conexaorio.com/biti/tesauro/">Como criar um Tesauro?</a>
        </li>
        <li>
          <a href="http://www.editora.ufpb.br/sistema/press5/index.php/UFPB/catalog/book/355">O que é organização e representação da informação e do conhecimento?</a>
        </li>
        
      </ul>
  </div>

  <div class="tutorial-hierarquico-container">
    <h1>Atual Nível Hierárquico:<h1>
        <div class="nivel-container">
          <h3>Ao pesquisar por algum conceito, aqui aparecerá em qual nível hierárquico você está!</h3>
        </div>
  </div>

  <footer class="fundo-tutorial-container">
    Sistema web desenvolvido como objetivo de obtenção de nota na disciplina de Trabalho de Conclusão de Curso 2021 no curso de Ciência da Computação - Universidade Estadual do Centro-Oeste.
  </footer>
</body>