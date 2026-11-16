<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAP</title>
    <link rel="stylesheet" href="/RC1_6_Think/public/css/styleOR.css">

</head>

<body>
    <div class="pagina">
        <aside class="menu">
            <h1>Th!nk</h1>
            <nav>
                <ul>
                    <li><a href="#inicio">Inicio</a></li>
                    <li><a href="#biblioteca">Biblioteca</a></li>
                    <li><a href="#relatorio">Relatorio</a></li>
                    <li><a href="#grupos">Grupos</a></li>
                </ul>
            </nav>
            <div class="ajuda">
                <a href="#">Ajuda</a>
            </div>
        </aside>

        <main class="main">
            <div class="criar">
                <a href="/RC1_6_Think/public/index.php?acao=criarjogos">Criar</a>
            </div>


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

                    <?php foreach ($pesquisaResultado as $jogo): ?>
                        <article class="cartao">
                            <h3><a href="index.php?acao=detalhes&amp;id=<?= $jogo['id'] ?>"><?= htmlspecialchars($jogo['nome']) ?></a></h3>
                        </article>
                    <?php endforeach; ?>

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