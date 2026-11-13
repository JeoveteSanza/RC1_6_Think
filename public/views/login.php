
<?php require __DIR__ . '/partials/header_login.php'; ?>


<section class="hero">
    <form action="action_page.php" method="POST">
        <div class="container">

            <label for="email"><b>Email</b></label>
            <input type="email" id="email" name="email" placeholder="Email" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" id="psw" name="psw" placeholder="Password" required>

            <button type="submit">Iniciar sessão</button>

            <label>
                <input type="checkbox" name="remember">
                Lembrar-me
            </label>

        </div>

        <div class="container login-links">

            <span class="psw">
                <a href="recuperar-password.php">
                    Esqueceste-te da palavra-passe?
                </a>
            </span>
            <span class="registo">
                <a href="registo.php">Criar conta</a>
            </span>

        </div>
    </form>
</section>

