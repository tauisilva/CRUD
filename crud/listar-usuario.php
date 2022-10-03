<?php

    $sql = "SELECT * from usuarios";
    
    $res = $conn -> Query($sql);
    
    $qtd = $res -> num_rows;

    if ($qtd > 0) {

        print "<table class='table table-hover table-striped table-bordered table-dark'>";
            print"<tr>";
            print"<th>#</th>";
            print"<th>Nome</th>";
            print"<th>E-mail</th>";
            print"<th>Data de Nascomento</th>";
            print"<th>Ações</th>";
            print"</tr>";
        while($row = $res -> fetch_object()) {
            print "<tr class='table-dark'>";
            print "<td class='table-dark'>".$row->id."</td>";
            print "<td class='table-dark'>".$row->nome."</td>";
            print "<td class='table-dark'>".$row->email."</td>";
            print "<td class='table-dark'>".$row->data_nascimento."</td>";
            print "<td class='d-grip gap-2'>
                        <button onclick=\"location.href='?page=editar&id=".$row->id."'\"  class='btn btn-success btn-sm'>Editar</button>
                        <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){
                                                location.href='?page=salvar&acao=excluir&id=".$row->id."';
                                            }else{
                                                false;
                                            }\"
                            class='btn btn-danger btn-sm'>Excluir
                        </button>
                        
                    </td>";
            print "</tr>";
        }
        print "</table>";

    }else{
        print"<p class='alert alert-danger'>Não encontrou resultados</p> ";
    }