
<?php require __DIR__ . '/partials/header_login.php'; ?>

<section class="hero">
    <form action="action_page.php" method="POST">
        <div class="container">
            
            <h2>Criar conta</h2>

            <label for="name"><b>Nome</b></label>
            <input type="text" id="name" placeholder="O teu nome" name="name" required >

            <label for="email"><b>Email</b></label>
            <input type="email" id="email" placeholder="O teu email" name="email" required >

            <label for="psw"><b>Palavra-passe</b></label>
            <input type="password" id="psw" placeholder="Cria uma palavra-passe" name="psw" required minlength="8">

            <button type="submit">Criar conta</button>
        </div>

        <div class="container">

            <span class="psw">
                Já tens conta?
                <a href="login.php">Iniciar sessão</a>
            </span>

        </div>
    </form>
</section>

