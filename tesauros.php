<?php
include 'header.php';
header('Content-Type: text/html; charset=UTF-8');
?>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<div clas="paginaTesauro">

  <body>
    <div class="topnav">
      <img src="./view/img/ultimate-removebg-preview.png" />


      <a href="./sobre.php">Sobre</a>
      <a href="./contribua.php">Contribua!</a>
      <a href="./tutoriais.php">Tutoriais</a>
      <a href="./tesauros.php">Tesauros</a>
      <a href="./index.php">Página Inicial</a>

    </div>

    <div class="titulo-container">
      <h2>Trodoon - DICIONÁRIO DE SINÔNIMOS DA COMPUTAÇÃO</h2>
      <div class="search-container">
        <form action="search.php" method="POST">
          <input type="text" placeholder="Busque aqui pelo tesauro..." name="search" />
          <button type="submit" name="submit-search"><i class="fa fa-search">Go</i></button>
        </form>
      </div>
    </div>


    <div class="tesauro-container">
      <h3>Tesauros da Computação Disponíveis:</h3>
      <ul style="list-style-type:disc">
        <li>
          <a href='resultSearch.php?threadid=2'>Ciência da Computação</a>
        </li>
      </ul>
    </div>

    <div class="tesauro-hierarquico-container">
      <h1>Atual Nível Hierárquico:<h1>
          <div class="nivel-container">
            <h1>Ao entrar em algum conceito, nessa caixa de texto
              aparecerá em qual nível hierárquico você está!
              Para mais informações, acesse a aba <a href="./sobre.php"><span class="red">Sobre.</a></span></h1>
          </div>
    </div>

    <footer class="fundo-container">
      Sistema web desenvolvido como objetivo de obtenção de nota na disciplina de Trabalho de Conclusão de Curso 2021 no curso de Ciência da Computação - Universidade Estadual do Centro-Oeste.
    </footer>
  </body>
</div>