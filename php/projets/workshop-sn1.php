<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include('php/part/head.php'); ?>
    <link rel="stylesheet" href="/style/workshop-sn1/workshop-sn1.css">
    <title>Workshop SN1 - Projets - Enzo Palermo</title>
</head>
<body class="body" id="body">
    <header class="header" id="header">
        <?php include('php/part/header.php'); ?>
    </header>

    <main class="main">
        <div class="burger-button" id="burgerButton">
            <div class="burger"></div>
            <div class="burger"></div>
            <div class="burger"></div>
        </div>
        <h1 class="title">Workshop SN1</h1>
        <section class="presentation">
            <h2 class="title">Qu'est ce que le workshop ?</h2>
            <div class="description">
                Le workshop, c'est un projet sur une semaine, la première semaine de cours, qui à pour but de réaliser une production innovante. À la fin de cette production, les groupes sont départagés par écoles et puis, au niveau national. Un groupe gagnant est alors élu. À noter qu'en retirant le mise en route, le temps dédié au présentation et à leur préparation, il n'y a que 2 à 2,5 jours pour réaliser le projet.

                Le workshop est un projet intensif d'une semaine, positionné dès la première semaine de cours, visant à produire une réalisation innovante. À l'issue de cette période de création, les équipes sont évaluées d'abord au niveau de leur école respective, puis au niveau national. Un groupe est finalement couronné gagnant. Il est important de souligner que, une fois soustraits le temps nécessaire pour démarrer le projet, ainsi que pour la présentation finale et sa présentation, il reste effectivement entre 2 et 2,5 jours pour mener à bien le projet.
            </div>
        </section>
        <section class="sujet">
            <h2 class="title">Le sujet</h2>
            <div class="description">
                Le sujet se portait sur la création d'une solution innovante permettant d'améliorer la qualité de vie des étudiants.
            </div>
        </section>
        <section class="idee">
            <h2 class="title">Notre idée</h2>
            <div class="description">
                Étant dans une grande ville, nous avons fait le choix de choisir un problème qui nous touche tous : les déplacement. En effet, c'est de plus en plus difficile de se déplacer en voiture et de plus en plus de personnes opte pour un moyen plus économme et plus facile : le vélo ou la trotinette. <br> <br>

                Nous avons pu observer un manque sur les vélo et certaine trotinette : la signalisation. C'est pour cela que nous avons eu l'idée de SafeBike : un objet innovant qui peu s'intégrer à n'importe quel vélo ou trotinette et qui intègre un système d'afficheur permettant d'indiquer une direction, un freinage, un danger ou encore des messages personnalisés.
            </div>
        </section>
        <section class="idee">
            <h2 class="title">Un peu plus en détail...</h2>
            <div class="description">
                SafeBike se compose, à l'état de prototype, de trois matrices led, d'un arduino uno, d'un joystick et d'un cadre imprimer en 3D.
            </div>
            <iframe id="youtube-video" width="420" height="315" src="https://www.youtube.com/embed/NYw_aC2Ft68" frameborder="0" allowfullscreen></iframe>
                <script src="/js/videoWorkshop.js"></script>
        </section>
    </main>

    <footer class="footer">
        <?php include('php/part/footer.php'); ?>
    </footer>
    <script src="/js/navBar.js"></script>
</body>
</html>