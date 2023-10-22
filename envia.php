<?php

$nome = addslashes($_POST['nome']);
$email = addslashes($_POST['email']);
$celular = addslashes($_POST['celular']);

$para = "contato@ivanizidoro.com.br";
$assunto = "Contato - Ivan Izidoro";

$corpo = "Nome: ".$nome."\n"."E-mail: ".$email."\n"."Celular: ".$celular;

$cabeca = "From ivanizidoro@hotmail.com"."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion();

if(mail($para,$assunto,$corpo,$cabeca)){
    echo("E-mail enviado com socesso");
} else{
    echo("Houve um erro ao enviar o e-mail");
}

?>