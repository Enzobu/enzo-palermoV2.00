<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include('part/head.php'); ?>
    <link rel="stylesheet" href="/style/login/login.css">
    <title>Login</title>
</head>
<body class="body" id="body">
    <header class="header" id="header">
        <?php include('part/header.php'); ?>
    </header>

    <main class="main">
        <div class="burger-button" id="burgerButton">
            <div class="burger"></div>
            <div class="burger"></div>
            <div class="burger"></div>
        </div>
        <div class="login-form-container">
            <form action="" class="login-form" method="POST">
                <div class="form-titre">USER LOGIN</div>
                <div class="input-container">
                    <div class="input">
                        <input type="text" name="id" placeholder="Identifiant">
                    </div>
                    <div class="container-img-form-login">
                        <img src="/images/login/utilisateur.svg" alt="" class="img-form-login">
                    </div>
                </div>
                <div class="input-container img-right">
                    <div class="input">
                        <input type="password" name="password" placeholder="Password">
                    </div>
                    <div class="container-img-form-login">
                        <img src="/images/login/cadenas-ouvert.svg" alt="" class="img-form-login">
                    </div>
                </div>
                <input type="submit" value="LOGIN">
            </form>
        </div>
    </main>

    <footer class="footer">
        <?php include('part/footer.php'); ?>
    </footer>
    <script src="/js/navBar.js"></script>
</body>
</html>