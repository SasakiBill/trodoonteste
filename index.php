<?php
include 'header.php';
header('Content-Type: text/html; charset=UTF-8');
?>

<head>
  <title>Trodoon - Página Inicial</title>
</head>

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



  <div class="article-container">
    <h1 >Trodoon - Página Inicial</h1>
    <div class="creators-container">
      <h3>Criadores do Dicionário:</h3>
      <ul style="list-style-type:disc">
        <li>
          <h3>João Pedro Kelniar</h3>
        </li>
        <li>
          <h3>Sandro Rautenberg</h3>
        </li>
        <li>
          <h3>Kelly Laís Wiggers</h3>
        </li>
      </ul>

      <h3>Definição:</h3>
      <h3>
        <p>Apresenta-se uma proposta de Tesauro para os cursos de Bacharelado em Ciência da Computação. Como uma forma de representação de conhecimento, relaciona os conceitos e definições dos cursos de Ciência da Computação estabelecidas nos Referenciais de Formação para os Cursos de Graduação em Computação - ano 2017. São relacionados os eixos de aprendizagem, suas competências e seus conteúdos didáticos, representados pelo Simple Knowledge Organization Systems.</p>
      </h3>
    </div>
  </div>

  <div class="hierarquico-container">
    <h1>Atual Nível Hierárquico:<h1>
        <div class="nivel-container">
          <h3>Ao pesquisar por algum conceito, aqui aparecerá em qual nível hierárquico você está!</h3>
        </div>
  </div>

  <div class="pacman-container">
    <img src="./view/img/wordcloud4.png"/>
  </div>

  <footer class="index-fundo-container">
    Sistema web desenvolvido como objetivo de obtenção de nota na disciplina de Trabalho de Conclusão de Curso 2021 no curso de Ciência da Computação - Universidade Estadual do Centro-Oeste.
  </footer>
</body>