<?php

$nome = addslashes($_post['nome']); 
$email = addslashes($_post['email']); 
$celular = addslashes($_post['celular']); 

$para = "jlucas_c.m@hotmail.com";
$assunto = "coleta de dados"; 

$corpo = "nome: ".$nome."\n"."email: ".$email."\n"."telefone: ".$telefone;

$cabeca = "from: jlucas_c.mr@hotmail.com"."\n"."reply-to: ".$email."\n"."X-Mailer:PHP/". phpversion();

if(mail($para,$assunto,$corpo,$cabeca)){
    echo("E-mail enviado com sucesso!");
}else{
    echo("Houve um erro ao enviar o email!");
}

?>