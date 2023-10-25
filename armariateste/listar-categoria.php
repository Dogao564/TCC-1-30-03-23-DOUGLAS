<h1>Listar Categorias</h1>

<?php
//Número da Página
$pagina_atual = filter_input(INPUT_GET, 'pagina', FILTER_SANITIZE_NUMBER_INT);

$pagina = (!empty ($pagina_atual)) ? $pagina_atual : 1;

//Quantidade de inttetns por pagina
$qnt_result_pag = 5;

//Calcular o inicio da visualizaçao
$inicio = ($pagina - 1) * $qnt_result_pag;

//($qnt_result_pag * $pagina) - $qnt_result_pag;
?>


    <div class="container2"></div>
    
    <?php
    $res_efetivo = "SELECT nome, cpf, RG, MF, Mem, PAE, equipe, PostoGRAD FROM efetivo LIMIT $inicio, $qnt_result_pag";
    $result_efetivo = mysqli_query ($conn, $res_efetivo);
    echo "<div class='table'>";
      echo "<table>";
      echo "<tr class=''>";
      echo "<th>Posto/Grad</th>";
      echo  " <th>Pessoa</th>";
      echo "<th>CPF</th>";
      echo  "<th>MF</th>";
      echo  "<th>RG</th>";
      echo  "<th>Mem</th>";
      echo  "<th>PAE</th>";
      echo "<th>EQUIPE</th>";
      echo " </tr>";
    while($row_usuario = mysqli_fetch_assoc($result_efetivo)){
      
        
      echo "<tr class=''>";
      echo "<th>". $row_usuario ['PostoGRAD']."</th>";
      echo  "<th>".$row_usuario ['nome']."</th>";
      echo "<th>".$row_usuario ['cpf']."</th>";
      echo  "<th>".$row_usuario ['MF']."</th>";
      echo  "<th>".$row_usuario ['RG']."</th>";
      echo  "<th>".$row_usuario ['Mem']."</th>";
      echo  "<th>".$row_usuario ['PAE']."</th>";
      echo "<th>".$row_usuario ['equipe']."</th>";
      echo " </tr>" ;

      
  echo "</div>";

    }

    ?>
<?php
//somar a quanbtitade
$result_pag = "SELECT COUNT(id) AS num_result FROM efetivo";
$result_pag = mysqli_query($conn, $result_pag);
$row_pg = mysqli_fetch_assoc($result_pag);

//quantidade de paginas
$quantidade_pg = ceil ($row_pg['num_result'] / $qnt_result_pag);
$max_links = 2;



echo " <table class='table2'>";
echo        "<tr class=></tr>";
echo    "<td id='l1'><a href='inicial.php?pagina=1' id='prev-page'>Primeira</a></td>";


for ($pag_ant = $pagina - $max_links; $pag_ant <= $pagina - 1; $pag_ant++){

  if($pag_ant >= 1){
  echo    "<td id='l1'><a href='inicial.php?pagina=$pag_ant'>$pag_ant</a></td>";
  
  }

}
echo      "<td class='linha2'><id='1'>$pagina</a></td>";
for ($pag_depois = $pagina + 1; $pag_depois <= $pagina + $max_links; $pag_depois++){
  
  if ($pag_depois <= $quantidade_pg){
  echo    "<td id='l1'><a href='inicial.php?pagina=$pag_depois'>$pag_depois</a></td>";
}
}




echo      "<td><a href='inicial.php?pagina=$quantidade_pg' id='next-page'>Ultima</a></td>";
echo  "</table>";
      ?>


/*   $sql= "SELECT * FROM categoria";
    $res = $conn->query($sql);
    $qtd = $res->num_rows;

    print"<p>Encontrou <b>$qtd</b> resultado(s)";

    if($qtd> 0){
        print "<table class = 'table table-bordered table-striped table-hover'>";
            print "<tr>";
            print "<td>#</td>";
            print "<td>Nome da Categoria</td>";
            print "</tr>";
        while($row = $res->fetch_object()){
            print "<tr>";
            print "<td>".$row->cod_categoria."</td>";
            print "<td>".$row->nome_categoria."</td>";
            print "</tr>";
        }
    }else{
        print "<p>Não encontrou resultados</p>";
    }
*/