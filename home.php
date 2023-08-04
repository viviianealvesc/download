<?php
   session_start();
   include_once('config.php');//chamamos o código que fizemos para conectar com o banco de dados para cá. 

   // print_r($_SESSION);
   if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
   {
       unset($_SESSION['email']);//atraves do unset eu consigo destruir todos esses dados.
       unset($_SESSION['senha']);
       header('Location: login.php');
   }
   $logado = $_SESSION['email'];


   
   
   if(isset($_POST['submit'])){
      include_once('config.php');
      
      $arquivo = $_POST['arquivo'];
    

      $result = mysqli_query($conexao, "INSERT INTO tabela_arquivo(arquivo) VALUES ('$arquivo')");
   }
?>
   

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Downloads | VC</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <!--LINK BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap');

body {
    font-family: 'Roboto', sans-serif;
    font-size: 0.8rem;
    margin: 0;
}

.container-fluid {
    text-align: center;
}

.box {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: row;
    flex-wrap: wrap;
    padding: 2rem;
}



.card {
    display: flex;
    justify-content: center;
    align-items: center;
    border: none;
    padding: 2rem;
}

h6 {
    width: 100%;
    text-align: center;
    padding: 1rem;
    color: white;
    background-color: rgba(7, 189, 7, 0.923);
    box-shadow: 2px 2px 2px 1px rgba(0, 0, 0, 0.4);
}

a {
    display: flex;
    color: black;
    text-decoration: none;
    max-width: 30rem;
    align-items: center;
    background: #E8E8E8;
    border-radius: 10px;
}


    </style>
    
</head>
<body>
    <div class="container-fluid mt-3">
        <h2><strong>Upload de arquivos</strong></h2>

        <div class="card"> <!-- "card" é do bootstrap para deixar o layout mais responsivo-->
            <div class="card-boy">
                <form action="envia.php" method="POST" enctype="multipart/form-data"><!-- "enctype="multipart/form-data" sem isso o seu form não vai funcionar-->
                    <input class="btn btn-primary file" type="file" name="arquivo" id="arquivo"><!--"file" é de arquivos -->
                    <input class="btn btn-success" type="submit" id="submit" value="Enviar">
                </form>
            </div>
        </div>
    </div>
     
    
    <h6 class="mt-3">Arquivos enviados</h6>
        <div class="box mt-3">
            <div class="box1">
                <?php  require 'lista.php'; ?><!--aqui ira mostrar os aquivos que estao sendo enviados -->
            </div>
        </div>
      

</body>
</html>