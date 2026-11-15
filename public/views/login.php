<?php require __DIR__ . '/partials/header_login.php'; ?>

<div class="background">

    <!-- LADO ESQUERDO: LOGIN -->
    <div class="login-container">

        <div class="logo">
            <h1>LOGIN</h1>
        </div>

        <p class="subtitle">Acede à tua conta</p>

        <form onsubmit="return login(event)">

            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" id="email" placeholder="Email" required>
            </div>

            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" placeholder="Password" required>
            </div>

            <div class="options">

                <div class="lembrar">
                    <label>
                        <input type="checkbox">
                        Lembrar-me
                    </label>
                </div>

                <a href="#" onclick="alert('Contacta o administrador para recuperar a password.')">
                    Recuperar password
                </a>

            </div>

            <button type="submit" class="main-button">
                <a href="index.php?acao=organizador">Iniciar Sessão</a>
            </button>

        </form>

        <div class="separator">
            <span>OU</span>
        </div>

        <p class="register-text">
            Ainda não tens conta?
            <a href="index.php?acao=registrar">Criar conta</a>
        </p>

    </div>

</div>


<script>
    function login(event) {
        event.preventDefault();

        const email = document.getElementById("email").value;
        const password = document.getElementById("password").value;

        // Aqui podes adicionar a lógica de autenticação.
    }
</script>