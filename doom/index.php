<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=], initial-scale=1.0">
    <title>Empresinha erriessi</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Lexend&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>

<?php

//criptografia de senha
echo password_hash(123456, PASSWORD_DEFAULT);


  //receber dados do formulário
 $dados= filter_input_array(INPUT_POST, FILTER_DEFAULT);
  //Acessar o IF quando o user clicar no botão de acessar o formulário
if(!empty($dados['SendLogin'])){
   var_dump($dados);
}
?>

<!---Navegação--->
<div class="content">
    <nav class="navbar">
             <A href="#Início" class="logo">DesignSwap ★</A>
        <ul class="navlinks">
             <li><A href="#Sobre">Sobre</A></li>
             <li><A href="#Designs"> Designs </A></li>
             <li><A href="#Contato"> Contato</A></li>
        </ul>
    </nav>
</div>

<!---Início do Forms--->
<form method="POST" action="">

<label>Usuário</label>
<input type="text" name="usuario" placeholder="Digite o usuário">
<br><br>
<label>Senha</label>
<input type="password" name="senha" placeholder="Digite a senha">
<br><br>
<input type="submit" name="Sendlogin" value="acessar">
<br><br>

</form>
<!---fim do formulário--->

<?
//Configuração do banco
$host = 'localhost';
$user ='root'; // user padrão
$password = ''; //senha padrão (vazio)
$database = 'nome_do_banco'; // substituir pelo seu banco

//Conectar ao banco
$conn = new mysqli ($host, $user, $password);
$database;

//Verificar conexão
if ($conn -> connect_error){
    die("falha na conexão". $conn -> connect_error);
}


</body>
</html>
