<?php
    switch($_REQUEST["acao"]){
        case 'cadastar':
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = md5($_POST["senha"]);
            $data_nascimento = $_POST["data_nascimento"];

            $sql = "INSERT INTO usuarios (nome,email,senha,data_nascimento) VALUES ('{$nome}', '{$email}', '{$senha}', '{$data_nascimento}')";

            $res = $conn -> Query($sql);

            if ($res==true) {
                print"<script>alert('Cadastrado com sucesso');</script>";
                print"<script>location.href='?page=listar';</script>";
            }else{
                print"<script>alert('Não foi possivel Cadastrar');</script>";
                print"<script>location.href='?page=listar';</script>";
            }
        break;    
        case 'editar':
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = md5($_POST["senha"]);
            $data_nascimento = $_POST["data_nascimento"];

            $sql ="UPDATE `usuarios` SET 
                        `nome` = '{$nome}',
                        email='{$email}', 
                        senha='{$senha}', 
                        data_nascimento='{$data_nascimento}'
                    WHERE
                        id=".$_REQUEST["id"];
            
            $res = $conn -> Query($sql);

            if ($res==true) {
                print"<script>alert('Editado com sucesso');</script>";
                print"<script>location.href='?page=listar';</script>";
            }else{
                print"<script>alert('Não foi possivel Editar');</script>";
                print"<script>location.href='?page=listar';</script>";
            }
        break;    
        case 'excluir':
            $sql ="DELETE FROM usuarios WHERE id=".$_REQUEST["id"];

            $res = $conn -> Query($sql);

            if ($res==true) {
                print"<script>alert('Excluido com sucesso');</script>";
                print"<script>location.href='?page=listar';</script>";
            }else{
                print"<script>alert('Não foi possivel Excluir');</script>";
                print"<script>location.href='?page=listar';</script>";
            }
        break;    
    }