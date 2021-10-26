<?php

 

$nome = $_POST['nome'];

$email = $_POST['email'];

$tel = $_POST['tel'];

$opcoes = $_POST['opcoes'];

$mensagem = "Dados do Formulario: \n Nome: ".$nome." \n E-mail: ".$email." \n Telefone: ".$tel." \n Área de atuação: ".$opcoes." .";


$headers = "MIME-Version: 1.1\r\n";

$headers .= "Content-type: text/plain; charset=UTF-8\r\n";

$headers .= "From: rodrigo@inpyx.com\r\n"; // remetente

$headers .= "Return-Path: rodrigo@inpyx.com\r\n"; // return-path

$envio = mail("silvia@inpyx.com", "Formulario do Site clickasa-sp.com.br", $mensagem, $headers);

 

?>