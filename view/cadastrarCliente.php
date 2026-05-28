<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/style.css">
    <title>Cadastrar Cliente</title>
</head>
<body>
    <header class="cabecalho-principal-laranja">
        <section class="logo-xhopii">
            <img src="../img/logo.png" alt="Xhopii">
            <h1 class="xhopii-branca">Xhopii</h1>
        </section>
        <nav class="sair">
            <a href="../view/login.php">Sair</a> 
        </nav>
    </header>
    <header class="cabecalho-secundario-2">
        <section class="cabecalho-secundario-laranja">
            <p>Home</p>
            <p>Cadastro Cliente</p>
            <p>Cadastro Funcionário</p>
            <p>Cadastro Produto</p>
            <p>Ver Clientes</p>
            <p>Ver Funcionários</p>
            <p>Ver Produtos</p>
        </section>
    </header>

    <main class="main-fundo-cinza">
        <section class="main-fundo-branco-section">
            <h1 class="main-cadastro">Cadastrar Cliente</h1>
            <form class="card-padrao-2" action="../processamento/processamentoCliente.php" method="POST" enctype="multipart/form-data">
                <input class="input-padrao" type="text" placeholder="Nome" name="nome">
                <input class="input-padrao" type="text" placeholder="Sobrenome" name="sobrenome">
                <input class="input-padrao" type="text" maxlength="14" placeholder="CPF" name="cpf">
                <input class="input-padrao" type="date" name="dataNascimento">
                <input class="input-padrao" type="tel" placeholder="Telefone" name="telefone">
                <input class="input-padrao" type="email" placeholder="Email" name="email">
                <input class="input-padrao" type="password" placeholder="Senha" name="senha">
                <p class="selecionar-foto">Selecionar foto de perfil:</p>
                <label class="enviar-arquivo"> Escolher arquivo
                    <input type="file" name="foto">
                </label>
                <p class="nome-arquivo">Nenhum arquivo escolhido</p>
                <button type="submit" class="botao-padrao">CADASTRAR</button>               
            </form>
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
            <img src="img/pagamentos.png" alt="Pix">
        </section>

        <section>
           <p><img src="img/insta-preto.png" alt="Instagram" class="social-icone"> Instagram</p>
                <p><img src="img/twitter-preto.png" alt="Twitter" class="social-icone"> Twitter</p>
                <p><img src="img/facebook-preto.png" alt="Facebook" class="social-icone"> Facebook</p>
                <p><img src="img/youtube-preto.jpg" alt="Youtube" class="social-icone"> YouTube</p>
                <p><img src="img/linkedIn-preto.png" alt="LinkedIn" class="social-icone"> LinkedIn</p>
        </section>

        <section>
            <h3>ATENDIMENTO AO CLIENTE</h3>
            <img src="img/qrcode.png" alt="QR Code" class="qrcode">    
        </section>

    </section>
    <hr>
    <p class="rodape-copy">
        
        © 2023 Xhopii. Todos os direitos acadêmicos reservados
    </p>
    </footer>

</body>
</html>
