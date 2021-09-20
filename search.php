<?php
    include 'header.php';
?>

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



<div class ="resultado-container">
    <div class="resultadores-container">
    <a id="top"></a>
    <?php
        if (isset($_POST['submit-search'])){
            $search = mysqli_real_escape_string($conn, $_POST['search']);
            $sql = "SELECT * FROM conceito WHERE prefLabel LIKE '%$search%'
            OR altLabelA LIKE '%$search%' OR definitionA LIKE '%$search%' OR tipoConceito LIKE '%$search%' OR definitionComun like '%$search$'";

            $result = mysqli_query($conn, $sql);
            $queryResult = mysqli_num_rows($result);

            echo "<h3>Foram encontrados " .$queryResult. " resultados da pesquisa: " .$search.".</h3> ";
            echo "<h3>Para aprender melhor sobre algum conceito de sua pesquisa, clique em seu nome.</h3>";

            if ($queryResult > 0){
                while($row = mysqli_fetch_assoc($result) ) {
                    $title = $row['prefLabel'];
                    $desc = $row['definitionA'];
                    $threadId = $row['idConceito'];
                    $url = "resultSearch.php?threadid=" . $threadId;
                    echo "
                    <div class='conceito-box'>
                        <hr width = “2” size = “100”>
                        <h3>Nome do Conceito: </h3><a href=". $url. ">". $title."</a> 
                        <br>
                    </div>";
                }
            } else {
                echo "<h3>Não há resultados para a pesquisa com base na sua pesquisa.</h3>";
            }
        }
    ?>
    
    </div>
</div>

<footer>
  Sistema web desenvolvido como objetivo de obtenção de nota na disciplina de Trabalho de Conclusão de Curso no curso de Ciência da Computação - Universidade Estadual do Centro-Oeste.
</footer>
