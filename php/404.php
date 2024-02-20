<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include('part/head.php'); ?>
    <link rel="stylesheet" href="/style/404/404.css">
    <title>404</title>
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
        <div class="err-404-container">
            <h1 class="title">404 ;(</h1>
            <h2 class="sub-title">La page demandée n'existe pas ...</h2>
            <div class="link-404-button">
                <a href="/">Retour à l'acceuil</a>
            </div>
        </div>
    </main>

    <footer class="footer">
        <?php include('part/footer.php'); ?>
    </footer>
    <script src="/js/navBar.js"></script>
</body>
</html>