<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">

    <title><?= $title ?></title>

    <link rel="icon" href="/img/assets/umb.png" />

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- styles for this Bootstrap -->
    <link href="/css/dashboard.css" rel="stylesheet">
    <link href="/css/sidebars.css" rel="stylesheet">
    <link href="/css/signin.css" rel="stylesheet">
    <link href="/css/carousel.css" rel="stylesheet">

    <!-- styles for Data Table -->
    <link rel="stylesheet" type="text/css" href="/css/dataTables.bootstrap5.min.css" />
    <link rel="stylesheet" type="text/css" href="/css/buttons.bootstrap5.min.css" />

    <!-- Pie diagram chart -->
    <link href="/css/piediagramchart.css" rel="stylesheet">

    <!-- styles manual ADMIN -->
    <link href="/css/styleadmin.css" rel="stylesheet">

    <!-- styles manual ADMIN -->
    <link href="/css/stylehome.css" rel="stylesheet">

    <!-- Google Console-->
    <meta name="google-site-verification" content="aDJyPoFmHutkY2DwZ9V4nyO2WYzPTFbFHO0NW44qe2U" />

    <!-- Global site tag (gtag.js) - Google Analytics TERBARU 07/05/2022 -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-WRQRTC2F1T"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-WRQRTC2F1T');
    </script>

    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3151537190694448" crossorigin="anonymous"></script>

</head>

<body class="<?= $classbody ?>">

    <?= $this->include($templatelayout[0]); ?>
    <?= $this->renderSection('content'); ?>
    <?= $this->include($templatelayout[1]); ?>


    <!-- Javascript for jQuery; -->
    <script type="text/javascript" src="/js/jquery-3.6.0.min.js"></script>

    <!-- Optional JavaScript; -->
    <script src="/js/bootstrap.bundle.min.js"></script>

    <!-- JavaScript for Bootstrap fitur-->
    <script src="/js/feather.min.js"></script>
    <script src="/js/dashboard.js"></script>
    <script src="/js/sidebars.js"></script>

    <!-- JavaScript for Data table -->

    <script type="text/javascript" src="/js/jszip.min.js"></script>
    <script type="text/javascript" src="/js/pdfmake.min.js"></script>
    <script type="text/javascript" src="/js/vfs_fonts.js"></script>
    <script type="text/javascript" src="/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="/js/dataTables.bootstrap5.min.js"></script>
    <script type="text/javascript" src="/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="/js/buttons.bootstrap5.min.js"></script>
    <script type="text/javascript" src="/js/buttons.html5.min.js"></script>
    <script type="text/javascript" src="/js/buttons.print.min.js"></script>

    <script src="/js/script-admin.js"></script>
    <script src="/js/script-home.js"></script>

</body>

</html>