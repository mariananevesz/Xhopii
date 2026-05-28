document.querySelectorAll('input[type="file"]').forEach(function (inputArquivo) {
    inputArquivo.addEventListener('change', function () {
        var nomeArquivo = inputArquivo.parentElement.nextElementSibling;
        var arquivoSelecionado = inputArquivo.files[0];

        if (nomeArquivo && nomeArquivo.classList.contains('nome-arquivo')) {
            nomeArquivo.textContent = arquivoSelecionado ? arquivoSelecionado.name : 'Nenhum arquivo escolhido';
        }
    });
});
