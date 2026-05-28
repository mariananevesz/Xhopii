<?php
require_once "../model/BancoDeDados.php";
require_once "../controller/Controlador.php";

$controlador = new Controlador();
$clientes = $controlador->listarClientes();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/style.css">
    <title>Visualização de Clientes</title>
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

    <p class="titulo-descobertas"><strong>CLIENTES</strong></p>

    <main>
       <section class="grade-produtos-visualizar">
    <?php while($cliente = mysqli_fetch_assoc($clientes)) { ?>
        <?php $foto = empty($cliente["foto"]) || !file_exists(__DIR__ . "/../" . $cliente["foto"]) ? "../img/cliente.png" : "../" . $cliente["foto"]; ?>
        <a href="#" class="link-produto">
            <section class="card-visualizar">
                <img src="<?php echo htmlspecialchars($foto); ?>" alt="Cliente">
                <section class="corpo-card-visualizar">
                    <p class="fabricante"><strong>Nome: </strong><?php echo $cliente["nome"]; ?></p>
                    <p class="fabricante"><strong>Sobrenome: </strong><?php echo $cliente["sobrenome"]; ?></p>
                    <p class="fabricante"><strong>CPF: </strong><?php echo $cliente["cpf"]; ?></p>
                    <p class="fabricante"><strong>Data de Nascimento: </strong><?php echo $cliente["dataNascimento"]; ?></p>
                    <p class="fabricante"><strong>Telefone: </strong><?php echo $cliente["telefone"]; ?></p>
                    <p class="fabricante"><strong>Email: </strong><?php echo $cliente["email"]; ?></p>
                </section>
            </section>
        </a>
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
        <p class="rodape-copy">© 2023 Xhopii. Todos os direitos acadêmicos reservados</p>
    </footer>

</body>
</html>
