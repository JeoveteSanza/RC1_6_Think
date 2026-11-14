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
                <a href="#">Criar</a>
            </div>

            <div>
                <input type="text" placeholder="Pesquisar">
            </div>

            <section id="inicio">
                <h2>Início</h2>
                <p>Bem-vindo ao Think.</p>
            </section>

            <section id="biblioteca" hidden>
                <h2>Biblioteca</h2>
                <article class="item">
                    <div class="eventos">
            <?php foreach ($eventos as $evento): ?>
                <div class="cartao">
                    <h2><?= $evento['nome'] ?></h2>
                    <p><?= $evento['estado'] ?></p>
                </div>
            <?php endforeach ?>
        </div>
                </article>
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