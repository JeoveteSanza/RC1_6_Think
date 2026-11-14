
<?php require __DIR__ . '/partials/header_login.php'; ?>


<div class="background">
        <div class="login-container">

            <div class="logo">WELCOME</div>
            <h1>LOGIN</h1>
            <p class="subtitle">Inicia sessão na tua conta</p>

            <form onsubmit="return login(event)">
                <div class="input-group">
                    <input type="email" id="email" placeholder=" " required>
                    <label>Email</label>
                </div>

                <div class="input-group">
                    <input type="password" id="password" placeholder=" " required>
                    <label>Password</label>
                </div>

                <div class="options">
                    <label class="remember">
                        <input type="checkbox">
                        Lembrar-me
                    </label>

                    <a href="#" onclick="alert('Contacta o administrador para recuperar a password.')">
                        Esqueceste-te da password?
                    </a>
                </div>

                <button type="submit" class="main-button">
                     <a type="submit" class="main-button" href="index.php?acao=organizador">
                        Iniciar Sessão
                    </a>
                </button>

            </form>

            <div class="separator">
                <span>OU</span>
            </div>

            <p class="register-text">
                Ainda não tens conta?
                <a href="index.php?acao=registro.php">Criar conta</a>
            </p>
            <button><a href="organizador.php">teste</a></button>

        </div>
    </div>
    <div class="img">
        <img src="" alt="">
    </div>

    <script>
        function login(event) {
            event.preventDefault();

            const email = document.getElementById("email").value;
            const password = document.getElementById("password").value;

            //alert("Formulário preenchido com sucesso!\nEmail: " + email);

        }
    </script>
