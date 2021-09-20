<?php
include 'header.php';

?>

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



  <div class="cconceito-container">
    <h3>Página detalhada do Conceito</h3>
    <div class="conceito-container">
      <?php
      $id = $_GET['threadid'];
      $sql = "SELECT * FROM `conceito` WHERE idConceito=$id";
      $result = mysqli_query($conn, $sql);

      while ($row = mysqli_fetch_assoc($result)) {
        echo "ID: " . $row['idConceito'] . "<br>";
        echo "<h5>Título do Conceito Preferêncial: </h5> <h6>" . $row['prefLabel'] . "</h6>";
        echo "<h5>Título do conceito em Inglês: </h5> <h6>" . $row['altLabelA'] . "</h6>";
        echo "<h5>Definição Acadêmica: </h5> <h6>" . $row['definitionA'] . "</h6>";
        echo "<h5>Definição Acadêmica em Inglês: </h5> <h6>" . $row['definitionB'] . "</h6>";
        echo "<h5>Definição da Comunidade: </h5> <h6>" . $row['definitionComun'] . "</h6>";
        echo "<h5>Conceito do tipo: </h5> <h6>" . $row['tipoConceito'] . ".</h6>";
        echo "<h5>Pertence ao Tesauro de: </h5> <h6>" . $row['pertenceTesauro'] . ".</h6>";


        /*
        if ($id == 2){
          echo "<a href='resultSearch.php?threadid=79'>Algoritmo</a>";
          echo "teste";
          <img src='foto1.jpg' style='float:right;width:42px;height:42px;'>
            
        }*/

        switch ($id) {
          case 2:
            echo "<div class='hierarquicod-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme (Você está aqui) -> Eixos -> Competência dos Eixos -></h3>
            <h3>Competência Derivada -> Conteúdos</h3>
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            
            <a href='resultSearch.php?threadid=11'>Eixo 1 - Resolução de Problemas</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=24'>Eixo 2 - Desenvolvimento de Sistemas</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=37'>Eixo 3 - Desenvolvimento de Projetos</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=47'>Eixo 4 - Implementação de Sistemas</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=60'>Eixo 5 - Gestão de Infraestrutura</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=69'>Eixo 6 - Aprendizado Contínuo e Autônomo</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=78'>Eixo 7 - Ciência, Tecnologia e Inovação</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=73'>C.7.5 - Compreender os fatos essenciais, os conceitos, os princípios e as teorias relacionadas à Ciência da Computação para o desenvolvimento de software e hardware e suas aplicações.</a><br>
            <hr width = “2” size = “100”>
            </div>
            <h1>Vídeo Recomendado</h1>
            <h5><iframe width='750' height='355' src='https://www.youtube.com/embed/SzJ46YA_RaA' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe></h5>
          </div>";
            break;
          case 3:
            echo "<div class='hierarquicodtres-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos -> Competência dos Eixos -></h3>
            <h3>Competência Derivada (Você está aqui) -> Conteúdos</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacinados:</h1>
            <a href='resultSearch.php?threadid=10'>Competências do Eixo I</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=79'>Algoritmos</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=115'>Lógica Matemática</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=116'>Fundamentos Matemáticos da Computação / Matemática Discreta</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=119'>Metodologia Científica</a><br>
            <hr width = “2” size = “100”>
            </div>
          </div>";
            break;
          case 4:
            echo "<div class='hierarquicodquatro-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos -> Competência dos Eixos -></h3>
            <h3>Competência Derivada (Você está aqui) -> Conteúdos</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacinados:</h1>
            
            <a href='resultSearch.php?threadid=10'>Competências do Eixo I</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=153'>Teoria da Computação</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=87'>Complexidade de Algoritmos</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=116'>Fundamentos Matemáticos da Computação / Matemática Discreta</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=119'>Metodologia Científica</a><br>
            <hr width = “2” size = “100”>
            </div>
          </div>";
            break;
          case 5:
            echo "<div class='hierarquicodquatro-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos -> Competência dos Eixos -></h3>
            <h3>Competência Derivada (Você está aqui) -> Conteúdos</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacinados:</h1>
            
            <a href='resultSearch.php?threadid=10'>Competências do Eixo I</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=100'>Estruturas de Dados</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=154'>Teoria dos Grafos</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=115'>Lógica Matemática</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=155'>Técnicas de Programação</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=86'>Compiladores</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=123'>Padrões de Projeto</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=108'>Inglês Instrumental</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=79'>Algoritmos</a><br>
            <hr width = “2” size = “100”>
            </div>
          </div>";
            break;

          case 6:
            echo "<div class='hierarquicodseis-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos -> Competência dos Eixos -></h3>
            <h3>Competência Derivada (Você está aqui) -> Conteúdos</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacinados:</h1>
            
            <a href='resultSearch.php?threadid=10'>Competências do Eixo I</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=103'>Geometria Analítica e Vetores</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=87'>Complexidade de Algoritmos</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=116'>Fundamentos Matemáticos da Computação / Matemática Discreta</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=126'>Probabilidade e Estatítisca</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=94'>Cálculo</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=95'>Cálculo Numérico</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=122'>Métodos Quantitativos em Computação</a><br>
            <hr width = “2” size = “100”>
            </div>
          </div>";
            break;
          case 7:
            echo "<div class='hierarquicodsete-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos -> Competência dos Eixos -></h3>
            <h3>Competência Derivada (Você está aqui) -> Conteúdos</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacinados:</h1>
            
            <a href='resultSearch.php?threadid=10'>Competências do Eixo I</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=103'>Geometria Analítica e Vetores</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=87'>Complexidade de Algoritmos</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=116'>Fundamentos Matemáticos da Computação / Matemática Discreta</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=126'>Probabilidade e Estatítisca</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=94'>Cálculo</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=95'>Cálculo Numérico</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=122'>Métodos Quantitativos em Computação</a><br>
            <hr width = “2” size = “100”>
            </div>
          </div>";

            break;
          case 8:
            echo "<div class='hierarquicodoito-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos -> Competência dos Eixos -></h3>
            <h3>Competência Derivada (Você está aqui) -> Conteúdos</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacinados:</h1>
            
            <a href='resultSearch.php?threadid=10'>Competências do Eixo I</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=139'>Propriedade Intelectual</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=102'>Fundamentos de Economia</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=121'>Métodos Formais</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=113'>Legislação de Informática</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=110'>Inteligência Artificial e Computacional</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=93'>Criptografia</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=137'>Projeto de Algoritmos</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=152'>Sustentabilidade</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=124'>Pesquisa Operacional e Otimização</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=107'>História da Computação</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=125'>Privacidade e Direitos Civis</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=157'>Ética em Computação</a><br>
            <hr width = “2” size = “100”>
            </div>
          </div>";
            break;
          case 9:
            echo "<div class='hierarquicodnove-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos -> Competência dos Eixos -></h3>
            <h3>Competência Derivada (Você está aqui) -> Conteúdos</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacinados:</h1>
            
            <a href='resultSearch.php?threadid=10'>Competências do Eixo I</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=110'>Inteligência Artificial e Computacional</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=146'>Sistemas Concorrentes</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=85'>Banco de Dados</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=80'>Arquitetura e Organização de Computadores</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=153'>Teoria da Computação</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=87'>Complexidade de Algoritmos</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=81'>Arquiteturas Paralelas de Computadores</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=151'>Sistemas Operacionais</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=144'>Segurança de Sistemas Computacionais</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=129'>Processamento Paralelo</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=142'>Redes de Computadores</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=148'>Sistemas Distribuídos</a><br>
            <hr width = “2” size = “100”>
            </div>";
            break;
          case 10:
            echo "<div class='hierarquicodnove-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos -> Competência dos Eixos (Você está aqui) -></h3>
            <h3>Competência Derivada -> Conteúdos</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacinados:</h1>
            
            <a href='resultSearch.php?threadid=10'>Competências do Eixo I</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=3'>C.1.1 - Identificar problemas que tenham solução algorítmica</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=4'>C.1.2 - Conhecer os limites da computação</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=5'>C.1.3 - Resolver problemas usando ambientes de programação</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=6'>C.1.4 - Compreender e explicar as dimensões quantitativas de um problema</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=7'>C.1.5 - Reconhecer a importância do pensamento computacional no cotidiano e sua aplicação em circunstâncias apropriadas e em domínios diversos</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=8'>C.1.6 - Conhecer soluções computacionais a partir de decisões visando o equilíbrio de todos os fatores</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=9'>C.1.7 - Aplicar temas e princípios recorrentes, como abstração, complexidade, princípio de localidade de referência (caching), compartilhamento de recursos, segurança, concorrência, evolução de sistemas, entre outros, e reconhecer que esses temas e princípios são fundamentais à área de Ciência da Computação</a><br>
            <hr width = “2” size = “100”>
            </div>";
            break;
          case 11:
            echo "<div class='hierarquicodonze-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos  (Você está aqui) -> Competência dos Eixos -></h3>
            <h3>Competência Derivada -> Conteúdos</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacinados:</h1>
            
            <a href='resultSearch.php?threadid=10'>Competências do Eixo I</a><br>
            <hr width = “2” size = “100”>

            </div>";
            break;
          case 12:
            echo "<div class='hierarquicodoze-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos -> Competência dos Eixos -></h3>
            <h3>Competência Derivada (Você está aqui) -> Conteúdos</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacinados:</h1>
            
            <a href='resultSearch.php?threadid=23'>Competências do Eixo II</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=147'>Sistemas de Tempo Real</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=135'>Programação Imperativa</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=111'>Interação Humano-Computador</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=146'>Sistemas Concorrentes</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=114'>Lógica de Programação</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=134'>Programação Funcional</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=85'>Banco de Dados</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=136'>Programação Orientada a Objetos</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=148'>Processamento Distribuído</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=129'>Processamento Paralelo</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=149'>Sistemas Embarcados</a><br>
            <hr width = “2” size = “100”>
            
            </div>";
            break;
          case 13:
            echo "<div class='hierarquicodtreze-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos -> Competência dos Eixos -></h3>
            <h3>Competência Derivada (Você está aqui) -> Conteúdos</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacinados:</h1>
            
            <a href='resultSearch.php?threadid=23'>Competências do Eixo II</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=142'>Redes de Computadores</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=152'>Sustentabilidade</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=93'>Criptografia</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=90'>Computação em Nuvem</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=118'>Meio Ambiente e Computação</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=113'>Legislação de Informática</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=144'>Segurança de Sistemas Computacionais</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=89'>Computação e Sociedade</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=157'>Ética em Computação</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=85'>Banco de Dados</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=98'>Engenharia de Software</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=23'>Arquitetura e Organização de Computadores</a><br>
            <hr width = “2” size = “100”>
            </div>";
            break;
          case 14:
            echo "<div class='hierarquicodqtz-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos -> Competência dos Eixos -></h3>
            <h3>Competência Derivada (Você está aqui) -> Conteúdos</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacinados:</h1>
            
            <a href='resultSearch.php?threadid=23'>Competências do Eixo II</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=23'>Avaliação de Desempenho</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=23'>Segurança de Sistemas Computacionais</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=23'>Métodos Quantitativos em Computação</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=23'>Sistemas Distribuídos</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=23'>Engenharia de Software</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=23'>Dependabilidade</a><br>
            <hr width = “2” size = “100”>

            </div>";
            break;
          case 15:
            echo "<div class='hierarquicodqtz-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos -> Competência dos Eixos -></h3>
            <h3>Competência Derivada (Você está aqui) -> Conteúdos</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacinados:</h1>
            
            <a href='resultSearch.php?threadid=23'>Competências do Eixo II</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=108'>Inglês Instrumental</a><br>
            <hr width = “2” size = “100”>
            </div>";
            break;
          case 16:
            echo "<div class='hierarquicoddzs-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos -> Competência dos Eixos -></h3>
            <h3>Competência Derivada (Você está aqui) -> Conteúdos</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacinados:</h1>
            
            <a href='resultSearch.php?threadid=23'>Competências do Eixo II</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=88'>Comportamento Humano nas Organizações</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=104'>Gerenciamento de Projetos</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=157'>Ética em Computação</a><br>
            <hr width = “2” size = “100”>
            </div>";
            break;
          case 17:
            echo "<div class='hierarquicoddzt-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Ciência da Computação -> Eixo 2 - Desenvolvimento de Sistemas -> Competência dos dos Eixos II -></h3>
            <h3>Competência Derivada (Você está aqui) -> Conteúdos</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacinados:</h1>
            <a href='resultSearch.php?threadid=23'>Competências do Eixo II</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=116'>Matemática Discreta</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=115'>Lógica Matemática</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=82'>Automação</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=80'>Arquitetura e Organização de Computadores</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=79'>Algoritmos</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=153'>Teoria da Computação</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=154'>Teoria dos Grafos</a><br>
            <hr width = “2” size = “100”>
            </div>";
            break;
          case 18:
            echo "<div class='hierarquicoddzt-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos -> Competência dos Eixos -></h3>
            <h3>Competência Derivada (Você está aqui) -> Conteúdos</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacinados:</h1>
            <a href='resultSearch.php?threadid=23'>Competências do Eixo II</a><br>
            <hr width = “2” size = “100”>

            </div>";
            break;
        }
      }





      ?>
    </div>
  </div>

  <footer>
    Sistema web desenvolvido como objetivo de obtenção de nota na disciplina de Trabalho de Conclusão de Curso no curso de Ciência da Computação - Universidade Estadual do Centro-Oeste.
  </footer>
</body>