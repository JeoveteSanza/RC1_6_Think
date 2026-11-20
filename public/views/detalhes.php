
<!doctype html>
<html lang="pt">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>TH!NK</title>
  <link rel="stylesheet" href="/RC1_6_Think/public/css/style_inicio.css">
</head>

<body>
  <header class="topo">
    <a class="marca" href="/RC1_6_Think/public/index.php">TH!NK</a>
    <nav>
        <a class="voltar" href="index.php?acao=organizador#biblioteca">
            ← Voltar aos meus jogos
        </a>
    </nav>
</header>
  <main class="container">



<section class="ficha">
    <?php if ($jogo !== null): ?>

        <div>
            <span class="eyebrow">
                Jogo #<?= htmlspecialchars((string)$jogo['id'], ENT_QUOTES, 'UTF-8') ?>
            </span>

            <h1>
                <?= htmlspecialchars($jogo['nome'], ENT_QUOTES, 'UTF-8') ?>
            </h1>

            <p>
                <?= htmlspecialchars($jogo['descricao'], ENT_QUOTES, 'UTF-8') ?>
            </p>

            <div class="ficha-filho">
                    <div class="ficha-status">
                        <h3>Estado</h3>
                        <p><?= htmlspecialchars($jogo['estado'], ENT_QUOTES, 'UTF-8') ?></p>
                    </div>

                    <div class="ficha-status">
                        <h3>Tipo de jogo</h3>
                        <p><?= htmlspecialchars($jogo['tipo'], ENT_QUOTES, 'UTF-8') ?></p>
                    </div>
                    
                    <div class="ficha-status">
                        <h3>Máximo de participantes</h3>
                        <p><?= htmlspecialchars((string)$jogo['max_participantes'], ENT_QUOTES, 'UTF-8') ?></p>
                    </div>
                    
                    <div class="ficha-status">
                        <h3>Total de fases</h3>
                        <p><?= htmlspecialchars((string)$jogo['total_fases'], ENT_QUOTES, 'UTF-8') ?></p>
                    </div>

                    <div class="ficha-status">
                        <h3>Organizador</h3>
                        <p><?= htmlspecialchars((string)$jogo['organizador_id'], ENT_QUOTES, 'UTF-8') ?></p>
                    </div>

            </div>
            
        </div>

    <?php else: ?>

        <div>
            <h1>Jogo não encontrado</h1>
            <p>O jogo que procuras não existe ou o identificador é inválido.</p>
        </div>

    <?php endif; ?>
</section>

<?php require __DIR__ . '/partials/footer.php'; ?>