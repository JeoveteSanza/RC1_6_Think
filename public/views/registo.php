<?php require __DIR__ . '/partials/header_login.php'; ?>

    <section class="hero">
        <form action="action_page.php" method="post">

            <div class="container">
                <label for="name"><b>Nome</b></label>
                <input type="text" placeholder="Nome" name="name" required>

                <label for="email"><b>Email</b></label>
                <input type="Email" placeholder="Email" email="email" require>

                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Password" name="psw" required>

                <button type="submit">Login</button>
                <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
                </label>
            </div>

            <div class="container" style="background-color:#f1f1f1">
                <button type="button" class="cancelbtn">Cancel</button>
                <span class="psw">Forgot <a href="#">password?</a></span>
            </div>
        </form>
    <section class="painel">