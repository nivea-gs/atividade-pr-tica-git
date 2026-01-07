<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício GitHub Nívea</title>
</head>
<body>
     <div class="container">
        <h2>Formulário de Contato</h2>
        <form action="#" method="post">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" placeholder="Digite seu nome">
            </div>
          
            <div class="form-group">
                <button type="submit">Enviar</button>
            </div>
        </form>
</body>
</html>

<?php

if(isset($_POST['nome'])){
    if($_POST['nome'] != ""){
        echo "Bem-vindo(a), " . $_POST['nome'] . "!";
    }
    else{
        echo "Por favor, informe seu nome!";
    }
}
?>