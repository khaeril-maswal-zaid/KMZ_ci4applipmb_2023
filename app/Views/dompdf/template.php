<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title; ?></title>

    <!-- Bootstrap online core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <!-- Bootstrap Offline core CSS -->
    <!-- <link href="/css/bootstrap.min.css" rel="stylesheet"> -->

    <style>
        hr.kop-kartupeserta {
            opacity: 1;
            width: 89%;
        }

        table.table-bordered,
        table.table-bordered th,
        table.table-bordered td {
            border: 1px solid;
        }
    </style>
</head>

<body>

    <?= $this->renderSection('viewpdf'); ?>

    <!-- Optional JavaScript; -->
    <script src="/js/bootstrap.bundle.min.js"></script>
</body>

</html>