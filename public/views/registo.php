
<?php require __DIR__ . '/partials/header_login.php'; ?>

<div class="background">
        <div class="login-container">

            <h1>Criar uma conta</h1>

            <form onsubmit="return registar(event)">

                <div class="input-group">
                    <input type="text" id="nome" placeholder=" " required>
                    <label>Nome completo</label>
                </div>

                <div class="input-group">
                    <input type="email" id="email" placeholder=" " required>
                    <label>Email</label>
                </div>

                <div class="input-group">
                    <input type="password" id="password" placeholder=" " minlength="8" required>
                    <label>Password (mínimo 8 caracteres)</label>
                </div>

                <div class="input-group">
                    <input type="password" id="confirmar" placeholder=" " required>
                    <label>Confirmar password</label>
                </div>

                <div class="terms">
                    <input type="checkbox" id="termos" required>
                    <label for="termos">
                        Aceito os termos e condições
                    </label>
                </div>

                <button type="submit" class="main-button">
                    Criar Conta
                </button>

            </form>

            <div class="separator">
                <span>OU</span>
            </div>

            <p class="register-text">
                Já tens conta?
                <a href="login.php">Iniciar sessão</a>
            </p>

        </div>
    </div>

    <script>
        function registar(event) {
            event.preventDefault();

            const nome = document.getElementById("nome").value;
            const password = document.getElementById("password").value;
            const confirmar = document.getElementById("confirmar").value;

            if (password !== confirmar) {
                alert("As passwords não coincidem!");
                return false;
            }

            alert("Registo efetuado visualmente com sucesso, " + nome + "!");

        }
    </script>


