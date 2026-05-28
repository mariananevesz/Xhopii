<?php
session_start();
if (!isset($_SESSION["cliente_id"])) {
    header("Location: ../view/login.php");
    exit;
}

require_once "../model/BancoDeDados.php";
require_once "../controller/Controlador.php";

$controlador = new Controlador();
$produtos = $controlador->listarProdutos();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/style.css">
    <title>Home</title>
</head>
<body>

    <header class="cabecalho-principal-laranja">
        <section class="logo-xhopii">
            <img src="../img/logo.png" alt="Xhopii">
            <h1 class="xhopii-branca">Xhopii</h1>
        </section>
        <nav class="sair">
            <a href="../processamento/logout.php">Sair</a> 
        </nav>
    </header>

    <header class="cabecalho-secundario-2">
        <section class="cabecalho-secundario-laranja">
            <a href="../view/home.php">Home</a>
            <a href="../view/cadastrarCliente.php">Cadastro Cliente</a>
            <a href="../view/cadastrarFuncionario.php">Cadastro Funcion&aacute;rio</a>
            <a href="../view/cadastrarProduto.php">Cadastro Produto</a>
            <a href="../view/cadastrarCupons.php">Cadastro Cupom</a>
            <a href="../view/cadastrarLoja.php">Cadastro Loja</a>
            <a href="../view/verClientes.php">Ver Clientes</a>
            <a href="../view/verFuncionarios.php">Ver Funcion&aacute;rios</a>
            <a href="../view/verProdutos.php">Ver Produtos</a>
            <a href="../view/verCupons.php">Ver Cupons</a>
            <a href="../view/verLojas.php">Ver Lojas</a>
        </section>
    </header>


    <section class="carrossel">
        <button id="prev">❮</button>
        <section class="slides">
            <img src="../img/banner1.png" class="slide active" alt="Banner 1">
            <img src="../img/pagamentos.png" class="slide" alt="Banner 2">
            <img src="../img/banner1.png" class="slide" alt="Banner 3">
        </section>
        <button id="next">❯</button>
    </section>

    <section class="banner-promocional">
        <img src="../img/banner-promocional.png" alt="Banner Promocional">
    </section>

    <p class="titulo-descobertas">DESCOBERTAS DO DIA</p>
    <hr class="hr-descobertas">

    <main>
        <section class="grade-produtos">
            <?php if ($produtos && mysqli_num_rows($produtos) > 0) { ?>
                <?php while($produto = mysqli_fetch_assoc($produtos)) { ?>
                    <?php
                    $nome = $produto["nome"] ?? "";
                    $valor = $produto["valor"] ?? 0;
                    $quantidade = $produto["quantidade"] ?? 0;
                    $foto = empty($produto["foto"]) || !file_exists(__DIR__ . "/../" . $produto["foto"]) ? "../img/produto1.png" : "../" . $produto["foto"];
                    ?>
                    <a href="../view/produtos.php?id=<?php echo (int)$produto["id"]; ?>" class="link-produto">
                        <section class="card-padrao-produto">
                            <img src="<?php echo htmlspecialchars($foto); ?>" alt="Produto">
                            <p class="nome-p"><?php echo htmlspecialchars($nome); ?></p>
                            <section class="preco-estoque-container">
                                <span class="preco-mini">R$<?php echo number_format((float)$valor, 2, ",", "."); ?></span>
                                <span class="estoque-cinza"><?php echo htmlspecialchars($quantidade); ?> disponíveis</span>
                            </section>
                        </section>
                    </a>
                <?php } ?>
            <?php } else { ?>
                <p>Nenhum produto cadastrado.</p>
            <?php } ?>

        </section>
    </main>

    <footer class="rodape-principal">
        <section class="rodape-colunas">
            <section>
                <h3>ATENDIMENTO AO CLIENTE</h3>
                <p>Central de Ajuda</p>
                <p>Como Comprar</p>
                <p>Métodos de Pagamento</p>
                <p>Garantia Xhopii</p>
                <p>Devolução e Reembolso</p>
                <p>Fale Conosco</p>
                <p>Ouvidoria</p>
            </section>

            <section>
                <h3>SOBRE A XHOPII</h3>
                <p>Sobre Nós</p>
                <p>Políticas Xhopii</p>
                <p>Política de Privacidade</p>
                <p>Programa de Aliados da Xhopii</p>
                <p>Seja um Entregador Xhopii</p>
                <p>Ofertas Relâmpago</p>
                <p>Xhopii Blog</p>
                <p>Imprensa</p>
            </section>

            <section>
                <h3>PAGAMENTO</h3>
                <img src="../img/pagamentos.png" alt="Métodos de Pagamento">
            </section>

            <section>
                <h3>SIGA-NOS</h3>
                <p><img src="../img/insta-preto.png" alt="Instagram" class="social-icone"> Instagram</p>
                <p><img src="../img/twitter-preto.png" alt="Twitter" class="social-icone"> Twitter</p>
                <p><img src="../img/facebook-preto.png" alt="Facebook" class="social-icone"> Facebook</p>
                <p><img src="../img/youtube-preto.jpg" alt="Youtube" class="social-icone"> YouTube</p>
                <p><img src="../img/linkedIn-preto.png" alt="LinkedIn" class="social-icone"> LinkedIn</p>
            </section>

            <section>
                <h3>ATENDIMENTO AO CLIENTE</h3>
                <img src="../img/qrcode.png" alt="QR Code" class="qrcode">
                <p>Google Play</p>
                <p>App Store</p>
            </section>
        </section>

        <hr>
        <p class="rodape-copy">© 2026 Xhopii. Todos os direitos acadêmicos reservados</p>
    </footer>

    <script src="../js/carrossel.js"></script>

</body>
</html>
