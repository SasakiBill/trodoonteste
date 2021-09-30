<?php
include 'header.php';

?>

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



  <div class="cconceito-container">
    <h3>Página detalhada do Conceito</h3>
    <div class="conceito-container">
      <?php
      $id = $_GET['threadid'];
      $sql = "SELECT * FROM `conceito` WHERE idConceito=$id";
      $result = mysqli_query($conn, $sql);

      while ($row = mysqli_fetch_assoc($result)) {
        echo "ID: " . $row['idConceito'] . "<br>";
        echo "<h5>Título do Conceito: </h5> <h6>" . $row['prefLabel'] . "</h6>";
        echo "<h5>Título do Conceito em Inglês: </h5> <h6>" . $row['altLabelA'] . "</h6>";
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
            <h1>Sinônimos/Conceitos Relacionados:</h1>
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
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            
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
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            
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
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            
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
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            
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
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            
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
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            
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
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            
            <a href='resultSearch.php?threadid=11'>Eixo 1 - Resolução de Problemas</a><br>
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
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            <a href='resultSearch.php?threadid=2'>Ciência da Computação</a><br>
            <hr width = “2” size = “100”>
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
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            
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
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            
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
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            
            <a href='resultSearch.php?threadid=23'>Competências do Eixo II</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=84'>Avaliação de Desempenho</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=144'>Segurança de Sistemas Computacionais</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=122'>Métodos Quantitativos em Computação</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=148'>Sistemas Distribuídos</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=98'>Engenharia de Software</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=96'>Dependabilidade</a><br>
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
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            
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
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            
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
            <h1>Sinônimos/Conceitos Relacionados:</h1>
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
            echo "<div class='hierarquicoddztt-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos -> Competência dos Eixos -></h3>
            <h3>Competência Derivada (Você está aqui) -> Conteúdos</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            <a href='resultSearch.php?threadid=23'>Competências do Eixo II</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=121'>Métodos Formais</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=98'>Engenharia de Software</a><br>
            <hr width = “2” size = “100”>

            </div>";
            break;
          case 19:
            echo "<div class='hierarquicoddzn-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos -> Competência dos Eixos -></h3>
            <h3>Competência Derivada (Você está aqui) -> Conteúdos</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            <a href='resultSearch.php?threadid=23'>Competências do Eixo II</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=98'>Engenharia de Software</a><br>
            <hr width = “2” size = “100”>

            </div>";
            break;
          case 20:
            echo "<div class='hierarquicoddzn-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos -> Competência dos Eixos -></h3>
            <h3>Competência Derivada (Você está aqui) -> Conteúdos</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            <a href='resultSearch.php?threadid=23'>Competências do Eixo II</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=98'>Engenharia de Software</a><br>
            <hr width = “2” size = “100”>

            </div>";
            break;
          case 21:
            echo "<div class='hierarquicodvin-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos -> Competência dos Eixos -></h3>
            <h3>Competência Derivada (Você está aqui) -> Conteúdos</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            <a href='resultSearch.php?threadid=23'>Competências do Eixo II</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=85'>Banco de Dados</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=141'>Recuperação da Informação</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=93'>Criptografia</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=129'>Processamento Paralelo</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=150'>Sistemas Multimídia</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=110'>Inteligência Artificial e Computacional</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=100'>Estruturas de Dados</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=127'>Processamento de Imagens</a><br>
            <hr width = “2” size = “100”>

            </div>";
            break;
          case 22:
            echo "<div class='hierarquicodvini-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos -> Competência dos Eixos -></h3>
            <h3>Competência Derivada (Você está aqui) -> Conteúdos</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            <a href='resultSearch.php?threadid=23'>Competências do Eixo II</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=91'>Computação Gráfica</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=150'>Sistemas Multimídia</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=111'>Interação Humano-Computador</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=140'>Realidade Virtual</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=130'>Programação de Aplicativos para Dispositivos Móveis</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=112'>Internet das Coisas (IoT)</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=131'>Programção de Aplicações Web</a><br>
            <hr width = “2” size = “100”>


            </div>";
            break;
          case 23:
            echo "<div class='hierarquicodvint-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos -> Competência dos Eixos (Você está aqui) -></h3>
            <h3>Competência Derivada  -> Conteúdos</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            <a href='resultSearch.php?threadid=24'>Eixo 2 - Desenvolvimento de Sistemas</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=12'>C.2.1 - Resolver problemas usando ambientes de programação</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=13'>C.2.2 - Tomar decisões e inovar, com base no conhecimento do funcionamento e das características técnicas de hardware e da infraestrutura de software dos sistemas de computação, consciente dos aspectos éticos, legais e dos impactos ambientes decorrentes</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=14'>C.2.3 - Avaliar criticamente projetos de sistemas de computação</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=15'>C.2.4 - Ler textos técnicos na língua inglesa</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=16'>C.2.5 - Ser capaz de realizar trabalho cooperativo e entender os benefícios que este pode produzir</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=17'>C.2.6 - Compreender os fatos essenciais, os conceitos, os princípios e as teorias relacionadas à Ciência da Computação para o desenvolvimento de software e hardware e suas aplicações</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=18'>C.2.7 - Identificar e analisar requisitos e especificações para problemas específicos e planejar estratégias para suas soluções</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=19'>C.2.8 - Empregar metodologias que visem garantir critérios de qualidade ao longo de todas as etapas de desenvolvimento de uma solução computacional</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=20'>C.2.9 - Analisar quanto um sistema baseado em computadores atende os critérios definidos para seu uso corrente e futuro (adequabilidade)</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=21'>C.2.10 - Aplicar os princípios de gerência, organização e recuperação da informação de vários tipos, incluindo texto imagem som e vídeo</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=22'>C.2.11 - Aplicar os princípios de interação humano-computador para avaliar e construir uma grande variedade de produtos incluindo interface do usuário, páginas WEB, sistemas multímidia e sistemas móveis</a><br>
            <hr width = “2” size = “100”>


            </div>";
            break;
          case 24:
            echo "<div class='hierarquicodvind-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos (Você está aqui) -> Competência dos Eixos -></h3>
            <h3>Competência Derivada  -> Conteúdos</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            <a href='resultSearch.php?threadid=2'>Ciência da Computação</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=23'>Competências do Eixo II</a><br>
            <hr width = “2” size = “100”>

            </div>";
            break;
          case 25:
            echo "<div class='hierarquicodvinc-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos -> Competência dos Eixos -></h3>
            <h3>Competência Derivada  (Você está aqui) -> Conteúdos</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            <a href='resultSearch.php?threadid=36'>Competências do Eixo III</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=84'>Avaliação de Desempenho</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=126'>Probabilidade e Estatística</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=122'>Métodos Quantitativos em Computação</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=104'>Gerenciamento de Projetos</a><br>
            <hr width = “2” size = “100”>
            
            </div>";
            break;
          case 26:
            echo "<div class='hierarquicodvseis-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos -> Competência dos Eixos -></h3>
            <h3>Competência Derivada  (Você está aqui) -> Conteúdos</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            <a href='resultSearch.php?threadid=36'>Competências do Eixo III</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=92'>Comunicação Profissional</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=109'>Inglês Técnico</a><br>
            <hr width = “2” size = “100”>

            </div>";
            break;
          case 27:
            echo "<div class='hierarquicodvsete-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos -> Competência dos Eixos -></h3>
            <h3>Competência Derivada  (Você está aqui) -> Conteúdos</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            <a href='resultSearch.php?threadid=36'>Competências do Eixo III</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=157'>Ética em Computação</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=113'>Legislação de Informática</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=118'>Meio Ambiente e Computação</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=104'>Gerenciamento de Projetos</a><br>
            <hr width = “2” size = “100”>

            </div>";
            break;
          case 28:
            echo "<div class='hierarquicodqtz-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos -> Competência dos Eixos -></h3>
            <h3>Competência Derivada  (Você está aqui) -> Conteúdos</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            <a href='resultSearch.php?threadid=36'>Competências do Eixo III</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=108'>Inglês Instrumental</a><br>
            <hr width = “2” size = “100”>

            </div>";
            break;
          case 29:
            echo "<div class='hierarquicodvnove-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos -> Competência dos Eixos -></h3>
            <h3>Competência Derivada  (Você está aqui) -> Conteúdos</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            <a href='resultSearch.php?threadid=36'>Competências do Eixo III</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=92'>Comunicação Profissional</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=104'>Gerenciamento de Projetos</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=97'>Empreendedorismo</a><br>
            <hr width = “2” size = “100”>
            </div>";
            break;
          case 30:
            echo "<div class='hierarquicodtrinta-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos -> Competência dos Eixos -></h3>
            <h3>Competência Derivada  (Você está aqui) -> Conteúdos</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            <a href='resultSearch.php?threadid=36'>Competências do Eixo III</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=92'>Comunicação Profissional</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=104'>Gerenciamento de Projetos</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=88'>Comportamento Humano nas Organizações</a><br>
            <hr width = “2” size = “100”>

            </div>";
            break;
          case 31:
            echo "<div class='hierarquicodtri-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos -> Competência dos Eixos -></h3>
            <h3>Competência Derivada  (Você está aqui) -> Conteúdos</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            <a href='resultSearch.php?threadid=36'>Competências do Eixo III</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=92'>Ética em Computação</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=104'>Algoritmos</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=153'>Teoria da Computação</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=89'>Computação e Sociedade</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=100'>Estruturas de Dados</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=154'>Teoria dos Grafos</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=115'>Lógica Matemática</a><br>
            <hr width = “2” size = “100”>

            </div>";
            break;
          case 32:
            echo "<div class='hierarquicodtrd-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos -> Competência dos Eixos -></h3>
            <h3>Competência Derivada  (Você está aqui) -> Conteúdos</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            <a href='resultSearch.php?threadid=36'>Competências do Eixo III</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=104'>Gerenciamento de Projetos</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=98'>Engenharia de Software</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=121'>Métodos Formais</a><br>
            <hr width = “2” size = “100”>
            
            </div>";
            break;
          case 33:
            echo "<div class='hierarquicodtrt-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos -> Competência dos Eixos -></h3>
            <h3>Competência Derivada  (Você está aqui) -> Conteúdos</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            <a href='resultSearch.php?threadid=36'>Competências do Eixo III</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=36'>Engenharia de Software</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=36'>Gerenciamento de Projetos</a><br>
            <hr width = “2” size = “100”>

            </div>";
            break;
          case 34:
            echo "<div class='hierarquicodtrq-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos -> Competência dos Eixos -></h3>
            <h3>Competência Derivada  (Você está aqui) -> Conteúdos</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            <a href='resultSearch.php?threadid=36'>Competências do Eixo III</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=104'>Gerenciamento de Projetos</a><br>
            <hr width = “2” size = “100”>

            </div>";
            break;
          case 35:
            echo "<div class='hierarquicodtrc-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos -> Competência dos Eixos -></h3>
            <h3>Competência Derivada  (Você está aqui) -> Conteúdos</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            <a href='resultSearch.php?threadid=36'>Competências do Eixo III</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=104'>Gerenciamento de Projetos</a><br>
            <hr width = “2” size = “100”>

            </div>";
            break;
          case 36:
            echo "<div class='hierarquicodtseis-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos -> Competência dos Eixos (Você está aqui) -></h3>
            <h3>Competência Derivada -> Conteúdos</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            <a href='resultSearch.php?threadid=37'>Eixo 3 - Desenvolvimento de Projetos</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=25'>C.3.1 - Compreender e explicar as dimensões quantitativas de um problema</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=26'>C.3.2 - Preparar e apresentar seus trabalhos e problemas técnicos e suas soluções para audiências diversas, em formatos apropriados (oral e escrito)</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=27'>C.3.3 - Avaliar criticamente projetos de sistemas de computação</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=28'>C.3.4 - Ler textos técnicos na língua inlgesa</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=29'>C.3.5 - Empreender e exercer liderança, coordenação e supervisão na sua área de atuação profissional</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=30'>C.3.6 - Ser capaz de realizar trabalho cooperativo e entender os benefícios que este pode produzir</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=31'>C.3.7 - Reconhecer a importância do pensamento computacional no cotidiano e sua aplicação em circunstâncias apropriadas e em domínios diversos</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=32'>C.3.8 - Identificar e analisar requisitos e especificações para problemas específicos e planejar estratégias para suas soluções</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=33'>C.3.9 - Analisar quanto um sistema baseado em computadores atende os critérios definidos para seu uso corrente e futuro (adequabilidade)</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=34'>C.3.10 - Gerenciar projetos de desenvolvimento de sistemas computacionais</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=35'>C.3.11 - Escolher e aplicar boas práticas e técnicas que conduzam ao raciocínio rigoroso no planejamento, na execução e no acompanhamento, na medição e gerenciamento geral da qualidade de sistemas computacionais</a><br>
            <hr width = “2” size = “100”>
            </div>";
            break;
          case 37:
            echo "<div class='hierarquicodtsete-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos -> Competência dos Eixos -></h3>
            <h3>Competência Derivada  (Você está aqui) -> Conteúdos</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            <a href='resultSearch.php?threadid=2'>Ciência da Computação</a><br>
            <hr width = “2” size = “100”>

            <a href='resultSearch.php?threadid=36'>Competências do Eixo III</a><br>
            <hr width = “2” size = “100”>

            </div>";
            break;
          case 38:
            echo "<div class='hierarquicodtoito-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos -> Competência dos Eixos -></h3>
            <h3>Competência Derivada  (Você está aqui) -> Conteúdos</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            <a href='resultSearch.php?threadid=46'>Competências do Eixo IV</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=80'>Arquitetura e Organização de Computadores</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=157'>Ética em Computação</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=151'>Sistemas Operacionais</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=148'>Sistemas Distribuídos</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=113'>Legislação de Informática</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=89'>Computação e Sociedade</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=85'>Banco de Dados</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=144'>Segurança de Sistemas Computacionais</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=142'>Redes de Computadores</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=118'>Meio Ambiente e Computação</a><br>
            <hr width = “2” size = “100”>

            </div>";
            break;
          case 39:
            echo "<div class='hierarquicodtnove-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos -> Competência dos Eixos -></h3>
            <h3>Competência Derivada  (Você está aqui) -> Conteúdos</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            <a href='resultSearch.php?threadid=46'>Competências do Eixo IV</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=122'>Métodos Quantitativos em Computação</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=126'>Probabilidade e Estatística</a><br>
            <hr width = “2” size = “100”>

            </div>";
            break;
          case 40:
            echo "<div class='hierarquicodqum-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos -> Competência dos Eixos -></h3>
            <h3>Competência Derivada  (Você está aqui) -> Conteúdos</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            <a href='resultSearch.php?threadid=46'>Competências do Eixo IV</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=122'>Engenharia de Software</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=126'>Comunicação Profissional</a><br>
            <hr width = “2” size = “100”>

            </div>";
            break;
          case 41:
            echo "<div class='hierarquicodqdois-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos -> Competência dos Eixos -></h3>
            <h3>Competência Derivada  (Você está aqui) -> Conteúdos</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            <a href='resultSearch.php?threadid=46'>Competências do Eixo IV</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=84'>Avaliação de Desempenho</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=120'>Modelagem de Sistemas</a><br>
            <hr width = “2” size = “100”>

            </div>";
            break;
          case 42:
            echo "<div class='hierarquicodqdois-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos -> Competência dos Eixos -></h3>
            <h3>Competência Derivada  (Você está aqui) -> Conteúdos</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            <a href='resultSearch.php?threadid=46'>Competências do Eixo IV</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=108'>Inglês Instrumental</a><br>
            <hr width = “2” size = “100”>

            </div>";
            break;
          case 43:
            echo "<div class='hierarquicodqtres-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos -> Competência dos Eixos -></h3>
            <h3>Competência Derivada  (Você está aqui) -> Conteúdos</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            <a href='resultSearch.php?threadid=46'>Competências do Eixo IV</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=92'>Comunicação Profissional</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=88'>Comportamento Humano nas Organizações</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=92'>Comunicação Profissional</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=101'>Fundamentos de Administração</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=157'>Ética em Computação</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=101'>Fundamentos de Administração</a><br>
            <hr width = “2” size = “100”>
            </div>";
            break;
          case 44:
            echo "<div class='hierarquicodqtres-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos -> Competência dos Eixos -></h3>
            <h3>Competência Derivada  (Você está aqui) -> Conteúdos</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            <a href='resultSearch.php?threadid=46'>Competências do Eixo IV</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=139'>Propriedade Intelectual</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=120'>Modelagem de Sistemas</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=139'>Propriedade Intelectual</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=107'>História da Computação</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=125'>Privacidade e Direitos Civis</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=102'>Fundamentos de Economia</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=145'>Simulação de Sistemas</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=152'>Sustentabilidade</a><br>
            <hr width = “2” size = “100”>
            
            </div>";
            break;
          case 45:
            echo "<div class='hierarquicodqdquatro-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos -> Competência dos Eixos  (Você está aqui) -></h3>
            <h3>Competência Derivada  -> Conteúdos</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            <a href='resultSearch.php?threadid=46'>Competências do Eixo IV</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=98'>Engenharia de Software</a><br>
            <hr width = “2” size = “100”>

            </div>";
            break;
          case 46:
            echo "<div class='hierarquicodqdcinco-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos -> Competência dos Eixos   (Você está aqui)  -></h3>
            <h3>Competência Derivada-> Conteúdos</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            <a href='resultSearch.php?threadid=47'>Eixo 4 - Implementação de Sistemas</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=38'>C.4.1 - Tomar decisões e inovar, com base no conhecimento do funcionamento e das carac</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=39'>C.4.2 - Compreender e explicar as dimensões quantitativas de um problema/a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=40'>C.4.3 - Preparar e apresentar seus trabalhos e problemas técnicos e suas soluções para audiências diversas, em formatos apropriados (oral e escrito) </a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=41'>C.4.4 - Avaliar criticamente projetos de sistemas de computação</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=42'>C.4.5 - Ler texxtos técnicos na língua inglesa </a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=43'>C.4.6 - Ser capaz de realizar trabalho cooperativo e entender os benefícios que este pode produzir</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=44'>C.4.7 - Conceber soluções computacionais a partir de decisões visando o equilíbrio de todos os fatores</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=46'>C.4.8 - Empregar metodologias que visem garantir critérios de qualidade ao longo de todas as etapas de desenvolvimento de uma solução computacional</a><br>
            <hr width = “2” size = “100”>

            </div>";
            break;
          case 47:
            echo "<div class='hierarquicodqdsete-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos  (Você está aqui)  -> Competência dos Eixos -></h3>
            <h3>Competência Derivada -> Conteúdos</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            <a href='resultSearch.php?threadid=2'>Ciência da Computação</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=46'>Competências do Eixo IV</a><br>
            <hr width = “2” size = “100”>
            </div>";
            break;
          case 48:
            echo "<div class='hierarquicodqdoito-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos  -> Competência dos Eixos -></h3>
            <h3>Competência Derivada  (Você está aqui) -> Conteúdos</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            <a href='resultSearch.php?threadid=59'>Competências do Eixo V</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=135'>Programação Imperativa</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=133'>Programação em Linguagem Script</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=132'>Programação em Linguagem de Montagem</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=136'>Programação Orientada a Objetos</a><br>
            <hr width = “2” size = “100”>
            </div>";
            break;
          case 49:
            echo "<div class='hierarquicodcm-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos  -> Competência dos Eixos -></h3>
            <h3>Competência Derivada  (Você está aqui) -> Conteúdos</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            <a href='resultSearch.php?threadid=59'>Competências do Eixo V</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=157'>Ética em Computação</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=113'>Legislação de Informática</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=151'>Sistemas Operacionais</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=144'>Segurança de Sistemas Computacionais</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=80'>Arquitetura e Organização de Computadores</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=148'>Sistemas Distribuídos</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=144'>Segurança de Sistemas Computacionais</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=142'>Redes de Computadores</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=118'>Meio Ambiente e Computação</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=85'>Banco de Dados</a><br>
            <hr width = “2” size = “100”>

            </div>";
            break;
          case 50:
            echo "<div class='hierarquicodcdois-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos  -> Competência dos Eixos -></h3>
            <h3>Competência Derivada  (Você está aqui) -> Conteúdos</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            <a href='resultSearch.php?threadid=59'>Competências do Eixo V</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=126'>Probabilidade e Estatística</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=122'>Métodos Quantitativos em Computação</a><br>
            <hr width = “2” size = “100”>
            </div>";
            break;
          case 51:
            echo "<div class='hierarquicodctres-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos  -> Competência dos Eixos -></h3>
            <h3>Competência Derivada  (Você está aqui) -> Conteúdos</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            <a href='resultSearch.php?threadid=59'>Competências do Eixo V</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=84'>Avaliação de Desempenho</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=87'>Complexidade de Algoritmos</a><br>
            <hr width = “2” size = “100”>
            

            </div>";
            break;
          case 52:
            echo "<div class='hierarquicodctres-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos  -> Competência dos Eixos -></h3>
            <h3>Competência Derivada  (Você está aqui) -> Conteúdos</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            <a href='resultSearch.php?threadid=59'>Competências do Eixo V</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=108'>Inglês Instrumental</a><br>
            <hr width = “2” size = “100”>

            </div>";
            break;
          case 53:
            echo "<div class='hierarquicodcquatro-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos  -> Competência dos Eixos -></h3>
            <h3>Competência Derivada  (Você está aqui) -> Conteúdos</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            <a href='resultSearch.php?threadid=59'>Competências do Eixo V</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=157'>Ética em Computação</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=101'>Fundamentos de Administração</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=104'>Gerenciametno de Projetos</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=92'>Comunicação Profissional</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=88'>Comportamento Humano nas Organizações</a><br>
            <hr width = “2” size = “100”>

            </div>";
            break;
          case 54:
            echo "<div class='hierarquicodcquinto-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos  -> Competência dos Eixos -></h3>
            <h3>Competência Derivada  (Você está aqui) -> Conteúdos</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            <a href='resultSearch.php?threadid=59'>Competências do Eixo V</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=96'>Dependabilidade</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=144'>Segurança e Sistemas Computacionais</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=99'>Ergonomia</a><br>
            <hr width = “2” size = “100”>

            </div>";
            break;
          case 55:
            echo "<div class='hierarquicodcquatro-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos  -> Competência dos Eixos -></h3>
            <h3>Competência Derivada  (Você está aqui) -> Conteúdos</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            <a href='resultSearch.php?threadid=59'>Competências do Eixo V</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=138'>Projeto de Sistemas Computacionais</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=98'>Engenharia de Software</a><br>
            <hr width = “2” size = “100”>

            </div>";
            break;
          case 56:
            echo "<div class='hierarquicodcseis-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos -> Competência dos Eixos -></h3>
            <h3>Competência Derivada  (Você está aqui) -> Conteúdos</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            <a href='resultSearch.php?threadid=59'>Competências do Eixo V</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=148'>Sistemas Distribuídos</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=138'>Projeto de Sistema Computacionais</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=129'>Processamento Paralelo</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=112'>Internet das Coisas (IoT)</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=147'>Sistemas de Tempo Real</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=151'>Sistemas Operacionais</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=149'>Sistemas Embarcados</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=85'>Banco de Dados</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=142'>Redes de Computadores</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=84'>Avaliação de Desempenho</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=129'>Processamento Paralelo</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=90'>Computação em Nuvem</a><br>
            <hr width = “2” size = “100”>
            

            </div>";
            break;
          case 57:
            echo "<div class='hierarquicodcsete-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos -> Competência dos Eixos -></h3>
            <h3>Competência Derivada  (Você está aqui) -> Conteúdos</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            <a href='resultSearch.php?threadid=59'>Competências do Eixo V</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=125'>Privacidade e Direitos Civis</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=104'>Gerenciamento de Projetos</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=157'>Ética em Computação</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=139'>Propriedade Intelectual</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=111'>Interação Humano-Computador</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=145'>Simulação de Sistemas</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=107'>História da Computação</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=152'>Sustentabilidade</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=118'>Meio Ambiente em Programação</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=120'>Modelagem de Sistemas</a><br>
            <hr width = “2” size = “100”>

            </div>";
            break;
          case 58:
            echo "<div class='hierarquicodcoito-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos -> Competência dos Eixos -></h3>
            <h3>Competência Derivada  (Você está aqui) -> Conteúdos</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            <a href='resultSearch.php?threadid=59'>Competências do Eixo V</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=150'>Sistemas Multimídia</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=148'>Sistemas Distribuídos</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=142'>Redes de Computadores</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=127'>Processamento de Imagens</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=141'>Recuperação da Informação</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=93'>Criptografia</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=85'>Banco de Dados</a><br>
            <hr width = “2” size = “100”>
            
            </div>";
            break;
          case 59:
            echo "<div class='hierarquicodcnove-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos -> Competência dos Eixos  (Você está aqui) -></h3>
            <h3>Competência Derivada  -> Conteúdos</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            <a href='resultSearch.php?threadid=60'>Eixo 5 - Gestão de Infraestrutura</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=48'>C.5.1 - Resolver problemas usando ambientes de programação</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=49'>C.5.2 - Tomar decisões e inovar, com base no conhecimento do funcionamento e das características técnicas de hardware e da infraestrutura de software dos sistemas de computação, consciente dos aspectos éticos, legais e dos impactos ambientais decorrentes</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=50'>C.5.3 - Compreender e explicar as dimensões quantitativas de um problema</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=51'>C.5.4 - Avaliar criticamente projetos de sistemas de computação</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=52'>C.5.5 - Ler textos técnicos na língua Inglesa</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=53'>C.5.6 - Ser capaz de realizar trabalho cooperativo e entender os benefícios que este pode produzir</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=54'>C.5.7 - Identificar e gerenciar os riscos que podem estar envolvidos na opração de equipamentos de computação (incluindo os aspectos de dependabilidade e segurança)</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=55'>C.5.8 - Identificar e analisar requisitos e especificações para problemas específicos e planejar estratégias para suas soluções</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=56'>C.5.9 - Especificar, projetar, implementar, manter e avaliar sistemas de computação, empregando teorias, práticas e ferramentas adequadas</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=57'>C.5.10 - Conceber soluções computacionais a partir de decisões visando o equilíbrio de todos os fatores envolvidos</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=58'>C.5.11 - Aplicar os princípios de gerência, organização e recuperação da informação de vários tipos, incluindo texto imagem som e vídeo</a><br>
            <hr width = “2” size = “100”>
            

            </div>";
            break;
          case 60:
            echo "<div class='hierarquicodqcdez-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos -> Competência dos Eixos -></h3>
            <h3>Competência Derivada  (Você está aqui) -> Conteúdos</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            <a href='resultSearch.php?threadid=2'>Ciência da Computação</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=59'>Competências do Eixo V</a><br>
            <hr width = “2” size = “100”>
            </div>";
            break;
          case 61:
            echo "<div class='hierarquicodqsum-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos  -> Competência dos Eixos -></h3>
            <h3>Competência Derivada (Você está aqui) -> Conteúdos</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            <a href='resultSearch.php?threadid=68'>Competências do Eixo VI</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=105'>Gestão de Carreira Profissional</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=106'>Gestão de Tempo</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=83'>Autorregulação da Aprendizagem</a><br>
            <hr width = “2” size = “100”>
            </div>";
            break;
          case 62:
            echo "<div class='hierarquicodqsdois-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos -> Competência dos Eixos -></h3>
            <h3>Competência Derivada  (Você está aqui) -> Conteúdos</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            <a href='resultSearch.php?threadid=68'>Competências do Eixo VI</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=92'>Comunicação Profissional</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=109'>Inglês Técnico</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=119'>Métodologia Científica</a><br>
            <hr width = “2” size = “100”>
            
            </div>";
            break;
          case 63:
            echo "<div class='hierarquicodqstres-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos  -> Competência dos Eixos -></h3>
            <h3>Competência Derivada (Você está aqui) -> Conteúdos</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            <a href='resultSearch.php?threadid=68'>Competências do Eixo VI</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=119'>Métodologia Científica</a><br>
            <hr width = “2” size = “100”>

            </div>";
            break;
          case 64:
            echo "<div class='hierarquicodqstres-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos  -> Competência dos Eixos -></h3>
            <h3>Competência Derivada (Você está aqui) -> Conteúdos</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            <a href='resultSearch.php?threadid=68'>Competências do Eixo VI</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=108'>Inglês Instrumental</a><br>
            <hr width = “2” size = “100”>

            </div>";
            break;
          case 65:
            echo "<div class='hierarquicodqsquatro-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos -> Competência dos Eixos -></h3>
            <h3>Competência Derivada  (Você está aqui) -> Conteúdos</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            <a href='resultSearch.php?threadid=68'>Competências do Eixo VI</a><br>
            <hr width = “2” size = “100”>
            <h3>Todos os conceitos aplicáveis a este Tesauro.</3><br>
            

            </div>";
            break;
          case 66:
            echo "<div class='hierarquicodqsquinto-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos  -> Competência dos Eixos -></h3>
            <h3>Competência Derivada  (Você está aqui) -> Conteúdos</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            <a href='resultSearch.php?threadid=68'>Competências do Eixo VI</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=80'>Arquitetura e Organização de Computadores</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=153'>Teoria da Computação</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=79'>Algoritmos</a><br>
            <hr width = “2” size = “100”>

            </div>";
            break;
          case 67:
            echo "<div class='hierarquicodqsseis-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos  -> Competência dos Eixos -></h3>
            <h3>Competência Derivada (Você está aqui) -> Conteúdos</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            <a href='resultSearch.php?threadid=68'>Competências do Eixo VI</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=145'>Simulação de Sistemas</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=120'>Modelagem de Sistemas</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=122'>Métodos Quantitativos em Computação</a><br>
            <hr width = “2” size = “100”>
            

            </div>";
            break;
          case 68:
            echo "<div class='hierarquicodqssete-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos   -> Competência dos Eixos (Você está aqui) -></h3>
            <h3>Competência Derivada -> Conteúdos</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            <a href='resultSearch.php?threadid=69'>Eixo 6 - Aprendizado Contínuo e Autônomo</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=61'>C.6.1 - Gerir a sua própria aprendizagem e desenvolvimento, incluindo a gestão de tempo e competências organizacionais</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=62'>C.6.2 - Preparar e apresentar seus trabalhos e problemas técnicos e suas soluções para audiências diversas, em formatos apropriados(oral e escrito)</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=63'>C.6.3 - Avaliar criticamente projetos de sistemas de computação</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=64'>C.6.4 - Ler textos técnicos na língua Inglesa</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=65'>C.6.5 - Ser capaz de realizar trabalho cooperativo e entender os benefícios que este pode produzir</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=66'>C.6.6 - Compreender os fatos essenciais, os conceitos, os princípios e as teorias relacionadas à Ciência da Computação para o desenvolvimento de software e hardware e suas aplicações</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=67'>C.6.7 - Analisar quanto um sistema baseado em computadores atende os critérios definidos para seu uso corrente e futuro (adequabilidade)</a><br>
            <hr width = “2” size = “100”>


            </div>";
            break;
          case 69:
            echo "<div class='hierarquicodqsoito-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos (Você está aqui) -> Competência dos Eixos -></h3>
            <h3>Competência Derivada -> Conteúdos</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            <a href='resultSearch.php?threadid=2'>Ciência da Computação</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=68'>Competências do Eixo VI</a><br>
            <hr width = “2” size = “100”>
            
            
            </div>";
            break;
          case 70:
            echo "<div class='hierarquicodqsnove-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos   -> Competência dos Eixos -></h3>
            <h3>Competência Derivada (Você está aqui) -> Conteúdos</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            <a href='resultSearch.php?threadid=77'>Competências do Eixo VII</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=79'>Algoritmos</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=116'>Matemática Discreta</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=115'>Lógica Matemática</a><br>
            <hr width = “2” size = “100”>
            
            
            </div>";
            break;
          case 71:
            echo "<div class='hierarquicodqsnove-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos   -> Competência dos Eixos -></h3>
            <h3>Competência Derivada (Você está aqui) -> Conteúdos</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            <a href='resultSearch.php?threadid=77'>Competências do Eixo VII</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=87'>Complexidade de Algoritmos</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=153'>Teoria da Computação</a><br>
            <hr width = “2” size = “100”>
            </div>";
            break;
          case 72:
            echo "<div class='hierarquicodqsdez-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos   -> Competência dos Eixos -></h3>
            <h3>Competência Derivada (Você está aqui) -> Conteúdos</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            <a href='resultSearch.php?threadid=77'>Competências do Eixo VII</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=87'>Complexidade de Algoritmos</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=126'>Probabilidade e Estatistica</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=84'>Avaliação de Desempenho</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=122'>Métodos Quantitativos em Computação</a><br>
            <hr width = “2” size = “100”>
          
            </div>";
            break;
          case 73:
            echo "<div class='hierarquicodqsonze-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos   -> Competência dos Eixos -></h3>
            <h3>Competência Derivada (Você está aqui) -> Conteúdos</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            <a href='resultSearch.php?threadid=77'>Competências do Eixo VII</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=87'>Complexidade de Algoritmos</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=153'>Teoria da Computação</a><br>
            <hr width = “2” size = “100”>
            </div>";
            break;
          case 74:
            echo "<div class='hierarquicodqstreze-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos   -> Competência dos Eixos -></h3>
            <h3>Competência Derivada (Você está aqui) -> Conteúdos</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            <a href='resultSearch.php?threadid=77'>Competências do Eixo VII</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=98'>Engenharia de Software</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=138'>Projeto de Sistemas Computacionais</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=121'>Métodos Formais</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=119'>Metodologia Científica</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=77'>Competências do Eixo VII</a><br>
            <hr width = “2” size = “100”>

            </div>";
            break;
          case 75:
            echo "<div class='hierarquicodqstreze-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos   -> Competência dos Eixos -></h3>
            <h3>Competência Derivada (Você está aqui) -> Conteúdos</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            <a href='resultSearch.php?threadid=77'>Competências do Eixo VII</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=138'>Projeto de Sistemas Computacionais</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=157'>Ética em Computação</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=125'>Privacidade e Direito Civis</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=139'>Propriedade Intelectual</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=89'>Computação e Sociedade</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=111'>Interação Humano-Computador</a><br>
            <hr width = “2” size = “100”>
            

            </div>";
            break;
          case 76:
            echo "<div class='hierarquicodqsqtz-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos   -> Competência dos Eixos -></h3>
            <h3>Competência Derivada (Você está aqui) -> Conteúdos</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            <a href='resultSearch.php?threadid=77'>Competências do Eixo VII</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=80'>Arquitetura e Organização de Computadores</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=87'>Complexidade de Algoritmos</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=148'>Sistemas Distribuídos</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=81'>Arquiteturas Paralelas de Computadores</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=142'>Redes de Computadores</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=129'>Processamento Paralelo</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=153'>Teoria da Computação</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=151'>Sistemas Operacionais</a><br>
            <hr width = “2” size = “100”>
            
            </div>";
            break;
          case 77:
            echo "<div class='hierarquicodqsquinze-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos   -> Competência dos Eixos (Você está aqui) -></h3>
            <h3>Competência Derivada  -> Conteúdos</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            <a href='resultSearch.php?threadid=78'>Eixo 7 - Ciência, Tecnologia e Inovação</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=70'>C.7.1 - Identificar problemas que tenham solução algorítmica</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=71'>C.7.2 - Conhecer os limites da computação</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=158'>C.7.3 - Conhecer os limites da computação</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=72'>C.7.4 - Compreender e explicar as dimensões quantitativas de um problema</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=73'>C.7.5 - Compreender os fatos essenciais, os conceitos, os princípios e as teorias relacionadas à Ciência da Computação para o desenvolvimento de software e hardware e suas aplicações</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=74'>C.7.6 - Identificar e analisar requisitos e especificações para problemas específicos e planejar estratégias para suas soluções</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=75'>C.7.7 - Conceber soluções computacionais a partir de decisões, visando o equilíbrio de todos os fatores envolvidos</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=76'>C.7.8 - Aplicar temas e princípios recorrentes, como abstração, complexidade, princípio de localidade de referência (caching), compartilhamento de recursos, segurança, concorrência, evolução de sistemas, entre outros, e reconhecer que esses temas e princípios são fundamentais à área de Ciência da Computação</a><br>
            <hr width = “2” size = “100”>



            </div>";
            break;
          case 78:
            echo "<div class='hierarquicodqsseteoito-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos  (Você está aqui)  -> Competência dos Eixos -></h3>
            <h3>Competência Derivada -> Conteúdos</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            <a href='resultSearch.php?threadid=2'>Ciência da Computação</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=77'>Competências do Eixo VII</a><br>
            <hr width = “2” size = “100”>

            </div>";
            break;
          case 79:
            echo "<div class='hierarquicodqssetenove-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos -> Competência dos Eixos -></h3>
            <h3>Competência Derivada -> Conteúdos (Você está aqui)</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            <a href='resultSearch.php?threadid=3'>C.1.1 - Identificar problemas que tenham solução algorítmica</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=3'>C.1.3 - Resolver problemas que tenham solução algorítmica</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=3'>C.1.5 - Reconhecer a importância do pensamento computacional no cotidiano e sua aplicação em circustâncias apropriadas e em domínios diversos</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=3'>C.2.1 - Resolver problemas usando ambientes de programação</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=3'>C.2.6 - Compreender os fatos essenciais, os conceitos, os princípios e as teorias relacionadas à Ciência da Computação para o desenvolvimento de software e hardware e suas aplicações</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=3'>C.6.5 - Ser capaz de realizar trabalho cooperativo e entender os benefícios que este pode produzir</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=3'>C.6.6 - Compreender os fatos essenciais, os conceitos, os princípios e as teorias relacionadas à Ciência da Computação para o desenvolvimento de software e hardware e suas aplicações</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=3'>C.7.1 - Identificar problemas que tenham solução algorítmica</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=3'>C.7.5 - Compreender os fatos essenciais, os conceitos, os princípios e as teorias relacionadas à Ciência da Computação, para o densenvolvimento de software e hardware e suas aplicações</a><br>
            <hr width = “2” size = “100”>
            <h1>Vídeo Recomendado</h1>
            <h5><iframe width='750' height='355' src='https://www.youtube.com/embed/iEVLDKOLgQk' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe></h5>
            </div>";
            break;
          case 80:
            echo "<div class='hierarquicodqssoitenta-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos -> Competência dos Eixos -></h3>
            <h3>Competência Derivada -> Conteúdos (Você está aqui)</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            <a href='resultSearch.php?threadid=9'>C.1.7 - Aplicar temas e princípios recorrentes, como abstração, complexidade, princípio de localidade de referência (caching)...</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=13'>C.2.2 - Tomar decisões e inovar, com base no conhecimento do funcionamento e das características técnicas de hardware...</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=17'>C.2.6 - Compreender os fatos essenciais, os conceitos, os princípios e as teorias relacionadas à Ciência da Computação...</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=38'>C.4.1 - Tomar decisões e inovar, com base no conhecimento do funcionamento e das características técnicas de hardware...</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=49'>C.5.2 - Tomar decisões e inovar, com base no conhecimento do funcionamento e das características técnicas de hardware...</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=65'>C.6.5 - Ser capaz de realizar trabalho cooperativo e entender os benefícios que este pode produzir</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=66'>C.6.6 - Compreender os fatos essenciais, os conceitos, os princípios e as teorias relacionadas à Ciência da Computação...</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=158'>C.7.3 - Tomar decisões e inovar, com base no conhecimento do funcionamento e das características técnicas de hardware...</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=73'>C.7.5 - Compreender os fatos essenciais, os conceitos, os princípios e as teorias relacionadas à Ciência da Computação...</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=76'>C.7.8 - Aplicar temas e princípios recorrentes, como abstração, complexidade, princípio de localidade de referência (caching)...</a><br>
            <hr width = “2” size = “100”>
            <h1>Vídeo Recomendado</h1>
            <h5><iframe width='750' height='355' src='https://www.youtube.com/embed/4IROmEjGXpU' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe></h5>
            </div>";
            break;
          case 81:
            echo "<div class='hierarquicodqssoitenta-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos -> Competência dos Eixos -></h3>
            <h3>Competência Derivada -> Conteúdos (Você está aqui)</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            <a href='resultSearch.php?threadid=9'>C.1.7 - Aplicar temas e princípios recorrentes, como abstração, complexidade, princípio de localidade de referência (caching)...</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=65'>C.6.5 - Ser capaz de realiar trabalho cooperativo e etender os benefícios que este pode produzir</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=76'>C.7.8 - Aplicar temas e princípios recorrentes, como abstração, complexidade, princípio de localidade de referência (caching)...</a><br>
            <hr width = “2” size = “100”>
            <h1>Vídeo Recomendado</h1>
            <h5><iframe width='750' height='355' src='https://www.youtube.com/embed/glhacfJ8wes' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe></h5>

            </div>";
            break;
          case 82:
            echo "<div class='hierarquicodauto-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos -> Competência dos Eixos -></h3>
            <h3>Competência Derivada -> Conteúdos (Você está aqui)</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            <a href='resultSearch.php?threadid=17'>C.2.6 - Compreender os fatos essenciais, os conceitos, os princípios e as teorias relacionadas à Ciência da Computação para o desenvolvimento de software e hardware e suas aplicações</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=65'>C.6.5 - Ser capaz de realizar trabalho cooperativo e entender os benefícios que este pode produzir</a><br>
            <hr width = “2” size = “100”>

            </div>";
            break;
          case 83:
            echo "<div class='hierarquicodqssoitentatres-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos -> Competência dos Eixos -></h3>
            <h3>Competência Derivada -> Conteúdos (Você está aqui)</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            <a href='resultSearch.php?threadid=61'>C.6.1 - Gerir a sua própria aprendizagem e desenvolvimento, incluindo a gestão de tempo e competências organizacionais</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=65'>C.6.5 - Ser capaz de realizar trabalho cooperativo e entender os benefícios que este pode produzir</a><br>
            <hr width = “2” size = “100”>
            </div>";
            break;
          case 84:
            echo "<div class='hierarquicodqssoitentaquatro-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos -> Competência dos Eixos -></h3>
            <h3>Competência Derivada -> Conteúdos (Você está aqui)</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            <a href='resultSearch.php?threadid=14'>C.2.3 - Avaliar criticamente projetos de sistemas de computação</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=25'>C.3.1 - Compreender e explicar as dimensões quantitativas de um problema</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=41'>C.4.4 - Avaliar criticamente projetos de sistemas de computação</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=51'>C.5.4 - Avaliar criticamente projetos de sistemas de computação</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=56'>C.5.9 - Especificar, projetar, implementar, manter e avaliar sistemas de computação, empregando teorias, práticas e ferramentas adequadas</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=65'>C.6.5 - Ser capaz de realizar trabalho cooperativo e entender os benefícios que este pode produzir</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=72'>C.7.4 - Compreender e explicar as dimensões quantitativas de um problema</a><br>
            <hr width = “2” size = “100”>
            
            <h1>Vídeo Recomendado</h1>
            <h5><iframe width='750' height='355' src='https://www.youtube.com/embed/HJirZ2sHWgM' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe></h5>
            </div>";
            break;
          case 85:
            echo "<div class='hierarquicodqssoitentacinco-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos -> Competência dos Eixos -></h3>
            <h3>Competência Derivada -> Conteúdos (Você está aqui)</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            <a href='resultSearch.php?threadid=9'>C.1.7 - Aplicar temas e princípios recorrentes, como abstração, complexidade, princípio de localidade de referência (caching)...</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=12'>C.2.1 - Resolver problemas usando ambientes de programação</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=13'>C.2.2 - Tomar decisões e inovar, com base no conhecimento do funcionamento e das características técnicas de hardware...</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=21'>C.2.10 - Aplicar os princípios de gerência, organização e recuperação da informação de vários tipos, incluindo texto imagem som e vídeo</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=38'>C.4.1 - Tomar decisões e inovar, com base no conhecimento do funcionamento e das características técnicas de hardware...</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=49'>C.5.2 - Tomar decisões e inovar, com base no conhecimento do funcionamento e das características técnicas de hardware...</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=56'>C.5.9 - Especificar, projetar, implementar, manter e avaliar sistemas de computação, empregando teorias, práticas e ferramentas adequadas</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=58'>C.5.11 - Aplicar os princípios de gerência, organização e recuperação da informação de vários tipos, incluindo texto imagem som e vídeo</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=65'>C.6.5 - Ser capaz de realizar trabalho cooperativo e entender os benefícios que este pode produzir</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=158'>C.7.3 - Tomar decisões e inovar, com base no conhecimento do funcionamento e das características técnicas de hardware</a><br>
            <hr width = “2” size = “100”>

            <h1>Vídeo Recomendado</h1>
            <h5><iframe width='750' height='355' src='https://www.youtube.com/embed/XfO3TRvESBo' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe></h5>

            </div>";
            break;
          case 86:
            echo "<div class='hierarquicodqssoitentaseis-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos -> Competência dos Eixos -></h3>
            <h3>Competência Derivada -> Conteúdos (Você está aqui)</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            <a href='resultSearch.php?threadid=5'>C.1.3 - Resolver problemas usando ambientes de programação</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=65'>C.6.5 - Ser capaz de realizar trabalho cooperativo e entender os benefícios que este pode produzir</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=73'>C.6.5 - C.7.5 - Compreender os fatos essenciais, os conceitos, os princípios e as teorias relacionadas à Ciência da Computação para o desenvolvimento de software e hardware e suas aplicações</a><br>
            <hr width = “2” size = “100”>

            <h1>Vídeo Recomendado</h1>
            <h5><iframe width='750' height='355' src='https://www.youtube.com/embed/afUiVvDUIRA' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe></h5>
            </div>";
            break;
          case 87:
            echo "<div class='hierarquicodqssoitentasete-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos -> Competência dos Eixos -></h3>
            <h3>Competência Derivada -> Conteúdos (Você está aqui)</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            <a href='resultSearch.php?threadid=4'>C.1.2 - Conhecer os limites da computação</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=6'>C.1.4 - Compreender e explicar as dimensões quantitativas de um problema</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=9'>C.1.7 - Aplicar temas e princípios recorrentes, como abstração, complexidade, princípio de localidade de referência (caching)...</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=51'>C.5.4 - Avaliar criticamente projetos de sistemas de computação</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=65'>C.6.5 - Ser capaz de realizar trabalho cooperativo e entender os benefícios que este pode produzir</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=71'>C.7.2 - Conhecer os limites da computação</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=72'>C.7.4 - Compreender e explicar as dimensões quantitativas de um problema</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=76'>C.7.8 - Aplicar temas e princípios recorrentes, como abstração, complexidade, princípio de localidade de referência (caching), compartilhamento de recursos, segurança, concorrência, evolução de sistemas, entre outros, e reconhecer que esses temas e princípios são fundamentais à área de Ciência da Computação</a><br>
            <hr width = “2” size = “100”>

            <h1>Vídeo Recomendado</h1>
            <h5><iframe width='750' height='355' src='https://www.youtube.com/embed/gRDl0VIhu4A' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe></h5>
            

            </div>";
            break;
          case 88:
            echo "<div class='hierarquicodauto-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos -> Competência dos Eixos -></h3>
            <h3>Competência Derivada -> Conteúdos (Você está aqui)</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            <a href='resultSearch.php?threadid=16'>C.2.5 - Ser capaz de realizar trabalho cooperativo e entender os benefícios que este pode produzir</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=30'>C.3.6 - Ser capaz de realizar trabalho cooperativo e entender os benefícios que este pode produzir</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=43'>C.4.6 - Ser capaz de realizar trabalho cooperativo e entender os benefícios que este pode produzir</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=53'>C.5.6 - Ser capaz de realizar trabalho cooperativo e entender os benefícios que este pode produzir</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=65'>C.6.5 - Ser capaz de realizar trabalho cooperativo e entender os benefícios que este pode produzir</a><br>
            <hr width = “2” size = “100”>
            
            </div>";
            break;
          case 89:
            echo "<div class='hierarquicodqssoitentatrinta-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos -> Competência dos Eixos -></h3>
            <h3>Competência Derivada -> Conteúdos (Você está aqui)</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            <a href='resultSearch.php?threadid=7'>C.1.5 - Reconhecer a importância do pensamento computacional no cotidiano e sua aplicação em circunstâncias apropriadas e em domínios diversos</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=13'>C.2.2 - Tomar decisões e inovar, com base no conhecimento do funcionamento e das características técnicas de hardware e da infraestrutura de software dos sistemas de computação, consciente dos aspectos éticos, legais e dos impactos ambientais decorrentes</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=31'>C.3.7 - Reconhecer a importância do pensamento computacional no cotidiano e sua aplicação em circunstâncias apropriadas e em domínios diversos</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=38'>C.4.1 - Tomar decisões e inovar, com base no conhecimento do funcionamento e das características técnicas de hardware e da infraestrutura de software dos sistemas de computação consciente dos aspectos éticos, legais e dos impactos ambientais decorrentes</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=49'>C.5.2 - Tomar decisões e inovar, com base no conhecimento do funcionamento e das características técnicas de hardware e da infraestrutura de software dos sistemas de computação, consciente dos aspectos éticos, legais e dos impactos ambientais decorrentes</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=65'>C.6.5 - Ser capaz de realizar trabalho cooperativo e entender os benefícios que este pode produzir</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=158'>C.7.3 - Tomar decisões e inovar, com base no conhecimento do funcionamento e das características técnicas de hardware</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=75'>C.7.7 - Conceber soluções computacionais a partir de decisões, visando o equilíbrio de todos os fatores envolvidos</a><br>
            <hr width = “2” size = “100”>

            </div>";
            break;
          case 90:
            echo "<div class='hierarquicodqssnoventa-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos -> Competência dos Eixos -></h3>
            <h3>Competência Derivada -> Conteúdos (Você está aqui)</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            <a href='resultSearch.php?threadid=13'>C.2.2 - Tomar decisões e inovar, com base no conhecimento do funcionamento e das características técnicas de hardware e da infraestrutura de software dos sistemas de computação, consciente dos aspectos éticos, legais e dos impactos ambientais decorrentes</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=56'>C.5.9 - Especificar, projetar, implementar, manter e avaliar sistemas de computação, empregando teorias, práticas e ferramentas adequadas</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=65'>C.6.5 - Ser capaz de realizar trabalho cooperativo e entender os benefícios que este pode produzir</a><br>
            <hr width = “2” size = “100”>
            <h1>Vídeo Recomendado</h1>
            <h5><iframe width='750' height='355' src='https://www.youtube.com/embed/97l0Ahu2efE' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe></h5>
            
            </div>";
            break;
          case 91:
            echo "<div class='hierarquicodqssnoventaum-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos -> Competência dos Eixos -></h3>
            <h3>Competência Derivada -> Conteúdos (Você está aqui)</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            <a href='resultSearch.php?threadid=22'>C.2.11 - Aplicar os princípios de interação humano-computador para avaliar e construir uma grande variedade de produtos incluindo interface do usuário, páginas WEB, sistemas multimídia e sistemas móveis</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=65'>C.6.5 - Ser capaz de realizar trabalho cooperativo e entender os benefícios que este pode produzir</a><br>
            <hr width = “2” size = “100”>
            <h1>Vídeo Recomendado</h1>
            <h5><iframe width='750' height='355' src='https://www.youtube.com/embed/-4_OU95nKuU' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe></h5>
            
            </div>";
            break;
          case 92:
            echo "<div class='hierarquicodauto-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos -> Competência dos Eixos -></h3>
            <h3>Competência Derivada -> Conteúdos (Você está aqui)</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            <a href='resultSearch.php?threadid=16'>C.2.5 - Ser capaz de realizar trabalho cooperativo e entender os benefícios que este pode produzir</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=26'>C.3.2 - Preparar e apresentar seus trabalhos e problemas técnicos e suas soluções para audiências diversas, em formatos apropriados (oral e escrito)</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=30'>C.3.6 - Ser capaz de realizar trabalho cooperativo e entender os benefícios que este pode produzir</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=40'>C.4.3 - Preparar e apresentar seus trabalhos e problemas técnicos e suas soluções para audiências diversas, em formatos apropriados (oral e escrito) </a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=43'>C.4.6 - Ser capaz de realizar trabalho cooperativo e entender os benefícios que este pode produzir</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=62'>C.6.2 - Preparar e apresentar seus trabalhos e problemas técnicos e suas soluções para audiências diversas, em formatos apropriados(oral e escrito)</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=65'>C.6.5 - Ser capaz de realizar trabalho cooperativo e entender os benefícios que este pode produzir</a><br>
            <hr width = “2” size = “100”>
            </div>";
            break;
          case 93:
            echo "<div class='hierarquicodqssnoventadois-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos -> Competência dos Eixos -></h3>
            <h3>Competência Derivada -> Conteúdos (Você está aqui)</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            <a href='resultSearch.php?threadid=8'>C.1.6 - Conhecer soluções computacionais a partir de decisões visando o equilíbrio de todos os fatores</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=13'>C.2.2 - Tomar decisões e inovar, com base no conhecimento do funcionamento e das características técnicas de hardware e da infraestrutura de software dos sistemas de computação, consciente dos aspectos éticos, legais e dos impactos ambientes decorrentes</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=21'>C.2.10 - Aplicar os princípios de gerência, organização e recuperação da informação de vários tipos, incluindo texto imagem som e vídeo</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=58'>C.5.11 - Aplicar os princípios de gerência, organização e recuperação da informação de vários tipos, incluindo texto imagem som e vídeo</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=65'>C.6.5 - Ser capaz de realizar trabalho cooperativo e entender os benefícios que este pode produzir</a><br>
            <hr width = “2” size = “100”>

            <h1>Vídeo Recomendado</h1>
            <h5><iframe width='750' height='355' src='https://www.youtube.com/embed/_Eeg1LxVWa8' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe></h5>
            </div>";
            break;
          case 94:
            echo "<div class='hierarquicodqssnoventatres-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos -> Competência dos Eixos -></h3>
            <h3>Competência Derivada -> Conteúdos (Você está aqui)</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            <a href='resultSearch.php?threadid=6'>C.1.4 - Compreender e explicar as dimensões quantitativas de um problema</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=65'>C.6.5 - Ser capaz de realizar trabalho cooperativo e entender os benefícios que este pode produzir</a><br>
            <hr width = “2” size = “100”>
            
            <h1>Vídeo Recomendado</h1>
            <h5><iframe width='750' height='355' src='https://www.youtube.com/embed/gc3na4DaGEw' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe></h5>
            </div>";
            break;
          case 95:
            echo "<div class='hierarquicodqssnoventaquatro-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos -> Competência dos Eixos -></h3>
            <h3>Competência Derivada -> Conteúdos (Você está aqui)</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            <a href='resultSearch.php?threadid=6'>C.1.4 - Compreender e explicar as dimensões quantitativas de um problema</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=65'>C.6.5 - Ser capaz de realizar trabalho cooperativo e entender os benefícios que este pode produzir</a><br>
            <hr width = “2” size = “100”>
            
            <h1>Vídeo Recomendado</h1>
            <h5><iframe width='750' height='355' src='https://www.youtube.com/embed/vpqL1PzViXY' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe></h5>
            </div>";
            break;
          case 96:
            echo "<div class='hierarquicodqssnoventacinco-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos -> Competência dos Eixos -></h3>
            <h3>Competência Derivada -> Conteúdos (Você está aqui)</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            <a href='resultSearch.php?threadid=14'>C.2.3 - Avaliar criticamente projetos de sistemas de computação</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=54'>C.5.7 - Identificar e gerenciar os riscos que podem estar envolvidos na opração de equipamentos de computação (incluindo os aspectos de dependabilidade e segurança)</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=65'>C.6.5 - Ser capaz de realizar trabalho cooperativo e entender os benefícios que este pode produzir</a><br>
            <hr width = “2” size = “100”>
            
            <h1>Vídeo Recomendado</h1>
            <h5><iframe width='750' height='355' src='https://www.youtube.com/embed/wGgv_BY5YGs' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe></h5>
            </div>";
            break;
          case 97:
            echo "<div class='hierarquicodqssnoventaseis-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos -> Competência dos Eixos -></h3>
            <h3>Competência Derivada -> Conteúdos (Você está aqui)</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            <a href='resultSearch.php?threadid=7'>C.1.5 - Reconhecer a importância do pensamento computacional no cotidiano e sua aplicação em circunstâncias apropriadas e em domínios diversos</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=29'>C.3.5 - Empreender e exercer liderança, coordenação e supervisão na sua área de atuação profissional</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=65'>C.6.5 - Ser capaz de realizar trabalho cooperativo e entender os benefícios que este pode produzir</a><br>
            <hr width = “2” size = “100”>
            
            <h1>Vídeo Recomendado</h1>
            <h5><iframe width='750' height='355' src='https://www.youtube.com/embed/24lyMv6BrbY' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe></h5>
            </div>";
            break;
          case 98:
            echo "<div class='hierarquicodqssnoventasete-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos -> Competência dos Eixos -></h3>
            <h3>Competência Derivada -> Conteúdos (Você está aqui)</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            <a href='resultSearch.php?threadid=13'>C.2.2 - Tomar decisões e inovar, com base no conhecimento do funcionamento e das características técnicas de hardware e da infraestrutura de software dos sistemas de computação, consciente dos aspectos éticos, legais e dos impactos ambientes decorrentes</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=14'>C.2.3 - Avaliar criticamente projetos de sistemas de computação</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=18'>C.2.7 - Identificar e analisar requisitos e especificações para problemas específicos e planejar estratégias para suas soluções</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=20'>C.2.9 - Analisar quanto um sistema baseado em computadores atende os critérios definidos para seu uso corrente e futuro (adequabilidade)</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=32'>C.3.8 - Identificar e analisar requisitos e especificações para problemas específicos e planejar estratégias para suas soluções</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=33'>C.3.9 - Analisar quanto um sistema baseado em computadores atende os critérios definidos para seu uso corrente e futuro (adequabilidade)</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=40'>C.4.3 - Preparar e apresentar seus trabalhos e problemas técnicos e suas soluções para audiências diversas, em formatos apropriados (oral e escrito) </a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=46'>C.4.8 - Empregar metodologias que visem garantir critérios de qualidade ao longo de todas as etapas de desenvolvimento de uma solução computacional</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=55'>C.5.8 - Identificar e analisar requisitos e especificações para problemas específicos e planejar estratégias para suas soluções</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=65'>C.6.5 - Ser capaz de realizar trabalho cooperativo e entender os benefícios que este pode produzir</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=74'>C.7.6 - Identificar e analisar requisitos e especificações para problemas específicos e planejar estratégias para suas soluções</a><br>
            <hr width = “2” size = “100”>
            
            <h1>Vídeo Recomendado</h1>
            <h5><iframe width='750' height='355' src='https://www.youtube.com/embed/WKt-UYoxRww' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe></h5>
            </div>";
            break;
          case 99:
            echo "<div class='hierarquicodqssnoventaoito-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos -> Competência dos Eixos -></h3>
            <h3>Competência Derivada -> Conteúdos (Você está aqui)</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            <a href='resultSearch.php?threadid=54'>C.5.7 - Identificar e gerenciar os riscos que podem estar envolvidos na opração de equipamentos de computação (incluindo os aspectos de dependabilidade e segurança)</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=65'>C.6.5 - Ser capaz de realizar trabalho cooperativo e entender os benefícios que este pode produzir</a><br>
            <hr width = “2” size = “100”>
          
            </div>";
            break;
          case 100:
            echo "<div class='hierarquicodqssnoventanove-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos -> Competência dos Eixos -></h3>
            <h3>Competência Derivada -> Conteúdos (Você está aqui)</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            <a href='resultSearch.php?threadid=5'>C.1.3 - Resolver problemas usando ambientes de programação</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=7'>C.1.5 - Reconhecer a importância do pensamento computacional no cotidiano e sua aplicação em circunstâncias apropriadas e em domínios diversos</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=21'>C.2.10 - Aplicar os princípios de gerência, organização e recuperação da informação de vários tipos, incluindo texto imagem som e vídeo</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=31'>C.3.7 - Reconhecer a importância do pensamento computacional no cotidiano e sua aplicação em circunstâncias apropriadas e em domínios diversos</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=65'>C.6.5 - Ser capaz de realizar trabalho cooperativo e entender os benefícios que este pode produzir</a><br>
            <hr width = “2” size = “100”>
            <h1>Vídeo Recomendado</h1>
            <h5><iframe width='750' height='355' src='https://www.youtube.com/embed/EfF1M7myAyY' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe></h5>
          
            </div>";
            break;
          case 101:
            echo "<div class='hierarquicodauto-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos -> Competência dos Eixos -></h3>
            <h3>Competência Derivada -> Conteúdos (Você está aqui)</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            <a href='resultSearch.php?threadid=7'>C.1.5 - Reconhecer a importância do pensamento computacional no cotidiano e sua aplicação em circunstâncias apropriadas e em domínios diversos</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=43'>C.4.6 - Ser capaz de realizar trabalho cooperativo e entender os benefícios que este pode produzir</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=53'>C.5.6 - Ser capaz de realizar trabalho cooperativo e entender os benefícios que este pode produzir</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=65'>C.6.5 - Ser capaz de realizar trabalho cooperativo e entender os benefícios que este pode produzir</a><br>
            <hr width = “2” size = “100”>
            
          
            </div>";
            break;
          case 102:
            echo "<div class='hierarquicodqssnoventadez-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos -> Competência dos Eixos -></h3>
            <h3>Competência Derivada -> Conteúdos (Você está aqui)</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            <a href='resultSearch.php?threadid=8'>C.1.6 - Conhecer soluções computacionais a partir de decisões visando o equilíbrio de todos os fatores</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=44'>C.4.7 - Conceber soluções computacionais a partir de decisões visando o equilíbrio de todos os fatores</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=65'>C.6.5 - Ser capaz de realizar trabalho cooperativo e entender os benefícios que este pode produzir</a><br>
            <hr width = “2” size = “100”>
            
          
            </div>";
            break;
          case 103:
            echo "<div class='hierarquicodqssnoventaonze-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos -> Competência dos Eixos -></h3>
            <h3>Competência Derivada -> Conteúdos (Você está aqui)</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            <a href='resultSearch.php?threadid=6'>C.1.4 - Compreender e explicar as dimensões quantitativas de um problema</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=65'>C.6.5 - Ser capaz de realizar trabalho cooperativo e entender os benefícios que este pode produzir</a><br>
            <hr width = “2” size = “100”>
            
            <h1>Vídeo Recomendado</h1>
            <h5><iframe width='750' height='355' src='https://www.youtube.com/embed/_PjegfEsH78' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe></h5>
            </div>";
            break;
          case 104:
            echo "<div class='hierarquicodauto-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos -> Competência dos Eixos -></h3>
            <h3>Competência Derivada -> Conteúdos (Você está aqui)</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            <a href='resultSearch.php?threadid=16'>C.2.5 - Ser capaz de realizar trabalho cooperativo e entender os benefícios que este pode produzir</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=25'>C.3.1 - Compreender e explicar as dimensões quantitativas de um problema</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=27'>C.3.3 - Avaliar criticamente projetos de sistemas de computação</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=29'>C.3.5 - Empreender e exercer liderança, coordenação...</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=30'>C.3.6 - Ser capaz de realizar trabalho cooperativo e entender os benefícios...</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=32'>C.3.8 - Identificar e analisar requisitos e especificações para problemas...</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=35'>C.3.11 - Escolher e aplicar boas práticas e técnicas que conduzam ao raciocínio...</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=53'>C.5.6 - Ser capaz de realizar trabalho cooperativo e entender os benefícios que este pode produzir</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=57'>C.5.10 - Conceber soluções computacionais a partir de decisões visando o equilíbrio de todos os fatores envolvidos</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=65'>C.6.5 - Ser capaz de realizar trabalho cooperativo e entender os benefícios que este pode produzir</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=75'>C.7.7 - Conceber soluções computacionais a partir de decisões...</a><br>
            <hr width = “2” size = “100”>
            
          
            </div>";
            break;
          case 105:
            echo "<div class='hierarquicodauto-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos -> Competência dos Eixos -></h3>
            <h3>Competência Derivada -> Conteúdos (Você está aqui)</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            <a href='resultSearch.php?threadid=61'>C.6.1 - Gerir a sua própria aprendizagem e desenvolvimento, incluindo a gestão de tempo e competências organizacionais</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=65'>C.6.5 - Ser capaz de realizar trabalho cooperativo e entender os benefícios que este pode produzir</a><br>
            <hr width = “2” size = “100”>
            
            </div>";
            break;
          case 106:
            echo "<div class='hierarquicodauto-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos -> Competência dos Eixos -></h3>
            <h3>Competência Derivada -> Conteúdos (Você está aqui)</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            <a href='resultSearch.php?threadid=61'>C.6.1 - Gerir a sua própria aprendizagem e desenvolvimento, incluindo a gestão de tempo e competências organizacionais</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=65'>C.6.5 - Ser capaz de realizar trabalho cooperativo e entender os benefícios que este pode produzir</a><br>
            <hr width = “2” size = “100”>
            
            </div>";
            break;
          case 107:
            echo "<div class='hierarquicodqssnoventadoze-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos -> Competência dos Eixos -></h3>
            <h3>Competência Derivada -> Conteúdos (Você está aqui)</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            <a href='resultSearch.php?threadid=44'>C.4.7 - Conceber soluções computacionais a partir de decisões visando o equilíbrio de todos os fatores</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=57'>C.5.10 - Conceber soluções computacionais a partir de decisões visando o equilíbrio de todos os fatores envolvidos</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=61'>C.6.1 - Gerir a sua própria aprendizagem e desenvolvimento, incluindo a gestão de tempo e competências organizacionais</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=65'>C.6.5 - Ser capaz de realizar trabalho cooperativo e entender os benefícios que este pode produzir</a><br>
            <hr width = “2” size = “100”>
            
            <h1>Vídeo Recomendado</h1>
            <h5><iframe width='750' height='355' src='https://www.youtube.com/embed/ilwewVTh1R4' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe></h5>
            </div>";
            break;
          case 108:
            echo "<div class='hierarquicodqssnoventatreze-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos -> Competência dos Eixos -></h3>
            <h3>Competência Derivada -> Conteúdos (Você está aqui)</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            <a href='resultSearch.php?threadid=5'>C.1.3 - Resolver problemas usando ambientes de programação</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=15'>C.2.4 - Ler textos técnicos na língua inglesa</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=28'>C.3.4 - Ler textos técnicos na língua inglesa</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=42'>C.4.5 - Ler textos técnicos na língua inglesa </a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=52'>C.5.5 - Ler textos técnicos na língua Inglesa</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=64'>C.6.4 - Ler textos técnicos na língua Inglesa</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=65'>C.6.5 - Ser capaz de realizar trabalho cooperativo e entender os benefícios que este pode produzir</a><br>
            <hr width = “2” size = “100”>
            
            
            </div>";
            break;
          case 109:
            echo "<div class='hierarquicodauto-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos -> Competência dos Eixos -></h3>
            <h3>Competência Derivada -> Conteúdos (Você está aqui)</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            <a href='resultSearch.php?threadid=26'>C.3.2 - Preparar e apresentar seus trabalhos e problemas técnicos e suas soluções para audiências diversas, em formatos apropriados (oral e escrito)</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=62'>C.6.2 - Preparar e apresentar seus trabalhos e problemas técnicos e suas soluções para audiências diversas, em formatos apropriados(oral e escrito)</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=65'>C.6.5 - Ser capaz de realizar trabalho cooperativo e entender os benefícios que este pode produzir</a><br>
            <hr width = “2” size = “100”>
            
            
            </div>";
            break;
          case 110:
            echo "<div class='hierarquicodqssnoventaqtz-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos -> Competência dos Eixos -></h3>
            <h3>Competência Derivada -> Conteúdos (Você está aqui)</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            <a href='resultSearch.php?threadid=8'>C.1.6 - Conhecer soluções computacionais a partir de decisões visando o equilíbrio de todos os fatores</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=9'>C.1.7 - Aplicar temas e princípios recorrentes, como abstração, complexidade, princípio de localidade de referência (caching), compartilhamento de recursos, segurança, concorrência, evolução de sistemas, entre outros, e reconhecer que esses temas e princípios são fundamentais à área de Ciência da Computação</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=21'>C.2.10 - Aplicar os princípios de gerência, organização e recuperação da informação de vários tipos, incluindo texto imagem som e vídeo</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=65'>C.6.5 - Ser capaz de realizar trabalho cooperativo e entender os benefícios que este pode produzir</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=76'>C.7.8 - Aplicar temas e princípios recorrentes, como abstração, complexidade, princípio de localidade de referência (caching), compartilhamento de recursos, segurança, concorrência, evolução de sistemas, entre outros, e reconhecer que esses temas e princípios são fundamentais à área de Ciência da Computação</a><br>
            <hr width = “2” size = “100”>
            
            <h1>Vídeo Recomendado</h1>
            <h5><iframe width='750' height='355' src='https://www.youtube.com/embed/UhA_ZgI-otM' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe></h5>
            </div>";
            break;
          case 111:
            echo "<div class='hierarquicodqssnoventaquinze-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos -> Competência dos Eixos -></h3>
            <h3>Competência Derivada -> Conteúdos (Você está aqui)</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            <a href='resultSearch.php?threadid=12'>C.2.1 - Resolver problemas usando ambientes de programação</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=22'>C.2.11 - Aplicar os princípios de interação humano-computador para avaliar e construir uma grande variedade de produtos incluindo interface do usuário, páginas WEB, sistemas multímidia e sistemas móveis</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=57'>C.5.10 - Conceber soluções computacionais a partir de decisões visando o equilíbrio de todos os fatores envolvidos</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=65'>C.6.5 - Ser capaz de realizar trabalho cooperativo e entender os benefícios que este pode produzir</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=75'>C.7.7 - Conceber soluções computacionais a partir de decisões, visando o equilíbrio de todos os fatores envolvidos</a><br>
            <hr width = “2” size = “100”>
            
            <h1>Vídeo Recomendado</h1>
            <h5><iframe width='750' height='355' src='https://www.youtube.com/embed/grupku0OOQw' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe></h5>
            </div>";
            break;
          case 112:
            echo "<div class='hierarquicodqssnoventadzs-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos -> Competência dos Eixos -></h3>
            <h3>Competência Derivada -> Conteúdos (Você está aqui)</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            
            <a href='resultSearch.php?threadid=22'>C.2.11 - Aplicar os princípios de interação humano-computador para avaliar e construir uma grande variedade de produtos incluindo interface do usuário, páginas WEB, sistemas multímidia e sistemas móveis</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=56'>C.5.9 - Especificar, projetar, implementar, manter e avaliar sistemas de computação, empregando teorias, práticas e ferramentas adequadas</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=65'>C.6.5 - Ser capaz de realizar trabalho cooperativo e entender os benefícios que este pode produzir</a><br>
            <hr width = “2” size = “100”>
            
            
            <h1>Vídeo Recomendado</h1>
            <h5><iframe width='750' height='355' src='https://www.youtube.com/embed/7-hHJQD4fRY' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe></h5>
            </div>";
            break;
          case 113:
            echo "<div class='hierarquicodqssnoventadzt-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos -> Competência dos Eixos -></h3>
            <h3>Competência Derivada -> Conteúdos (Você está aqui)</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            
            <a href='resultSearch.php?threadid=8'>C.1.6 - Conhecer soluções computacionais a partir de decisões visando o equilíbrio de todos os fatores</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=13'>C.2.2 - Tomar decisões e inovar, com base no conhecimento do funcionamento e das características técnicas de hardware e da infraestrutura de software dos sistemas de computação, consciente dos aspectos éticos, legais e dos impactos ambientes decorrentes</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=27'>C.3.3 - Avaliar criticamente projetos de sistemas de computação</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=38'>C.4.1 - Tomar decisões e inovar, com base no conhecimento do funcionamento e das carac</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=49'>C.5.2 - Tomar decisões e inovar, com base no conhecimento do funcionamento e das características técnicas de hardware e da infraestrutura de software dos sistemas de computação, consciente dos aspectos éticos, legais e dos impactos ambientais decorrentes</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=65'>C.6.5 - Ser capaz de realizar trabalho cooperativo e entender os benefícios que este pode produzir</a><br>
            <hr width = “2” size = “100”>
            
            
            
            </div>";
            break;
          case 114:
            echo "<div class='hierarquicodqssnoventadztt-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos -> Competência dos Eixos -></h3>
            <h3>Competência Derivada -> Conteúdos (Você está aqui)</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            
            <a href='resultSearch.php?threadid=12'>C.2.1 - Resolver problemas usando ambientes de programação</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=65'>C.6.5 - Ser capaz de realizar trabalho cooperativo e entender os benefícios que este pode produzir</a><br>
            <hr width = “2” size = “100”>
            
            
            <h1>Vídeo Recomendado</h1>
            <h5><iframe width='750' height='355' src='https://www.youtube.com/embed/Ds1n6aHchRU' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe></h5>
            </div>";
            break;
          case 115:
            echo "<div class='hierarquicodqssnoventadznn-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos -> Competência dos Eixos -></h3>
            <h3>Competência Derivada -> Conteúdos (Você está aqui)</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            
            <a href='resultSearch.php?threadid=3'>C.1.1 - Identificar problemas que tenham solução algorítmica</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=5'>C.1.3 - Resolver problemas usando ambientes de programação</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=17'>C.2.6 - Compreender os fatos essenciais, os conceitos, os princípios e as teorias relacionadas à Ciência da Computação para o desenvolvimento de software e hardware e suas aplicações</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=31'>C.3.7 - Reconhecer a importância do pensamento computacional no cotidiano e sua aplicação em circunstâncias apropriadas e em domínios diversos</a><br>
            <hr width = “2” size = “100”>

            <a href='resultSearch.php?threadid=65'>C.6.5 - Ser capaz de realizar trabalho cooperativo e entender os benefícios que este pode produzir</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=3'>C.7.1 - Identificar problemas que tenham solução algorítmica</a><br>
            <hr width = “2” size = “100”>
            
            
            <h1>Vídeo Recomendado</h1>
            <h5><iframe width='750' height='355' src='https://www.youtube.com/embed/tiARjzPh2pI' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe></h5>
            </div>";
            break;
          case 116:
            echo "<div class='hierarquicodqssnoventadznt-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos -> Competência dos Eixos -></h3>
            <h3>Competência Derivada -> Conteúdos (Você está aqui)</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            
            <a href='resultSearch.php?threadid=3'>C.1.1 - Identificar problemas que tenham solução algorítmica</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=6'>C.1.4 - Compreender e explicar as dimensões quantitativas de um problema</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=17'>C.2.6 - Compreender os fatos essenciais, os conceitos, os princípios e as teorias relacionadas à Ciência da Computação para o desenvolvimento de software e hardware e suas aplicações</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=65'>C.6.5 - Ser capaz de realizar trabalho cooperativo e entender os benefícios que este pode produzir</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=70'>C.7.1 - Identificar problemas que tenham solução algorítmica</a><br>
            <hr width = “2” size = “100”>
            
            
            <h1>Vídeo Recomendado</h1>
            <h5><iframe width='750' height='355' src='https://www.youtube.com/embed/ib3F1c2oKpA' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe></h5>
            </div>";
            break;
          case 118:
            echo "<div class='hierarquicodqssnoventadzntt-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos -> Competência dos Eixos -></h3>
            <h3>Competência Derivada -> Conteúdos (Você está aqui)</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            
            <a href='resultSearch.php?threadid=13'>C.2.2 - Tomar decisões e inovar, com base no conhecimento do funcionamento e das características técnicas de hardware e da infraestrutura de software dos sistemas de computação, consciente dos aspectos éticos, legais e dos impactos ambientes decorrentes</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=27'>C.3.3 - Avaliar criticamente projetos de sistemas de computação</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=38'>C.4.1 - Tomar decisões e inovar, com base no conhecimento do funcionamento e das carac</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=57'>C.5.10 - Conceber soluções computacionais a partir de decisões visando o equilíbrio de todos os fatores envolvidos</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=65'>C.6.5 - Ser capaz de realizar trabalho cooperativo e entender os benefícios que este pode produzir</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=158'>C.7.3 - Conhecer os limites da computação</a><br>
            <hr width = “2” size = “100”>
            
            </div>";
            break;
          case 119:
            echo "<div class='hierarquicodqsscemum-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos -> Competência dos Eixos -></h3>
            <h3>Competência Derivada -> Conteúdos (Você está aqui)</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            <a href='resultSearch.php?threadid=3'>C.1.1 - Identificar problemas que tenham solução algorítmica</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=62'>C.6.2 - Preparar e apresentar seus trabalhos e problemas técnicos e suas soluções para audiências diversas, em formatos apropriados(oral e escrito)</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=63'>C.6.3 - Avaliar criticamente projetos de sistemas de computação</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=65'>C.6.5 - Ser capaz de realizar trabalho cooperativo e entender os benefícios que este pode produzir</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=74'>C.7.6 - Identificar e analisar requisitos e especificações para problemas específicos e planejar estratégias para suas soluções</a><br>
            <hr width = “2” size = “100”>
            <h1>Vídeo Recomendado</h1>
            <h5><iframe width='750' height='355' src='https://www.youtube.com/embed/7uFgLMqYMj0' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe></h5>
            
            </div>";
            break;
          case 120:
            echo "<div class='hierarquicodqsscemdois-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos -> Competência dos Eixos -></h3>
            <h3>Competência Derivada -> Conteúdos (Você está aqui)</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            <a href='resultSearch.php?threadid=41'>C.4.4 - Avaliar criticamente projetos de sistemas de computação</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=44'>C.4.7 - Conceber soluções computacionais a partir de decisões visando o equilíbrio de todos os fatores</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=57'>C.5.10 - Conceber soluções computacionais a partir de decisões visando o equilíbrio de todos os fatores envolvidos</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=65'>C.6.5 - Ser capaz de realizar trabalho cooperativo e entender os benefícios que este pode produzir</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=67'>C.6.7 - Analisar quanto um sistema baseado em computadores atende os critérios definidos para seu uso corrente e futuro (adequabilidade)</a><br>
            <hr width = “2” size = “100”>
            
            
            </div>";
            break;
          case 121:
            echo "<div class='hierarquicodqsscemtreszes-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos -> Competência dos Eixos -></h3>
            <h3>Competência Derivada -> Conteúdos (Você está aqui)</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            <a href='resultSearch.php?threadid=8'>C.1.6 - Conhecer soluções computacionais a partir de decisões visando o equilíbrio de todos os fatores</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=18'>C.2.7 - Identificar e analisar requisitos e especificações para problemas específicos e planejar estratégias para suas soluções</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=32'>C.3.8 - Identificar e analisar requisitos e especificações para problemas específicos e planejar estratégias para suas soluções</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=65'>C.6.5 - Ser capaz de realizar trabalho cooperativo e entender os benefícios que este pode produzir</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=72'>C.7.4 - Compreender e explicar as dimensões quantitativas de um problema</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=74'>C.7.6 - Identificar e analisar requisitos e especificações para problemas específicos e planejar estratégias para suas soluções</a><br>
            <hr width = “2” size = “100”>
            
            </div>";
            break;
          case 122:
            echo "<div class='hierarquicodauto-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos -> Competência dos Eixos -></h3>
            <h3>Competência Derivada -> Conteúdos (Você está aqui)</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            <a href='resultSearch.php?threadid=6'>C.1.4 - Compreender e explicar as dimensões quantitativas de um problema</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=14'>C.2.3 - Avaliar criticamente projetos de sistemas de computação</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=25'>C.3.1 - Compreender e explicar as dimensões quantitativas de um problema</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=39'>C.4.2 - Compreender e explicar as dimensões quantitativas de um problema/a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=50'>C.5.3 - Compreender e explicar as dimensões quantitativas de um problema</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=65'>C.6.5 - Ser capaz de realizar trabalho cooperativo e entender os benefícios que este pode produzir</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=67'>C.6.7 - Analisar quanto um sistema baseado em computadores atende os critérios definidos para seu uso corrente e futuro (adequabilidade)</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=72'>C.7.4 - Compreender e explicar as dimensões quantitativas de um problema</a><br>
            <hr width = “2” size = “100”>
            
            </div>";
            break;
          case 123:
            echo "<div class='hierarquicodqsscemqt-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos -> Competência dos Eixos -></h3>
            <h3>Competência Derivada -> Conteúdos (Você está aqui)</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            <a href='resultSearch.php?threadid=5'>C.1.3 - Resolver problemas usando ambientes de programação</a><br>
            <hr width = “2” size = “100”>
            
            <a href='resultSearch.php?threadid=65'>C.6.5 - Ser capaz de realizar trabalho cooperativo e entender os benefícios que este pode produzir</a><br>
            <hr width = “2” size = “100”>
            
            <h1>Vídeo Recomendado</h1>
            <h5><iframe width='750' height='355' src='https://www.youtube.com/embed/MqddY6Ochkc' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe></h5>
            </div>";
            break;
          case 124:
            echo "<div class='hierarquicodqsscemtres-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos -> Competência dos Eixos -></h3>
            <h3>Competência Derivada -> Conteúdos (Você está aqui)</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            <a href='resultSearch.php?threadid=8'>C.1.6 - Conhecer soluções computacionais a partir de decisões visando o equilíbrio de todos os fatores</a><br>
            <hr width = “2” size = “100”>
            
            <a href='resultSearch.php?threadid=65'>C.6.5 - Ser capaz de realizar trabalho cooperativo e entender os benefícios que este pode produzir</a><br>
            <hr width = “2” size = “100”>
            
            <h1>Vídeo Recomendado</h1>
            <h5><iframe width='750' height='355' src='https://www.youtube.com/embed/ZqXCLOUdm1c' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe></h5>
            </div>";
            break;
          case 125:
            echo "<div class='hierarquicodauto-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos -> Competência dos Eixos -></h3>
            <h3>Competência Derivada -> Conteúdos (Você está aqui)</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            <a href='resultSearch.php?threadid=8'>C.1.6 - Conhecer soluções computacionais a partir de decisões visando o equilíbrio de todos os fatores</a><br>
            <hr width = “2” size = “100”>
            
            <a href='resultSearch.php?threadid=44'>C.4.7 - Conceber soluções computacionais a partir de decisões visando o equilíbrio de todos os fatores</a><br>
            <hr width = “2” size = “100”>

            <a href='resultSearch.php?threadid=57'>C.5.10 - Conceber soluções computacionais a partir de decisões visando o equilíbrio de todos os fatores envolvidos</a><br>
            <hr width = “2” size = “100”>

            <a href='resultSearch.php?threadid=65'>C.6.5 - Ser capaz de realizar trabalho cooperativo e entender os benefícios que este pode produzir</a><br>
            <hr width = “2” size = “100”>

            <a href='resultSearch.php?threadid=75'>C.7.7 - Conceber soluções computacionais a partir de decisões, visando o equilíbrio de todos os fatores envolvidos</a><br>
            <hr width = “2” size = “100”>

            </div>";
            break;
          case 126:
            echo "<div class='hierarquicodqsscemseis-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos -> Competência dos Eixos -></h3>
            <h3>Competência Derivada -> Conteúdos (Você está aqui)</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            <a href='resultSearch.php?threadid=6'>C.1.4 - Compreender e explicar as dimensões quantitativas de um problema</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=25'>C.3.1 - Compreender e explicar as dimensões quantitativas de um problema</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=39'>C.4.2 - Compreender e explicar as dimensões quantitativas de um problema/a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=50'>C.5.3 - Compreender e explicar as dimensões quantitativas de um problema</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=65'>C.6.5 - Ser capaz de realizar trabalho cooperativo e entender os benefícios que este pode produzir</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=72'>C.7.4 - Compreender e explicar as dimensões quantitativas de um problema</a><br>
            <hr width = “2” size = “100”>
            
            <h1>Vídeo Recomendado</h1>
            <h5><iframe width='750' height='355' src='https://www.youtube.com/embed/rQjLdwrHL2c' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe></h5>
            </div>";
            break;
          case 127:
            echo "<div class='hierarquicodqsscemdez-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos -> Competência dos Eixos -></h3>
            <h3>Competência Derivada -> Conteúdos (Você está aqui)</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            <a href='resultSearch.php?threadid=21'>C.2.10 - Aplicar os princípios de gerência, organização e recuperação da informação de vários tipos, incluindo texto imagem som e vídeo</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=58'>C.5.11 - Aplicar os princípios de gerência, organização e recuperação da informação de vários tipos, incluindo texto imagem som e vídeo</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=65'>C.6.5 - Ser capaz de realizar trabalho cooperativo e entender os benefícios que este pode produzir</a><br>
            <hr width = “2” size = “100”>
            
            
            <h1>Vídeo Recomendado</h1>
            <h5><iframe width='750' height='355' src='https://www.youtube.com/embed/T9V_axU6jU8' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe></h5>
            </div>";
            break;
          case 128:
            echo "<div class='hierarquicodqsscemonze-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos -> Competência dos Eixos -></h3>
            <h3>Competência Derivada -> Conteúdos (Você está aqui)</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            <a href='resultSearch.php?threadid=12'>C.2.1 - Resolver problemas usando ambientes de programação</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=65'>C.6.5 - Ser capaz de realizar trabalho cooperativo e entender os benefícios que este pode produzir</a><br>
            <hr width = “2” size = “100”>
            
            </div>";
            break;
          case 129:
            echo "<div class='hierarquicodqsscemdoze-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos -> Competência dos Eixos -></h3>
            <h3>Competência Derivada -> Conteúdos (Você está aqui)</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            <a href='resultSearch.php?threadid=9'>C.1.7 - Aplicar temas e princípios recorrentes, como abstração, complexidade, princípio de localidade de referência (caching), compartilhamento de recursos, segurança, concorrência, evolução de sistemas, entre outros, e reconhecer que esses temas e princípios são fundamentais à área de Ciência da Computação</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=12'>C.2.1 - Resolver problemas usando ambientes de programação</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=56'>C.5.9 - Especificar, projetar, implementar, manter e avaliar sistemas de computação, empregando teorias, práticas e ferramentas adequadas</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=65'>C.6.5 - Ser capaz de realizar trabalho cooperativo e entender os benefícios que este pode produzir</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=76'>C.7.8 - Aplicar temas e princípios recorrentes, como abstração, complexidade, princípio de localidade de referência (caching), compartilhamento de recursos, segurança, concorrência, evolução de sistemas, entre outros, e reconhecer que esses temas e princípios são fundamentais à área de Ciência da Computação</a><br>
            <hr width = “2” size = “100”>
            
            </div>";
            break;
          case 130:
            echo "<div class='hierarquicodqsscemtreze-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos -> Competência dos Eixos -></h3>
            <h3>Competência Derivada -> Conteúdos (Você está aqui)</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            
            <a href='resultSearch.php?threadid=22'>C.2.11 - Aplicar os princípios de interação humano-computador para avaliar e construir uma grande variedade de produtos incluindo interface do usuário, páginas WEB, sistemas multímidia e sistemas móveis</a><br>
            <hr width = “2” size = “100”>
            
            <a href='resultSearch.php?threadid=65'>C.6.5 - Ser capaz de realizar trabalho cooperativo e entender os benefícios que este pode produzir</a><br>
            <hr width = “2” size = “100”>
            
            <h1>Vídeo Recomendado</h1>
            <h5><iframe width='750' height='355' src='https://www.youtube.com/embed/fWscDFHKgw8' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe></h5>
            </div>";
            break;
          case 131:
            echo "<div class='hierarquicodqsscemtrezeweb-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos -> Competência dos Eixos -></h3>
            <h3>Competência Derivada -> Conteúdos (Você está aqui)</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            
            <a href='resultSearch.php?threadid=22'>C.2.11 - Aplicar os princípios de interação humano-computador para avaliar e construir uma grande variedade de produtos incluindo interface do usuário, páginas WEB, sistemas multímidia e sistemas móveis</a><br>
            <hr width = “2” size = “100”>
            
            <a href='resultSearch.php?threadid=65'>C.6.5 - Ser capaz de realizar trabalho cooperativo e entender os benefícios que este pode produzir</a><br>
            <hr width = “2” size = “100”>
            
            <h1>Vídeo Recomendado</h1>
            <h5><iframe width='750' height='355' src='https://www.youtube.com/embed/fBLRkIA7Y9M' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe></h5>
            </div>";
            break;
          case 132:
            echo "<div class='hierarquicodqsscemtrinta-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos -> Competência dos Eixos -></h3>
            <h3>Competência Derivada -> Conteúdos (Você está aqui)</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            
            <a href='resultSearch.php?threadid=48'>C.5.1 - Resolver problemas usando ambientes de programação</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=65'>C.6.5 - Ser capaz de realizar trabalho cooperativo e entender os benefícios que este pode produzir</a><br>
            <hr width = “2” size = “100”>
            
            </div>";
            break;
          case 133:
            echo "<div class='hierarquicodqsscemtrintaum-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos -> Competência dos Eixos -></h3>
            <h3>Competência Derivada -> Conteúdos (Você está aqui)</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            
            <a href='resultSearch.php?threadid=48'>C.5.1 - Resolver problemas usando ambientes de programação</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=65'>C.6.5 - Ser capaz de realizar trabalho cooperativo e entender os benefícios que este pode produzir</a><br>
            <hr width = “2” size = “100”>
            
            </div>";
            break;
          case 134:
            echo "<div class='hierarquicodqsscemtrintadois-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos -> Competência dos Eixos -></h3>
            <h3>Competência Derivada -> Conteúdos (Você está aqui)</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            
            <a href='resultSearch.php?threadid=48'>C.5.1 - Resolver problemas usando ambientes de programação</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=65'>C.6.5 - Ser capaz de realizar trabalho cooperativo e entender os benefícios que este pode produzir</a><br>
            <hr width = “2” size = “100”>
            
            </div>";
            break;
          case 135:
            echo "<div class='hierarquicodqsscemtrintatres-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos -> Competência dos Eixos -></h3>
            <h3>Competência Derivada -> Conteúdos (Você está aqui)</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            <a href='resultSearch.php?threadid=12'>C.2.1 - Resolver problemas usando ambientes de programação</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=48'>C.5.1 - Resolver problemas usando ambientes de programação</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=65'>C.6.5 - Ser capaz de realizar trabalho cooperativo e entender os benefícios que este pode produzir</a><br>
            <hr width = “2” size = “100”>
            
            </div>";
            break;
          case 136:
            echo "<div class='hierarquicodqsscemtrintaquatro-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos -> Competência dos Eixos -></h3>
            <h3>Competência Derivada -> Conteúdos (Você está aqui)</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            <a href='resultSearch.php?threadid=12'>C.2.1 - Resolver problemas usando ambientes de programação</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=48'>C.5.1 - Resolver problemas usando ambientes de programação</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=65'>C.6.5 - Ser capaz de realizar trabalho cooperativo e entender os benefícios que este pode produzir</a><br>
            <hr width = “2” size = “100”>
            
            <h1>Vídeo Recomendado</h1>
            <h5><iframe width='750' height='355' src='https://www.youtube.com/embed/QY0Kdg83orY' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe></h5>

            </div>";
            break;
          case 137:
            echo "<div class='hierarquicodqsscemtrintaseis-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos -> Competência dos Eixos -></h3>
            <h3>Competência Derivada -> Conteúdos (Você está aqui)</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            
            <a href='resultSearch.php?threadid=8'>C.1.6 - Conhecer soluções computacionais a partir de decisões visando o equilíbrio de todos os fatores</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=65'>C.6.5 - Ser capaz de realizar trabalho cooperativo e entender os benefícios que este pode produzir</a><br>
            <hr width = “2” size = “100”>
            
            </div>";
            break;
          case 138:
            echo "<div class='hierarquicodauto-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos -> Competência dos Eixos -></h3>
            <h3>Competência Derivada -> Conteúdos (Você está aqui)</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            
            <a href='resultSearch.php?threadid=55'>C.5.8 - Identificar e analisar requisitos e especificações para problemas específicos e planejar estratégias para suas soluções</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=56'>C.5.9 - Especificar, projetar, implementar, manter e avaliar sistemas de computação, empregando teorias, práticas e ferramentas adequadas</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=65'>C.6.5 - Ser capaz de realizar trabalho cooperativo e entender os benefícios que este pode produzir</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=74'>C.7.6 - Identificar e analisar requisitos e especificações para problemas específicos e planejar estratégias para suas soluções</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=75'>C.7.7 - Conceber soluções computacionais a partir de decisões, visando o equilíbrio de todos os fatores envolvidos</a><br>
            <hr width = “2” size = “100”>
            
            </div>";
            break;
          case 139:
            echo "<div class='hierarquicodqsscemtrintadoisprop-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos -> Competência dos Eixos -></h3>
            <h3>Competência Derivada -> Conteúdos (Você está aqui)</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            <a href='resultSearch.php?threadid=8'>C.1.6 - Conhecer soluções computacionais a partir de decisões visando o equilíbrio de todos os fatores</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=44'>C.4.7 - Conceber soluções computacionais a partir de decisões visando o equilíbrio de todos os fatores</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=57'>C.5.10 - Conceber soluções computacionais a partir de decisões visando o equilíbrio de todos os fatores envolvidos</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=65'>C.6.5 - Ser capaz de realizar trabalho cooperativo e entender os benefícios que este pode produzir</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=75'>C.7.7 - Conceber soluções computacionais a partir de decisões, visando o equilíbrio de todos os fatores envolvidos</a><br>
            <hr width = “2” size = “100”>
            
            </div>";
            break;
          case 140:
            echo "<div class='hierarquicodqsscemtrintasete-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos -> Competência dos Eixos -></h3>
            <h3>Competência Derivada -> Conteúdos (Você está aqui)</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            <a href='resultSearch.php?threadid=22'>C.2.11 - Aplicar os princípios de interação humano-computador para avaliar e construir uma grande variedade de produtos incluindo interface do usuário, páginas WEB, sistemas multímidia e sistemas móveis</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=65'>C.6.5 - Ser capaz de realizar trabalho cooperativo e entender os benefícios que este pode produzir</a><br>
            <hr width = “2” size = “100”>
            
            <h1>Vídeo Recomendado</h1>
            <h5><iframe width='750' height='355' src='https://www.youtube.com/embed/FuuirfHFG2M' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe></h5>
            </div>";
            break;
          case 141:
            echo "<div class='hierarquicodqsscemtrintaoito-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos -> Competência dos Eixos -></h3>
            <h3>Competência Derivada -> Conteúdos (Você está aqui)</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            <a href='resultSearch.php?threadid=21'>C.2.10 - Aplicar os princípios de gerência, organização e recuperação da informação de vários tipos, incluindo texto imagem som e vídeo</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=58'>C.5.11 - Aplicar os princípios de gerência, organização e recuperação da informação de vários tipos, incluindo texto imagem som e vídeo</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=65'>C.6.5 - Ser capaz de realizar trabalho cooperativo e entender os benefícios que este pode produzir</a><br>
            <hr width = “2” size = “100”>
            
            </div>";
            break;
          case 142:
            echo "<div class='hierarquicodqsscemtrintanove-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos -> Competência dos Eixos -></h3>
            <h3>Competência Derivada -> Conteúdos (Você está aqui)</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            <a href='resultSearch.php?threadid=9'>C.1.7 - Aplicar temas e princípios recorrentes, como abstração, complexidade, princípio de localidade de referência (caching), compartilhamento de recursos, segurança, concorrência, evolução de sistemas, entre outros, e reconhecer que esses temas e princípios são fundamentais à área de Ciência da Computação</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=13'>C.2.2 - Tomar decisões e inovar, com base no conhecimento do funcionamento e das características técnicas de hardware e da infraestrutura de software dos sistemas de computação, consciente dos aspectos éticos, legais e dos impactos ambientes decorrentes</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=38'>C.4.1 - Tomar decisões e inovar, com base no conhecimento do funcionamento e das carac</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=49'>C.5.2 - Tomar decisões e inovar, com base no conhecimento do funcionamento e das características técnicas de hardware e da infraestrutura de software dos sistemas de computação, consciente dos aspectos éticos, legais e dos impactos ambientais decorrentes</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=56'>C.5.9 - Especificar, projetar, implementar, manter e avaliar sistemas de computação, empregando teorias, práticas e ferramentas adequadas</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=58'>C.5.11 - Aplicar os princípios de gerência, organização e recuperação da informação de vários tipos, incluindo texto imagem som e vídeo</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=65'>C.6.5 - Ser capaz de realizar trabalho cooperativo e entender os benefícios que este pode produzir</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=158'>C.7.3 - Conhecer os limites da computação</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=76'>C.7.8 - Aplicar temas e princípios recorrentes, como abstração, complexidade, princípio de localidade de referência (caching), compartilhamento de recursos, segurança, concorrência, evolução de sistemas, entre outros, e reconhecer que esses temas e princípios são fundamentais à área de Ciência da Computação</a><br>
            <hr width = “2” size = “100”>
            <h1>Vídeo Recomendado</h1>
            <h5><iframe width='750' height='355' src='https://www.youtube.com/embed/1csTmCZj-io' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe></h5>
            </div>";
            break;
          case 144:
            echo "<div class='hierarquicodqsscemquarenta-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos -> Competência dos Eixos -></h3>
            <h3>Competência Derivada -> Conteúdos (Você está aqui)</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            <a href='resultSearch.php?threadid=9'>C.1.7 - Aplicar temas e princípios recorrentes, como abstração, complexidade, princípio de localidade de referência (caching), compartilhamento de recursos, segurança, concorrência, evolução de sistemas, entre outros, e reconhecer que esses temas e princípios são fundamentais à área de Ciência da Computação</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=13'>C.2.2 - Tomar decisões e inovar, com base no conhecimento do funcionamento e das características técnicas de hardware e da infraestrutura de software dos sistemas de computação, consciente dos aspectos éticos, legais e dos impactos ambientes decorrentes</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=14'>C.2.3 - Avaliar criticamente projetos de sistemas de computação</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=38'>C.4.1 - Tomar decisões e inovar, com base no conhecimento do funcionamento e das carac</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=49'>C.5.2 - Tomar decisões e inovar, com base no conhecimento do funcionamento e das características técnicas de hardware e da infraestrutura de software dos sistemas de computação, consciente dos aspectos éticos, legais e dos impactos ambientais decorrentes</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=54'>C.5.7 - Identificar e gerenciar os riscos que podem estar envolvidos na opração de equipamentos de computação (incluindo os aspectos de dependabilidade e segurança)</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=56'>C.5.9 - Especificar, projetar, implementar, manter e avaliar sistemas de computação, empregando teorias, práticas e ferramentas adequadas</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=65'>C.6.5 - Ser capaz de realizar trabalho cooperativo e entender os benefícios que este pode produzir</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=158'>C.7.3 - Conhecer os limites da computação</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=76'>C.7.8 - Aplicar temas e princípios recorrentes, como abstração, complexidade, princípio de localidade de referência (caching), compartilhamento de recursos, segurança, concorrência, evolução de sistemas, entre outros, e reconhecer que esses temas e princípios são fundamentais à área de Ciência da Computação</a><br>
            <hr width = “2” size = “100”>
            <h1>Vídeo Recomendado</h1>
            <h5><iframe width='750' height='355' src='https://www.youtube.com/embed/JrVS7YsGw8w' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe></h5>
            </div>";
            break;
          case 145:
            echo "<div class='hierarquicodqsscemquarentatres-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos -> Competência dos Eixos -></h3>
            <h3>Competência Derivada -> Conteúdos (Você está aqui)</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            <a href='resultSearch.php?threadid=9'>C.1.7 - Aplicar temas e princípios recorrentes, como abstração, complexidade, princípio de localidade de referência (caching), compartilhamento de recursos, segurança, concorrência, evolução de sistemas, entre outros, e reconhecer que esses temas e princípios são fundamentais à área de Ciência da Computação</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=13'>C.2.2 - Tomar decisões e inovar, com base no conhecimento do funcionamento e das características técnicas de hardware e da infraestrutura de software dos sistemas de computação, consciente dos aspectos éticos, legais e dos impactos ambientes decorrentes</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=14'>C.2.3 - Avaliar criticamente projetos de sistemas de computação</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=38'>C.4.1 - Tomar decisões e inovar, com base no conhecimento do funcionamento e das carac</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=49'>C.5.2 - Tomar decisões e inovar, com base no conhecimento do funcionamento e das características técnicas de hardware e da infraestrutura de software dos sistemas de computação, consciente dos aspectos éticos, legais e dos impactos ambientais decorrentes</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=54'>C.5.7 - Identificar e gerenciar os riscos que podem estar envolvidos na opração de equipamentos de computação (incluindo os aspectos de dependabilidade e segurança)</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=56'>C.5.9 - Especificar, projetar, implementar, manter e avaliar sistemas de computação, empregando teorias, práticas e ferramentas adequadas</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=65'>C.6.5 - Ser capaz de realizar trabalho cooperativo e entender os benefícios que este pode produzir</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=158'>C.7.3 - Conhecer os limites da computação</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=76'>C.7.8 - Aplicar temas e princípios recorrentes, como abstração, complexidade, princípio de localidade de referência (caching), compartilhamento de recursos, segurança, concorrência, evolução de sistemas, entre outros, e reconhecer que esses temas e princípios são fundamentais à área de Ciência da Computação</a><br>
            <hr width = “2” size = “100”>
            <h1>Vídeo Recomendado</h1>
            <h5><iframe width='750' height='355' src='https://www.youtube.com/embed/1csTmCZj-io' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe></h5>
            </div>";
            break;
          case 146:
            echo "<div class='hierarquicodqsscemquarentaquinto-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos -> Competência dos Eixos -></h3>
            <h3>Competência Derivada -> Conteúdos (Você está aqui)</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            <a href='resultSearch.php?threadid=9'>C.1.7 - Aplicar temas e princípios recorrentes, como abstração, complexidade, princípio de localidade de referência (caching), compartilhamento de recursos, segurança, concorrência, evolução de sistemas, entre outros, e reconhecer que esses temas e princípios são fundamentais à área de Ciência da Computação</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=12'>C.2.1 - Resolver problemas usando ambientes de programação</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=65'>C.6.5 - Ser capaz de realizar trabalho cooperativo e entender os benefícios que este pode produzir</a><br>
            <hr width = “2” size = “100”>
            
            <a href='resultSearch.php?threadid=76'>C.7.8 - Aplicar temas e princípios recorrentes, como abstração, complexidade, princípio de localidade de referência (caching), compartilhamento de recursos, segurança, concorrência, evolução de sistemas, entre outros, e reconhecer que esses temas e princípios são fundamentais à área de Ciência da Computação</a><br>
            <hr width = “2” size = “100”>
            
            </div>";
            break;
          case 147:
            echo "<div class='hierarquicodqsscemquarentaseis-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos -> Competência dos Eixos -></h3>
            <h3>Competência Derivada -> Conteúdos (Você está aqui)</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            
            <a href='resultSearch.php?threadid=12'>C.2.1 - Resolver problemas usando ambientes de programação</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=56'>C.5.9 - Especificar, projetar, implementar, manter e avaliar sistemas de computação, empregando teorias, práticas e ferramentas adequadas</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=65'>C.6.5 - Ser capaz de realizar trabalho cooperativo e entender os benefícios que este pode produzir</a><br>
            <hr width = “2” size = “100”>
            
            </div>";
            break;
          case 148:
            echo "<div class='hierarquicodqsscemquarentasete-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos -> Competência dos Eixos -></h3>
            <h3>Competência Derivada -> Conteúdos (Você está aqui)</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            <a href='resultSearch.php?threadid=9'>C.1.7 - Aplicar temas e princípios recorrentes, como abstração, complexidade, princípio de localidade de referência (caching), compartilhamento de recursos, segurança, concorrência, evolução de sistemas, entre outros, e reconhecer que esses temas e princípios são fundamentais à área de Ciência da Computação</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=14'>C.2.3 - Avaliar criticamente projetos de sistemas de computação</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=38'>C.4.1 - Tomar decisões e inovar, com base no conhecimento do funcionamento e das carac</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=49'>C.5.2 - Tomar decisões e inovar, com base no conhecimento do funcionamento e das características técnicas de hardware e da infraestrutura de software dos sistemas de computação, consciente dos aspectos éticos, legais e dos impactos ambientais decorrentes</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=56'>C.5.9 - Especificar, projetar, implementar, manter e avaliar sistemas de computação, empregando teorias, práticas e ferramentas adequadas</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=58'>C.5.11 - Aplicar os princípios de gerência, organização e recuperação da informação de vários tipos, incluindo texto imagem som e vídeo</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=65'>C.6.5 - Ser capaz de realizar trabalho cooperativo e entender os benefícios que este pode produzir</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=158'>C.7.3 - Conhecer os limites da computação</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=76'>C.7.8 - Aplicar temas e princípios recorrentes, como abstração, complexidade, princípio de localidade de referência (caching), compartilhamento de recursos, segurança, concorrência, evolução de sistemas, entre outros, e reconhecer que esses temas e princípios são fundamentais à área de Ciência da Computação</a><br>
            <hr width = “2” size = “100”>
            <h1>Vídeo Recomendado</h1>
            <h5><iframe width='750' height='355' src='https://www.youtube.com/embed/34RvRBXzvMo' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe></h5>
            
            </div>";
            break;
          case 149:
            echo "<div class='hierarquicodqsscemquarentaoito-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos -> Competência dos Eixos -></h3>
            <h3>Competência Derivada -> Conteúdos (Você está aqui)</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            <a href='resultSearch.php?threadid=12'>C.2.1 - Resolver problemas usando ambientes de programação</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=56'>C.5.9 - Especificar, projetar, implementar, manter e avaliar sistemas de computação, empregando teorias, práticas e ferramentas adequadas</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=65'>C.6.5 - Ser capaz de realizar trabalho cooperativo e entender os benefícios que este pode produzir</a><br>
            <hr width = “2” size = “100”>
            <h1>Vídeo Recomendado</h1>
            <h5><iframe width='750' height='355' src='https://www.youtube.com/embed/34RvRBXzvMo' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe></h5>
            
            </div>";
            break;
          case 150:
            echo "<div class='hierarquicodqsscemquarentanove-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos -> Competência dos Eixos -></h3>
            <h3>Competência Derivada -> Conteúdos (Você está aqui)</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            <a href='resultSearch.php?threadid=21'>C.2.10 - Aplicar os princípios de gerência, organização e recuperação da informação de vários tipos, incluindo texto imagem som e vídeo</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=22'>C.2.11 - Aplicar os princípios de interação humano-computador para avaliar e construir uma grande variedade de produtos incluindo interface do usuário, páginas WEB, sistemas multímidia e sistemas móveis</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=58'>C.5.11 - Aplicar os princípios de gerência, organização e recuperação da informação de vários tipos, incluindo texto imagem som e vídeo</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=65'>C.6.5 - Ser capaz de realizar trabalho cooperativo e entender os benefícios que este pode produzir</a><br>
            <hr width = “2” size = “100”>
            
            </div>";
            break;
          case 151:
            echo "<div class='hierarquicodqsscemcinquenta-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos -> Competência dos Eixos -></h3>
            <h3>Competência Derivada -> Conteúdos (Você está aqui)</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            <a href='resultSearch.php?threadid=9'>C.1.7 - Aplicar temas e princípios recorrentes, como abstração, complexidade, princípio de localidade de referência (caching), compartilhamento de recursos, segurança, concorrência, evolução de sistemas, entre outros, e reconhecer que esses temas e princípios são fundamentais à área de Ciência da Computação</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=13'>C.2.2 - Tomar decisões e inovar, com base no conhecimento do funcionamento e das características técnicas de hardware e da infraestrutura de software dos sistemas de computação, consciente dos aspectos éticos, legais e dos impactos ambientes decorrentes</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=38'>C.4.1 - Tomar decisões e inovar, com base no conhecimento do funcionamento e das carac</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=49'>C.5.2 - Tomar decisões e inovar, com base no conhecimento do funcionamento e das características técnicas de hardware e da infraestrutura de software dos sistemas de computação, consciente dos aspectos éticos, legais e dos impactos ambientais decorrentes</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=56'>C.5.9 - Especificar, projetar, implementar, manter e avaliar sistemas de computação, empregando teorias, práticas e ferramentas adequadas</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=65'>C.6.5 - Ser capaz de realizar trabalho cooperativo e entender os benefícios que este pode produzir</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=158'>C.7.3 - Conhecer os limites da computação</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=76'>C.7.8 - Aplicar temas e princípios recorrentes, como abstração, complexidade, princípio de localidade de referência (caching), compartilhamento de recursos, segurança, concorrência, evolução de sistemas, entre outros, e reconhecer que esses temas e princípios são fundamentais à área de Ciência da Computação</a><br>
            <hr width = “2” size = “100”>
            <h1>Vídeo Recomendado</h1>
            <h5><iframe width='750' height='355' src='https://www.youtube.com/embed/CCHZ_06DoEA' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe></h5>
            </div>";
            break;
          case 152:
            echo "<div class='hierarquicodqsscemcinquentaum-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos -> Competência dos Eixos -></h3>
            <h3>Competência Derivada -> Conteúdos (Você está aqui)</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            <a href='resultSearch.php?threadid=8'>C.1.6 - Conhecer soluções computacionais a partir de decisões visando o equilíbrio de todos os fatores</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=13'>C.2.2 - Tomar decisões e inovar, com base no conhecimento do funcionamento e das características técnicas de hardware e da infraestrutura de software dos sistemas de computação, consciente dos aspectos éticos, legais e dos impactos ambientes decorrentes</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=44'>C.4.7 - Conceber soluções computacionais a partir de decisões visando o equilíbrio de todos os fatores</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=57'>C.5.10 - Conceber soluções computacionais a partir de decisões visando o equilíbrio de todos os fatores envolvidos</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=65'>C.6.5 - Ser capaz de realizar trabalho cooperativo e entender os benefícios que este pode produzir</a><br>
            <hr width = “2” size = “100”>
            
            </div>";
            break;
          case 153:
            echo "<div class='hierarquicodqsscemcinquentadois-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos -> Competência dos Eixos -></h3>
            <h3>Competência Derivada -> Conteúdos (Você está aqui)</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            <a href='resultSearch.php?threadid=4'>C.1.2 - Conhecer os limites da computação</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=8'>C.1.6 - Conhecer soluções computacionais a partir de decisões visando o equilíbrio de todos os fatores</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=31'>C.3.7 - Reconhecer a importância do pensamento computacional no cotidiano e sua aplicação em circunstâncias apropriadas e em domínios diversos</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=65'>C.6.5 - Ser capaz de realizar trabalho cooperativo e entender os benefícios que este pode produzir</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=66'>C.6.6 - Compreender os fatos essenciais, os conceitos, os princípios e as teorias relacionadas à Ciência da Computação para o desenvolvimento de software e hardware e suas aplicações</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=71'>C.7.2 - Conhecer os limites da computação</a><br>
            <hr width = “2” size = “100”>
            
            </div>";
            break;
          case 154:
            echo "<div class='hierarquicodqsscemcinquentadois-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos -> Competência dos Eixos -></h3>
            <h3>Competência Derivada -> Conteúdos (Você está aqui)</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            <a href='resultSearch.php?threadid=5'>C.1.3 - Resolver problemas usando ambientes de programação</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=17'>C.2.6 - Compreender os fatos essenciais, os conceitos, os princípios e as teorias relacionadas à Ciência da Computação para o desenvolvimento de software e hardware e suas aplicações</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=31'>C.3.7 - Reconhecer a importância do pensamento computacional no cotidiano e sua aplicação em circunstâncias apropriadas e em domínios diversos</a><br>
            <hr width = “2” size = “100”>
            <h1>Vídeo Recomendado</h1>
            <h5><iframe width='750' height='355' src='https://www.youtube.com/embed/Frmwdter-vQ' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe></h5>
            </div>";
            break;
          case 155:
            echo "<div class='hierarquicodauto-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos -> Competência dos Eixos -></h3>
            <h3>Competência Derivada -> Conteúdos (Você está aqui)</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            
            <a href='resultSearch.php?threadid=8'>C.1.6 - Conhecer soluções computacionais a partir de decisões visando o equilíbrio de todos os fatores</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=65'>C.6.5 - Ser capaz de realizar trabalho cooperativo e entender os benefícios que este pode produzir</a><br>
            <hr width = “2” size = “100”>
           
            
            </div>";
            break;
          case 156:
            echo "<div class='hierarquicodqsscemcinquentatres-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos -> Competência dos Eixos -></h3>
            <h3>Competência Derivada -> Conteúdos (Você está aqui)</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            
            <a href='resultSearch.php?threadid=6'>C.1.4 - Compreender e explicar as dimensões quantitativas de um problema</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=65'>C.6.5 - Ser capaz de realizar trabalho cooperativo e entender os benefícios que este pode produzir</a><br>
            <hr width = “2” size = “100”>
           
            
            </div>";
            break;
          case 157:
            echo "<div class='hierarquicodqsscemcinquentaquatro-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos -> Competência dos Eixos -></h3>
            <h3>Competência Derivada -> Conteúdos (Você está aqui)</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            <a href='resultSearch.php?threadid=8'>C.1.6 - Conhecer soluções computacionais a partir de decisões visando o equilíbrio de todos os fatores</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=13'>C.2.2 - Tomar decisões e inovar, com base no conhecimento do funcionamento e das características técnicas de hardware e da infraestrutura de software dos sistemas de computação, consciente dos aspectos éticos, legais e dos impactos ambientes decorrentes</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=16'>C.2.5 - Ser capaz de realizar trabalho cooperativo e entender os benefícios que este pode produzir</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=27'>C.3.3 - Avaliar criticamente projetos de sistemas de computação</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=31'>C.3.7 - Reconhecer a importância do pensamento computacional no cotidiano e sua aplicação em circunstâncias apropriadas e em domínios diversos</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=38'>C.4.1 - Tomar decisões e inovar, com base no conhecimento do funcionamento e das carac</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=43'>C.4.6 - Ser capaz de realizar trabalho cooperativo e entender os benefícios que este pode produzir</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=49'>C.5.2 - Tomar decisões e inovar, com base no conhecimento do funcionamento e das características técnicas de hardware e da infraestrutura de software dos sistemas de computação, consciente dos aspectos éticos, legais e dos impactos ambientais decorrentes</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=53'>C.5.6 - Ser capaz de realizar trabalho cooperativo e entender os benefícios que este pode produzir</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=57'>C.5.10 - Conceber soluções computacionais a partir de decisões visando o equilíbrio de todos os fatores envolvidos</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=65'>C.6.5 - Ser capaz de realizar trabalho cooperativo e entender os benefícios que este pode produzir</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=158'>C.7.3 - Conhecer os limites da computação</a><br>
            <hr width = “2” size = “100”>
            
           
            
            </div>";
            break;
          case 158:
            echo "<div class='hierarquiumcincooito-container'>
            <h1>Atual Nível Hierárquico:</h1> 
            <div class='niveld-container'>
            <h3>Concept Scheme -> Eixos   -> Competência dos Eixos -></h3>
            <h3>Competência Derivada (Você está aqui) -> Conteúdos</h3>
            
            <hr width = “2” size = “100”>
            <h1>Sinônimos/Conceitos Relacionados:</h1>
            <a href='resultSearch.php?threadid=77'>Competências do Eixo VII</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=87'>Sistemas Operacionais</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=148'>Sistemas Distribuídos</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=157'>Ética em Computação</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=144'>Segurança de Sistemas Computacionais</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=89'>Computação e Sociedade</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=80'>Arquitetura e Organização de Computadores</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=85'>Banco de Dados</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=113'>Legislação de Informática</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=118'>Meio Ambiente e Computação</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=142'>Redes de Computadores</a><br>
            <hr width = “2” size = “100”>
            <a href='resultSearch.php?threadid=86'>Compiladores</a><br>
            <hr width = “2” size = “100”>
            </div>";

        }
      }





      ?>
    </div>
  </div>

  <footer class="footer-final">
    Sistema web desenvolvido como objetivo de obtenção de nota na disciplina de Trabalho de Conclusão de Curso 2021 no curso de Ciência da Computação - Universidade Estadual do Centro-Oeste.
  </footer>
</body>