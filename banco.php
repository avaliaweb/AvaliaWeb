<?php

    if($_POST['senha'] == $_POST['confirmsenha'])
    {
        if(isset($_POST['submit']))
        {
            //print_r('Nome>: '.$_POST['nome']);
            //print_r('<br>');
            //print_r('Email: '.$_POST['email']);
            //print_r('<br>');
            //print_r('Telefone: '.$_POST['telefone']);
            //print_r('<br>');
            //print_r('Sexo: '.$_POST['sexo']);
            //print_r('<br>');
            //print_r('Data de Nascimento: '.$_POST['data_nasc']);
            //print_r('<br>');
            //print_r('Estado: '.$_POST['estado']);
            //print_r('<br>');
            //print_r('Cidade: '.$_POST['cidade']);

            include_once('config.php');

            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $senha = $_POST['senha'];    
            $telefone = $_POST['telefone'];
            $sexo = $_POST['sexo'];
            $data_nasc = $_POST['data_nasc'];
            $estado = $_POST['estado'];
            $cidade = $_POST['cidade'];
            $confirmsenha = $_POST['confirmsenha'];

            $result = mysqli_query($conexao, "INSERT INTO usuario(nome,email,senha,telefone,sexo,data_nasc,cidade,estado)
            VALUES ('$nome','$email',$senha,'$telefone','$sexo', '$data_nasc','$estado','$cidade')");
        }
    }
    else
    {
        header('Location: TelaCadastro.php');
    }

    
    // if($senha !== $confirmsenha)
    // {
    //    header('location:TelaCadastro.php');
    // }
    // else{
    //     header('Location:TelaCadastro.php ');
    // }
?>
