<?php
require_once "../model/Produto.php";
require_once "../model/BancoDeDados.php";
require_once "../controller/Controlador.php";

$idProduto = isset($_GET["idProduto"]) ? (int) $_GET["idProduto"] : 0;

if ($idProduto <= 0) {
    header("Location: verProdutos.php");
    exit;
}

$controlador = new Controlador();
$produto = $controlador->buscarProdutoPorId($idProduto);

if (!$produto) {
    header("Location: verProdutos.php");
    exit;
}

$fotoProduto = $produto["foto"] ?? "";
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/style.css">
    <title>Editar Produto</title>
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

    <main class="main-fundo-cinza">
        <section class="main-fundo-branco-section">
            <h1 class="main-cadastro">Editar Produto</h1>
            <form class="card-padrao-2" action="../processamento/processamento.php" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="acao" value="editarProduto">
                <input type="hidden" name="idProduto" value="<?= htmlspecialchars($produto["id"]) ?>">
                <input type="hidden" name="foto_atual" value="<?= htmlspecialchars($fotoProduto) ?>">
                <input class="input-padrao" type="text" name="nome" placeholder="Nome" value="<?= htmlspecialchars($produto["nome"]) ?>">
                <input class="input-padrao" type="text" name="fabricante" placeholder="Fabricante" value="<?= htmlspecialchars($produto["fabricante"]) ?>">
                <input class="input-padrao" type="text" name="descricao" placeholder="Descri&ccedil;&atilde;o" value="<?= htmlspecialchars($produto["descricao"]) ?>">
                <input class="input-padrao" type="number" name="valor" step="0.01" min="0" placeholder="Valor" value="<?= htmlspecialchars($produto["valor"]) ?>">
                <input class="input-padrao" type="number" name="quantidade" placeholder="Quantidade" value="<?= htmlspecialchars($produto["quantidade"]) ?>">
                <p class="selecionar-foto">Selecionar foto do produto:</p>
                <label class="enviar-arquivo"> Escolher arquivo
                    <input type="file" name="foto">
                </label>
                <p class="nome-arquivo">Nenhum arquivo escolhido</p>
                <button type="submit" class="botao-padrao">EDITAR</button>
            </form>
        </section>
    </main>

    <footer class="rodape-principal">
    <section class="rodape-colunas">
        <section>
            <h3>ATENDIMENTO AO CLIENTE</h3>
            <p>Central de Ajuda</p>
            <p>Como Comprar</p>
            <p>M&eacute;todos de Parametro</p>
            <p>Garantia Xhopii</p>
            <p>Devolu&ccedil;&atilde;o e Reembolso</p>
            <p>Fale Conosco</p>
            <p>Ouvidoria</p>
        </section>

        <section>
            <h3>SOBRE A XHOPII</h3>
            <p>Sobre N&oacute;s</p>
            <p>Pol&iacute;ticas Xhopii</p>
            <p>Programa de Aliados da Xhopii</p>
            <p>Seja um Entregador Xhopii</p>
            <p>Ofertas Rel&acirc;mpago</p>
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
        
        &copy; 2026 Xhopii. Todos os direitos acad&ecirc;micos reservados
    </p>
    </footer>

    <script src="../js/nomeArquivo.js"></script>
</body>
</html>
