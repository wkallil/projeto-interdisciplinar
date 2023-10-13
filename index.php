



<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./php/login.php">
    <link rel="stylesheet" href="./php/cadastro.php">
    <link rel="stylesheet" href="./php/sobrenos.php">
    <title>AOKI</title>
</head>

<body>
    <header>
        <h1>AOKI BAGS</h1>

        <div class="logo">
            <img src="./img/logo_eco-removebg-preview.png" alt="logo loja ecológica">
        </div>

        <nav>
            <ul>
                <!-- <li><a href="#">Início</a></li> -->
                <!-- <li><a href="#">Produtos</a></li> -->
                <li><a href="./php/sobrenos.php">Sobre Nós</a></li>
                <li><a href="https://www.instagram.com/_aokiart/?theme=dark" target="_blank">Instagram</a></li>
                <li><a href="./php/login.php">login</a></li>
            </ul>
        </nav>

        <div class="sacola">
            <a href="./php/carrinho.php"><img src="./img/sacola-de-compras.png" alt="carrinho de compras"></a>
        </div>
    </header>

    <section class="banner">
        <img class="banner" src="./img/ajude3.png" alt="banner">
    </section>

    <section class="products">
        <article class="product">
            <img class="imagem-destaque" src="./img/vulcao.png" alt="Bolsa Ecológica 1">
            <h2>Bolsa Ecológica 1</h2>
            <p>Descrição da bolsa ecológica 1.</p>
            <p class="price">R$ 50,00</p>
            <form action="./php/carrinho.php" method="post">
                <input type="hidden" name="id" value="item-1">
                <input type="hidden" name="nome" value="Bolsa Ecológica 1">
                <input type="hidden" name="preco" value="50.00">
                <input type="submit" class="buy-button" value="Enviar pro carrinho">
            </form>
            

        </article>

        <article class="product">
            <img class="imagem-destaque" src="./img/musica.jpg" alt="Bolsa Ecológica 2">
            <h2>Bolsa Ecológica 2</h2>
            <p>Descrição da bolsa ecológica 2.</p>
            <p class="price">R$ 60,00</p>
            <form action="./php/carrinho.php" method="post">
                <input type="hidden" name="id" value="item-2">
                <input type="hidden" name="nome" value="Bolsa Ecológica 2">
                <input type="hidden" name="preco" value="60.00">
                <input type="submit" class="buy-button" value="Enviar pro carrinho">
            </form>

        </article>

        <article class="product">
            <img class="imagem-destaque" src="./img/vintage.webp" alt="Bolsa Ecológica 3">
            <h2>Bolsa Ecológica 3</h2>
            <p>Descrição da bolsa ecológica 3.</p>
            <p class="price">R$ 60,00</p>
            <form action="./php/carrinho.php" method="post">
                <input type="hidden" name="id" value="item-3">
                <input type="hidden" name="nome" value="Bolsa Ecológica 3">
                <input type="hidden" name="preco" value="60.00">
                <input type="submit" class="buy-button" value="Enviar pro carrinho">
            </form>

        </article>

        <article class="product">
            <img class="imagem-destaque" src="./img/sun.jpg" alt="Bolsa Ecológica 4">
            <h2>Bolsa Ecológica 4</h2>
            <p>Descrição da bolsa ecológica 4.</p>
            <p class="price">R$ 60,00</p>
            <form action="./php/carrinho.php" method="post">
                <input type="hidden" name="id" value="item-4">
                <input type="hidden" name="nome" value="Bolsa Ecológica 4">
                <input type="hidden" name="preco" value="60.00">
                <input type="submit" class="buy-button" value="Enviar pro carrinho">
            </form>

        </article>

    </section>

    <section class="contato">
        <h2 class="contato__titulo">Fique por dentro das novidades!</h2>
        <p class="contato__texto">Atualizações de modelos, novas estampas, promoções e outros.</p>
        <input type="email" placeholder="Cadastre seu e-mail" class="contato__email">
    </section>

    <!-- <section id="sobre">
        <h2>Sobre Nós</h2>
        <p>Somos uma empresa comprometida com a preservação do meio ambiente, oferecendo eco bags de alta qualidade. Nossas eco bags são feitas com materiais sustentáveis e são perfeitas para substituir sacolas plásticas descartáveis.</p>
    </section> -->

    <section id="contato">
        <h2>Contato</h2>
        <p>Entre em contato conosco para mais informações:</p>
        <ul>
            <li>Email: contato@ecobags.com</li>
            <li>Telefone: (11) 1234-5678</li>
        </ul>
    </section>


    <footer>
        <p>&copy; 2023 Loja de Bolsas Ecológicas</p>
    </footer>
</body>

</html>