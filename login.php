
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Downloads</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap');

body {
    background-image:  radial-gradient(circle at .06% 5%, #929bff 0, #486ee5 50%, #0046c2 100%);;
    font-family: 'Roboto', sans-serif;
}

div {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    padding: 5%;
    flex-direction: column;
    text-align: center;
    border-radius: 10px;
    background-color: rgba(0, 0, 0, 0.5);
}

p, a {
    color: #fff;
    font-size: 0.8rem;
}

p {
    margin-top: 2em;
}

a {
    text-decoration: none;
    padding: 0.4rem;
    border: 1px solid #929bff;
    border-radius: 20px;
}

a:hover {
    background-color: #6b77fa;
}

hr {
    max-width: 40%;
    margin-top: 2rem;
}

input {
    display: flex;
    flex-direction: row;
    padding: 5%;
    margin: 5%;
    outline: none;
    border: 1px solid dodgerblue;
    border-radius: 10px;
    width: 90%;
}

.inputSubmit {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 100%;
    cursor: pointer;
    background-color: dodgerblue;
    border: 1px solid rgb(26, 158, 215);
    color: white;
}

.inputSubmit:hover {
    background-color: rgb(55, 155, 255);
}


    </style>
</head>
<body>
    <div>
        <form action="testLogin.php" method="POST">
            <input type="text" name="email" placeholder="Email">
            <input type="password" name="senha" placeholder="Senha">
            <input class="inputSubmit" type="submit" name="submit" value="Entrar">
            <hr>

            <p>Ainda não tem uma conta?</p>
            <a href="formulario.php">Cadastrar-se</a>
        </form>
    </div>
    
</body>
</html>