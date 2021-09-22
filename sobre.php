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



  <div class="article-sobre-container">
    <h4>Sobre o Trodoon:</h4>
    <div class="sobre-container">
    <h1>O que é o Trodoon?</h1>
    <h2>É um dicionário online e gratuíto estilo wiki, voltado para a área de computação. Se utilizando da teoria de tesauros, o site fornece uma forma eficiente de organizar e representar o conhecimento.</h2>
    <h1>Como posso começar a usar o site?</h1>
    <h2>Basta usar a ferramenta de pesquisa com a instrução "Busque aqui pelo tesauro...". Digite literalmente qualquer coisa, e caso exista algum resultado de sua pesquisa, o site lhe retornará. Você então poderá entrar em algum conceito clicando em qualquer resultado. Ao entrar na página de um conceito, você verá muitas informações a seu respeito, e outros links de acesso a conceitos que são relacionados ao que você está lendo no momento. Dessa forma, você estará navegando pela hierarquia do tesauro sem mesmo realizar uma nova pesquisa.</h2>
    <h1>O que é um Tesauro?</h1>  
    <h2>Em termos mais específicos, é uma forma de representação de conhecimento que utiliza hierarquias, sintaxes e relações, para definir de forma precisa qualquer tipo de conceito. Em linhas gerais, é um dicionário de ideias.</h2>
    <h1>O que é um conceito?</h1>
    <h2>É qualquer unidade de conhecimento, com suas próprias sintaxes, relações e conexões, sendo independente do nível hierárquico.</h2>
    <h1>Quantos tesauros há no site?</h1>
    <h2>No momento, há apenas o tesauro de Ciência da Computação, baseado na graduação de Ciência da Computação da Universidade Estadual do Centro-Oeste.</h2>
    <h1>Futuramente, haverá outros tesauros integrados ao site?</h1>
    <h2>É esperado que o site contemple as quatro grandes áreas de computação no ensino superior do Brasil: Análise de Sistemas, Ciência da Computação, Engenharia da Computação e Sistemas de Informação.</h2>
</div>

  <div class="sobre-hierarquico-container">
    <h1>Atual Nível Hierárquico:<h1>
        <div class="nivel-container">
          <h3>Ao pesquisar por algum conceito, aqui aparecerá em qual nível hierárquico você está!</h3>
        </div>
  </div>

  <footer class="sobre-fundo-container">
    Sistema web desenvolvido como objetivo de obtenção de nota na disciplina de Trabalho de Conclusão de Curso 2021 no curso de Ciência da Computação - Universidade Estadual do Centro-Oeste.
  </footer>
</body>