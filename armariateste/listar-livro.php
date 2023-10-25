<h1>Listar Categorias</h1>
<?php
    $sql= "SELECT * FROM livro as l INNER JOIN categoria AS c ON l.categoria_cod_categoria = c.cod_categoria";
    $res = $conn->query($sql);
    $qtd = $res->num_rows;

    print"<p>Encontrou <b>$qtd</b> resultado(s)";

    if($qtd> 0){
        print "<table class = 'table table-bordered table-striped table-hover'>";
            print "<tr>";
            print "<td>#</td>";
            print "<td>Nome da Categoria</td>";
            print "<td>Titulo</td>";
            print "<td>Autor do Livro</td>";
            print "</tr>";
        while($row = $res->fetch_object()){
            print "<tr>";
            print "<td>".$row->cod_livro."</td>";
            print "<td>".$row->nome_categoria."</td>";
            print "<td>".$row->titulo_livro."</td>";
            print "<td>".$row->autor_livro."</td>";
            print "</tr>";
        }
    }else{
        print "<p>Não encontrou resultados</p>";
    }
?>