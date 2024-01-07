<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include('part/head.php'); ?>
    <link rel="stylesheet" href="style/presentation/presentation.css">
    <link rel="stylesheet" href="style/projets/projets.css">
    <link rel="stylesheet" href="style/a-propos/a-propos.css">
    <link rel="stylesheet" href="style/cv/cv.css">
    <title>Document</title>
</head>
<body class="body">
    <header class="header">
        <?php include('part/header.php'); ?>
    </header>

    <main class="main">
        <section class="presentation" id="presentation">
            <?php include('part/presentation.php'); ?>
        </section>
        <section class="projets" id="projets">
            <?php include('part/projets.php'); ?>
        </section>
        <section class="a-propos" id="a-propos">
            <?php include('part/a-propos.php'); ?>
        </section>
        <section class="cv" id="cv">
            <?php include('part/cv.php'); ?>
        </section>
    </main>

    <footer class="footer">
        <?php include('part/footer.php'); ?>
    </footer>
</body>
</html>