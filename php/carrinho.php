<?php
session_start();

// Verifica se o usuário está logado
if (!isset($_SESSION['usuario']) || empty($_SESSION['usuario'])) {
    unset($_SESSION['usuario']);
    unset($_SESSION['senha']);
    header('Location: login.php');
}
//fazer um carrinho para cada usuário
// cria um carrinho de compras para o usuário, caso não exista
if (!isset($_SESSION['usuarios_carrinhos'])) {
    $_SESSION['usuarios_carrinhos'] = array();
}

// Verifica se o carrinho do usuário já existe ou cria um
if (!isset($_SESSION['usuarios_carrinhos'][$_SESSION['usuario']])) {
    $_SESSION['usuarios_carrinhos'][$_SESSION['usuario']] = array();
}

// adicionar um item ao carrinho do usuário
function adicionarAoCarrinho($id, $nome, $preco)
{
    if (isset($_SESSION['usuarios_carrinhos'][$_SESSION['usuario']][$id])) {
        // Se o item já estiver no carrinho, aumente a quantidade
        $_SESSION['usuarios_carrinhos'][$_SESSION['usuario']][$id]['quantidade']++;
    } else {
        // Caso contrário, crie um novo item no carrinho do usuário
        $item = array(
            'id' => $id,
            'nome' => $nome,
            'preco' => $preco,
            'quantidade' => 1
        );
        $_SESSION['usuarios_carrinhos'][$_SESSION['usuario']][$id] = $item;
    }
}

//remover um item do carrinho do usuário
function removerDoCarrinho($id)
{
    if (isset($_SESSION['usuarios_carrinhos'][$_SESSION['usuario']][$id])) {
        if ($_SESSION['usuarios_carrinhos'][$_SESSION['usuario']][$id]['quantidade'] > 1) {
            // Se houver mais de um item, diminua a quantidade
            $_SESSION['usuarios_carrinhos'][$_SESSION['usuario']][$id]['quantidade']--;
        } else {
            // Caso contrário, remova o item do carrinho do usuário
            unset($_SESSION['usuarios_carrinhos'][$_SESSION['usuario']][$id]);
        }
    }
}

//Verifica se algum item foi adicionado ao carrinho
if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $preco = $_POST['preco'];

    adicionarAoCarrinho($id, $nome, $preco);
}

// Verifica se algum item foi removido do carrinho
if (isset($_GET['remover'])) {
    $id = $_GET['remover'];
    removerDoCarrinho($id);
}

//calcular o valor total do carrinho do usuário
function calcularValorTotal()
{
    $total = 0;
    if (isset($_SESSION['usuarios_carrinhos'][$_SESSION['usuario']])) {
        foreach ($_SESSION['usuarios_carrinhos'][$_SESSION['usuario']] as $item) {
            $total = $total + ($item['preco'] * $item['quantidade']);
        }
    }
    return $total;
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Carrinho de Compras</title>
</head>

<body>
    <h1>Carrinho de Compras</h1>

    <table>
        <tr>
            <th>Item</th>
            <th>Preço Unitário</th>
            <th>Quantidade</th>
            <th>Preço Total</th>
            <th>Ação</th>
        </tr>
        <?php
        if (isset($_SESSION['usuarios_carrinhos'][$_SESSION['usuario']])) {
            foreach ($_SESSION['usuarios_carrinhos'][$_SESSION['usuario']] as $id => $item) {
                echo "<tr>";
                echo "<td>{$item['nome']}</td>";
                echo "<td>R$ {$item['preco']}</td>";
                echo "<td>{$item['quantidade']}</td>";
                echo "<td>R$ " . ($item['preco'] * $item['quantidade']) . "</td>";
                echo "<td><a href='carrinho.php?remover={$id}'>Remover</a></td>";
                echo "</tr>";
            }
        }
        ?>
    </table>

    <p>Total a Pagar: R$ <?php echo calcularValorTotal(); ?></p>

    <a href="../index.php">Continuar Comprando</a>
    <a href="./sair.php">Sair</a>

    <form method="post" action="confirmar_pedido.php">
        <input type="submit" name="confirmar_pedido" value="Confirmar Compra">
    </form>

</body>

</html>