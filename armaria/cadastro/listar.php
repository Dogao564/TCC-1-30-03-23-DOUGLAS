<?php
 include ("config.php");

    $sql = "SELECT * FROM usuarios";

   
    $res = $conn->query($sql);

    $qtd = $res->num_rows;

    if ($qtd > 0){
        while($row = $res->fetch_object()){
            print $row->id;
            print $row->nome;
            print $row->email;
        }
    }else{
        print "<p>não tem nada ai doidao </p>";

    }

?>