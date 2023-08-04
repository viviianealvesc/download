<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap');

body {
    background-image:  radial-gradient(circle at .06% 5%, #929bff 0, #486ee5 50%, #0046c2 100%);;
    font-family: 'Roboto', sans-serif;
    font-size: 0.8rem;
    color: white;
}


.box {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    padding: 5%;
    flex-direction: column;
    border-radius: 10px;
    background-color: rgba(0, 0, 0, 0.5);
}

.inputText {
    width: 90%;
    display: flex;
    flex-direction: row;
    padding: 5%;
    margin: 5% 0 5% 0;
    outline: none;
    border: 1px solid dodgerblue;
    border-radius: 10px;
}

.inputSubmit {
    display: flex;
    align-items: center;
    justify-content: center;
}

.submit {
    width: 90%;
    padding: 0.4rem;
    cursor: pointer;
    background-color: dodgerblue;
    border: 1px solid rgb(26, 158, 215);
    color: white;
    border-radius: 10px;
}

.submit:hover {
    background-color: rgb(55, 155, 255);
}
    </style>

</head>
<body>
    <div class="box">
        <form action="home.php" method="POST">
            <label  for="nome">Nome Completo</label>
            <input class="inputText" type="text" name="nome" id="nome" placeholder="Nome" required>

            <label for="email">Email</label>
            <input class="inputText" type="text" name="email" id="email" placeholder="Email" required>

            <label for="senha">Senha</label>
            <input class="inputText" type="password" name="senha" id="senha" placeholder="Senha" required>
            
            <div class="inputSubmit">
               <input class="submit" type="submit" name="submit" id="submit">
            </div>
        </form>
    </div>
    
</body>
</html>