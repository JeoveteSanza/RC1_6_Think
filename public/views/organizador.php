<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TH!NK</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.min.css">
    <link rel="stylesheet" href="/RC1_6_Think/public/css/styleOR.css?v=2">
</head>

<body>
    <div class="pagina">
        <article class="menu">
            <h1>Th!nk</h1>
            <nav>
                <ul>
                    <li><a href="#inicio">Início</a></li>
                    <li>
                        <details class="collapse">
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

    </article>
    <main class="main">


        <section id="inicio">
            <h1>Painel geral</h1>

            <div class="card-content">

                <article class="card">

                    <div class="card-body">
                        <header class="card-header">
                            <h2>Numero de eventos</h2>
                        </header>
                        <p><?= count($jogos) ?></p>
                    </div>

                </article>

                <article class="card">

                    <div class="card-body">
                        <header class="card-header">
                            <h2>Participantes</h2>
                        </header>
                        <p>10</p>
                    </div>

                </article>

                <article class="card">

                    <div class="card-body">
                        <header class="card-header">
                            <h2>Jogos realizados.</h2>
                        </header>
                        <p>20</p>
                    </div>

                </article>

                <article class="card1">

                    <div class="card-body">
                        <header class="card-header">
                            <h2>Estado dos eventos</h2>
                        </header>
                        <div class="inicio-cartao">

                            <?php foreach ($pesquisaResultado as $jogo): ?>

                                <div class="cartao-inicio">
                                    <h3>
                                        <?= htmlspecialchars($jogo['nome']) ?>
                                    </h3>

                                    <a href="index.php?acao=detalhes&id=<?= $jogo['id'] ?>" title="Ver detalhes">
                                        <i class="bi bi-pencil-square">Ver Detalhes</i>
                                    </a>
                                </div>

                            <?php endforeach; ?>

                        </div>
                    </div>

                </article>

            </div>

        </section>


        <section id="biblioteca" hidden>
            <div>
                <form method="GET" action="index.php#biblioteca">
                    <input type="hidden" name="acao" value="organizador">
                    <input type="text" name="pesquisa" placeholder="Pesquisar...">

                    <details class="filtro">
                        <summary>Gestão de jogos</summary>

                        <div class="conteudo">
                            <div class="filter-buttons">
                                <button data-category="all" class="active">All</button>
                                <button data-category="Cultura">Cultura</button>
                                <button data-category="Tecnologia">Tecnologia</button>
                                <button data-category="Gastronomia">Gastronomia</button>
                                <button data-category="Educação">Educação</button>
                                <button data-category="Desporto">Desporto</button>
                                <button data-category="Arte">Arte</button>
                                <button data-category="Ciência">Ciência</button>
                                <button data-category="Natureza">Natureza</button>
                                <button data-category="Sociedade">Sociedade</button>
                            </div>
                        </div>
                    </details>
 
                    <button class="btn" type="submit">Pesquisar</button>
                </form>
            </div>
            <h2>Biblioteca</h2>
            <?php if (empty($pesquisaResultado) && $pesquisa !== ''): ?>

                <p>Não foram encontrados jogos.</p>

            <?php else: ?>


                <div class="biblioteca-cartoes">

                    <?php foreach ($pesquisaResultado as $jogo): ?>

                        <div class="cartao cartao-<?= $jogo['categoria'] ?>" data-category="<?= $jogo['categoria'] ?>">
                            <h3>
                                <?= htmlspecialchars($jogo['nome']) ?>
                            </h3>

                            <a href="index.php?acao=detalhes&id=<?= $jogo['id'] ?>" title="Ver detalhes">
                                <i class="fa-solid fa-pen-ruler"></i>
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

        const buttons = document.querySelectorAll('.filter-buttons button');
        const items = document.querySelectorAll('.biblioteca-cartoes .cartao');

        // Navegação entre secções
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

        // Filtro por categorias
        buttons.forEach(button => {
            button.addEventListener('click', function(event) {
                event.preventDefault();

                // Atualizar botão ativo
                buttons.forEach(btn => btn.classList.remove('active'));
                this.classList.add('active');

                const categoriaSelecionada = this.dataset.category;

                // Filtrar cartões
                items.forEach(item => {
                    const categoriaJogo = item.dataset.category;

                    if (
                        categoriaSelecionada === 'all' ||
                        categoriaJogo.trim().toLowerCase() === categoriaSelecionada.trim().toLowerCase()
                    ) {
                        item.style.display = 'flex';
                    } else {
                        item.style.display = 'none';
                    }
                });
            });
        });
    </script>

</body>

</html>