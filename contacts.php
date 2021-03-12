<?php require_once "app/config.php" ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php require_once "templates/head.php" ?>

    <title><?php echo $lang['contact'] ?></title>
</head>

<body>

    <?php require_once "templates/header.php" ?>

    <!--Navigator start-->
    <div class="breadcrumb">
        <div class="container pt-3 pb-3 w-75">
            <div class="row">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php"><?php echo $lang['home'] ?></a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?php echo $lang['contact'] ?></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!--Navigator end-->

    <!--Contact start-->

    <section>
        <div class="contact-us">
            <div class="container">
                <div class="banner w-100">
                    <h1 class="text-center"> <?php echo $contact['mText'] ?></h1>
                </div>
                <div class="information">
                    <div class="row text-center">
                        <div class="col-12 col-lg-4">
                            <h2><?php echo $contact['adr'] ?></h2>
                            <p>KhCar Shop,
                            <?php echo $lang['fstorep1'] ?>,
                            <?php echo $lang['fstorep2'] ?>
                        </p>
                        </div>
                        <div class="col-12 col-lg-4">
                            <h2> <?php echo $contact['tel'] ?></h2>
                            <p>
                                <a href="tel:+380 99 244 3242">+380 99 244 3242</a>
                            </p>
                        </div>
                        <div class="col-12 col-lg-4 mail">
                            <h2><?php echo $contact['mail'] ?></h2>
                            <p>
                                <a href="mailto:makzzubko66@email.com">makzzubko66@gmail.com</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d381.08366221577836!2d36.21455010550945!3d50.01856938650885!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4127a13d692e0ae7%3A0xf30e0ec6d9867d6a!2zSFlVTkRBSSDQkNCy0YLQvtGC0YDQtdC50LTRltC90LMgLSDQpdCw0YDQutGW0LIgfCDQvtGE0ZbRhtGW0LnQvdC40Lkg0LTQuNC70LXRgA!5e0!3m2!1sru!2sua!4v1615413086477!5m2!1sru!2sua" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </section>
    <!--contact-end-->

    <?php require_once "templates/footer.php" ?>
    <?php require_once "templates/scripts.php" ?>
</body>

</html>