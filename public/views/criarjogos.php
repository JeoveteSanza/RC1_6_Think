<?php require __DIR__ . '/partials/header_login.php'; ?>

<div class="background">
    <div class="login-container">

        <h1>Criar Jogo</h1>

        <form onsubmit="return criarJogo(event)">

            <div class="input-group">
                <label>Nome do jogo</label>
                <input type="text" id="nome" placeholder="Nome do jogo" required>
            </div>

            <div class="input-group">
                <label>Detalhes</label>
                <input type="text" id="detalhes" placeholder="Descrição do jogo" required>
            </div>

            <div class="input-group">
                <label>Categoria</label>
                <input type="text" id="categoria" placeholder="Programação, Matemática..." required>
            </div>

            <div class="input-group">
                <label>Visibilidade</label>
                <select id="visibilidade" required>
                    <option value="publico">Público</option>
                    <option value="privado">Privado</option>
                </select>
            </div>

            <div class="terms">
                <input type="checkbox" id="individual">
                <label for="individual">Jogo individual</label>

                <input type="checkbox" id="multijogador">
                <label for="multijogador">Jogo em equipas</label>
            </div>

            <button type="submit" class="main-button">
                Criar Jogo
            </button>

        </form>

        <div class="separator">
            <span>OU</span>
        </div>

        <p class="register-text">
            Queres voltar?
            <a href="/RC1_6_Think/public/index.php?acao=organizador">Página Organizador</a>
        </p>

    </div>
</div>

<script>
    function criarJogo(event) {
        event.preventDefault();

        const nome = document.getElementById("nome").value;

        const individual = document.getElementById("individual").checked;
        const multijogador = document.getElementById("multijogador").checked;

        if (!individual && !multijogador) {
            alert("Escolhe pelo menos um modo de jogo!");
            return false;
        }

        alert("Jogo criado visualmente com sucesso: " + nome);

        return false;
    }
</script>