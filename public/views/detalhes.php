<?php require __DIR__ . '/partials/header.php'; ?>

<a class="voltar" href="index.php?acao=organizador#biblioteca">
    ← Voltar aos meus jogos
</a>

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

            <dl>
                <dt>Estado</dt>
                <dd><?= htmlspecialchars($jogo['estado'], ENT_QUOTES, 'UTF-8') ?></dd>

                <dt>Tipo de jogo</dt>
                <dd><?= htmlspecialchars($jogo['tipo'], ENT_QUOTES, 'UTF-8') ?></dd>

                <dt>Máximo de participantes</dt>
                <dd><?= htmlspecialchars((string)$jogo['max_participantes'], ENT_QUOTES, 'UTF-8') ?></dd>

                <dt>Total de fases</dt>
                <dd><?= htmlspecialchars((string)$jogo['total_fases'], ENT_QUOTES, 'UTF-8') ?></dd>

                <dt>Organizador</dt>
                <dd><?= htmlspecialchars((string)$jogo['organizador_id'], ENT_QUOTES, 'UTF-8') ?></dd>
            </dl>
        </div>

    <?php else: ?>

        <div>
            <h1>Jogo não encontrado</h1>
            <p>O jogo que procuras não existe ou o identificador é inválido.</p>
        </div>

    <?php endif; ?>
</section>

<?php require __DIR__ . '/partials/footer.php'; ?>