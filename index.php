<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barbearia Gabriel | Home</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
        <div class="logo">
            <h1>Barber Gabriel</h1>
        </div>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Sobre</a></li>
            <li><a href="#">Serviços</a></li>
            <li><a href="#">Preços</a></li>
            <li><a href="#">Contactos</a></li>
            <li><a href="#">Login</a></li>
        </ul>
    </nav>
    <main class="principal">
        <h1>
            Bem vindo 
        </h1>
        <div class="btn">
            <button type="submit">Começe Agora</button>
            <button>Login</button>
        </div>
    </main>
    <main class="meio">
        <?php
            echo "<p>obrigado por escolher a nós, desfrutes do melhor.</p>"
        ?>
    </main>
    <form>
        <h1>newslatter</h1>
        <input type="text" name="nome" id="nome" placeholder="seu nome"> <br><br>
        <input type="email" name="email" id="email" placeholder="seu@gmail.com"><br><br>
        <button>Enviar</button>
    </form>
    
</body>
</html>

