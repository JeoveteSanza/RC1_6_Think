
<?php require __DIR__ . '/partials/header_login.php'; ?>

<div class="background">
        <div class="login-container">

            <h1>Criar uma conta</h1>

            <form onsubmit="return registar(event)">

                <div class="input-group">
                    <label>Nome</label>
                    <input type="text" id="nome" placeholder="nome" required>
                    
                </div>

                <div class="input-group">
                    <label>Email</label>
                    <input type="email" id="email" placeholder=" email"required>
                    
                </div>

                <div class="input-group">
                    <label>Password </label>
                    <input type="password" id="password" placeholder="password" minlength="8" required>
                    
                </div>

                <div class="input-group">
                    <label>Confirmar password</label>
                    <input type="password" id="confirmar" placeholder="Confirmar password" required>
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


