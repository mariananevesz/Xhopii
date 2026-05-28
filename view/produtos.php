<?php
require_once "../model/BancoDeDados.php";
require_once "../controller/Controlador.php";

$idProduto = isset($_GET["id"]) ? (int) $_GET["id"] : 0;

if ($idProduto <= 0) {
    header("Location: ../view/home.php");
    exit;
}

$controlador = new Controlador();
$produto = $controlador->buscarProdutoPorId($idProduto);

if (!$produto) {
    header("Location: ../view/home.php");
    exit;
}

$nome = $produto["nome"] ?? "";
$fabricante = $produto["fabricante"] ?? "";
$descricao = $produto["descricao"] ?? "";
$valor = $produto["valor"] ?? 0;
$quantidade = $produto["quantidade"] ?? 0;
$foto = empty($produto["foto"]) || !file_exists(__DIR__ . "/../" . $produto["foto"]) ? "../img/produto1.png" : "../" . $produto["foto"];
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/style.css">
    <title>Produto</title>
</head>
<body>
    <header class="cabecalho-principal-laranja">
        <section class="logo-xhopii">
            <img src="../img/logo.png" alt="Xhopii">
            <h1 class="xhopii-branca">Xhopii</h1>
        </section>
    </header>
    <header class="cabecalho-secundario">
        <section class="cabecalho-secundario-cinza">
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

    
    <main class="main-fundo-branco">
    <section class="fotos-laterais">
        <img src="<?php echo htmlspecialchars($foto); ?>" alt="<?php echo htmlspecialchars($nome); ?>" class="foto-lateral-destacada">
        <img src="<?php echo htmlspecialchars($foto); ?>" alt="<?php echo htmlspecialchars($nome); ?>" class="foto-lateral">
        <img src="<?php echo htmlspecialchars($foto); ?>" alt="<?php echo htmlspecialchars($nome); ?>" class="foto-lateral">
        <img src="<?php echo htmlspecialchars($foto); ?>" alt="<?php echo htmlspecialchars($nome); ?>" class="foto-lateral">
        <img src="<?php echo htmlspecialchars($foto); ?>" alt="<?php echo htmlspecialchars($nome); ?>" class="foto-lateral">
    </section>

    <section class="foto-destacada">
        <img src="<?php echo htmlspecialchars($foto); ?>" alt="<?php echo htmlspecialchars($nome); ?>">
    </section>

    <section class="informacoes-compra">
        <h1 class="nome-produto"><?php echo htmlspecialchars($nome); ?></h1>
        <p><strong>Fabricante: </strong><?php echo htmlspecialchars($fabricante); ?></p>
        <p><?php echo htmlspecialchars($descricao); ?></p>
        <p class="preco">R$<?php echo number_format((float)$valor, 2, ",", "."); ?></p>
        <p><?php echo htmlspecialchars($quantidade); ?> peças disponíveis</p>

        <!--<div class="opcoes-selecao">
            <p class="modelos">Modelos:</p>
            <div class="lista-botoes">
                <button type="button" class="botoes-padroes">Preto</button>
                <button type="button" class="botoes-padroes">Azul</button>
                <button type="button" class="botoes-padroes">Verde</button>
                <button type="button" class="botoes-padroes">Cinza</button>
                <button type="button" class="botoes-padroes">Rosa</button>
            </div>
        </div>

        <div class="opcoes-tamanho">
            <p>Tamanhos:</p>
            <div class="lista-tamanho">
                <button type="button" class="botoes-padroes">P</button>
                <button type="button" class="botoes-padroes">M</button>
                <button type="button" class="botoes-padroes">G</button>
                <button type="button" class="botoes-padroes">GG</button>
            </div>
        </div>

        <p class="tamanho-escolhido">Tamanho Selecionado: P</p>-->

        <button class="botao-comprar">Comprar Agora</button>
    </section>
    </main>

    <footer class="rodape-principal">
    <section class="rodape-colunas">
        <section>
            <h3>ATENDIMENTO AO CLIENTE</h3>
            <p>Central de Ajuda</p>
            <p>Como Comprar</p>
            <p>Métodos de Parametro</p>
            <p>Garantia Xhopii</p>
            <p>Devolução e Reembolso</p>
            <p>Fale Conosco</p>
            <p>Ouvidoria</p>
        </section>

        <section>
            <h3>SOBRE A XHOPII</h3>
            <p>Sobre Nós</p>
            <p>Políticas Xhopii</p>
            <p>Programa de Aliados da Xhopii</p>
            <p>Seja um Entregador Xhopii</p>
            <p>Ofertas Relâmpago</p>
            <p>Xhopii Blog</p>
            <p>Impresa</p>
        </section>

        <section>
            <h3>PAGAMENTO</h3>
            <img src="../img/pagamentos.png" alt="Pix">
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
        </section>
    </section>
    <hr>
    <p class="rodape-copy">
        
        © 2026 Xhopii. Todos os direitos acadêmicos reservados
    </p>
    </footer>

</body>
</html>
