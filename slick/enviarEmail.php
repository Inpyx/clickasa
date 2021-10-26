<?php

 

$nome = $_POST['nome'];

$sobrenome = $_POST['sobrenome'];

$tel = $_POST['tel'];

$email = $_POST['email'];

$opcoes = $_POST['opcoes'];

$mensagem = "Dados do Formulario: \n Nome: ".$nome." \n Sobrenome: ".$sobrenome." \n Celular: ".$tel." \n E-mail: ".$email." \n Área de atuação: ".$opcoes." .";


$headers = "MIME-Version: 1.1\r\n";

$headers .= "Content-type: text/plain; charset=UTF-8\r\n";

$headers .= "From: pedro@inpyx.com\r\n"; // remetente

$headers .= "Return-Path: pedro@inpyx.com\r\n"; // return-path

$envio = mail("pedro@inpyx.com", "Formulario do Site clickasa-sp.com.br", $mensagem, $headers);

 

?>