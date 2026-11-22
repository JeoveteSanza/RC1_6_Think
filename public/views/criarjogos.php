<?php require __DIR__ . '/partials/header_login.php'; ?>



<div class="background">
    <div class="login-container">

        <h1>Criar Jogo</h1>

        <form method="POST" action="index.php?acao=criarjogos">

            <div class="input-group">
                <label for="nome">Nome do jogo</label>
                <input type="text" id="nome" name="nome"
                    placeholder="Nome do jogo">
            </div>

            <div class="input-group">
                <label for="descricao">Descrição</label>
                <input type="text" id="descricao" name="descricao"
                    placeholder="Descrição do jogo" required>
            </div>

            <div class="input-group">
                <label for="tipo">Tipo de jogo</label>
                <select id="tipo" name="tipo" required>
                    <option value="individual">Individual</option>
                    <option value="equipa">Equipas</option>
                    <option value="misto">Misto</option>
                </select>
            </div>

            <div class="input-group">
                <label for="max_participantes">Máximo de participantes</label>
                <input type="number" id="max_participantes"
                    name="max_participantes" min="1" required>
            </div>

            <div class="input-group">
                <label for="total_fases">Total de fases</label>
                <input type="number" id="total_fases"
                    name="total_fases" min="1" required>
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
            <a href="/RC1_6_Think/public/index.php?acao=organizador">
                Página Organizador
            </a>
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