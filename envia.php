<?php

$nome = addslashes($_POST['nome']); 
$email = addslashes($_POST['email']); 
$celular = addslashes($_POST['celular']); 

$para = "jlucas_c.m@hotmail.com";
$assunto = "coleta de dados"; 

$corpo = "nome: ".$nome."\n"."email: ".$email."\n"."celular: ".$celular;

$cabeca = "from: jlucas_c.mr@hotmail.com"."\n"."Reply-to: ".$email."\n"."X-Mailer:PHP/". phpversion();

if(mail($para,$assunto,$corpo,$cabeca)){
    echo("E-mail enviado com sucesso!");
}else{
    echo("Houve um erro ao enviar o email!");
}

?>