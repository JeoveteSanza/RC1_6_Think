<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TH!NK</title>

    <link rel="stylesheet" href="/RC1_6_Think/public/css/styleOR.css?v=2">
</head>

<body>
    <div class="pagina">
        <aside class="menu">
            <h1>Th!nk</h1>
            <nav>
                <ul>
                    <li><a href="#inicio">Início</a></li>
                    <li><details class="collapse">
                            <summary>Gestão de jogos</summary>

                            <div class="conteudo">
                                <li><a href="/RC1_6_Think/public/index.php?acao=criarjogos">Criar</a></li>
                                <li><a href="#">Editar Jogos</a></li>
                            </div>
                        </details>

                    </li>
                    <li><a href="#biblioteca">Biblioteca</a></li>
                    <li><a href="#historico">Histórico</a></li>
                    <li><a href="#resultados">Resultados</a></li>
                    <li><a href="#definicoes">Definições</a></li>
                </ul>
            </nav>
            <div class="ajuda">
                <a href="#">Ajuda</a>
            </div>
        </aside>

        <main class="main">
            
        
            <section id="inicio">
                <h2>Início</h2>
                <p>Bem-vindo ao Think.</p>
            </section>

            
            
            <section id="biblioteca" hidden>
                <form method="GET" action="index.php#biblioteca">
                    <input type="hidden" name="acao" value="organizador">

                    <input type="text" name="pesquisa" placeholder="Pesquisar...">

                    <button type="submit">Pesquisar</button>
                </form>
                <h2>Biblioteca</h2>
                    <?php if (empty($pesquisaResultado) && $pesquisa !== ''): ?>

                        <p>Não foram encontrados jogos.</p>

                    <?php else: ?>
                    
                    
                    <div class="biblioteca-cartoes">

                        <?php foreach ($pesquisaResultado as $jogo): ?>

                                <div class="cartao">
                                    <h3>
                                        <?= htmlspecialchars($jogo['nome']) ?>
                                    </h3>

                                    <a href="index.php?acao=detalhes&id=<?= $jogo['id'] ?>" title="Ver detalhes">
                                        <i class="bi bi-pencil-square">AAAAAAAAAAAA</i>
                                    </a>
                                </div>

                        <?php endforeach; ?>

                    </div>

                <?php endif; ?>
            </section>

            <section id="relatorio" hidden>
                <h2>Relatório</h2>
                <p>Conteúdo dos relatórios.</p>
            </section>

            <section id="grupos" hidden>
                <h2>Grupos</h2>
                <p>Lista de grupos.</p>
            </section>
        </main>
    </div>
    <script>
        const links = document.querySelectorAll('nav a');
        const secoes = document.querySelectorAll('main section');

        function mostrarPagina(id) {
            secoes.forEach(secao => {
                secao.hidden = secao.id !== id;
            });

            links.forEach(link => {
                link.classList.toggle('ativo', link.hash === '#' + id);
            });
        }

        function trocarPagina() {
            let id = location.hash.slice(1);

            if (!id || !document.querySelector('main section#' + id)) {
                id = 'inicio';
            }
            mostrarPagina(id);
        }

        window.addEventListener('hashchange', trocarPagina);
        trocarPagina();
    </script>

</body>

</html>