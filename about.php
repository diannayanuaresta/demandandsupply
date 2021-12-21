<?php
require 'functions.php';
$data = query("SELECT * FROM history ORDER BY created_at DESC");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>D&S</title>
    <link rel="stylesheet" href="fontawesome/css/all.min.css"> <!-- https://fontawesome.com/ -->
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <!-- https://fonts.google.com/ -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/templatemo-xtra-blog.css" rel="stylesheet">
    <!--
    
TemplateMo 553 Xtra Blog

https://templatemo.com/tm-553-xtra-blog

-->
</head>

<body>
    <header class="tm-header" id="tm-header">
        <div class="tm-header-wrapper">
            <button class="navbar-toggler" type="button" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="tm-site-header">
                <div class="mb-3 mx-auto tm-site-logo"><i class="fas fa-times fa-2x"></i></div>
                <h1 class="text-center">Demand And Supply</h1>
            </div>
            <nav class="tm-nav" id="tm-nav">
                <ul>
                    <li class="tm-nav-item"><a href="index.html" class="tm-nav-link">
                            <i class="fas fa-home"></i>
                            Home
                        </a></li>
                    <li class="tm-nav-item"><a href="post.php" class="tm-nav-link">
                            <i class="fas fa-comments"></i>
                            Calculate
                        </a></li>
                    <li class="tm-nav-item active"><a href="about.php" class="tm-nav-link">
                            <i class="fas fa-users"></i>
                            History
                        </a></li>
                    <li class="tm-nav-item"><a href="contact.html" class="tm-nav-link">
                            <i class="fas fa-pen"></i>
                            Administrator
                        </a></li>
                </ul>
            </nav>
        </div>
    </header>
    <div class="container-fluid">
        <main class="tm-main">
            <div class="row tm-row">
                <?php foreach ($data as $dt) : ?>
                    <article class="col-12 col-md-6 tm-post">
                        <hr class="tm-hr-primary">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td><?= $dt['q1'] ?></td>
                                    <td><?= $dt['p1'] ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td><?= $dt['q2'] ?></td>
                                    <td><?= $dt['p2'] ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td><?= $dt['q3'] ?></td>
                                    <td><?= $dt['p3'] ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td><?= $dt['q4'] ?></td>
                                    <td><?= $dt['p4'] ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td><?= $dt['q5'] ?></td>
                                    <td><?= $dt['p5'] ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">∑</th>
                                    <?php $totP = (int)$dt['p1'] + (int)$dt['p2'] + (int)$dt['p3'] + (int)$dt['p4'] + (int)$dt['p5'] ?>
                                    <?php $totQ = (int)$dt['q1'] + (int)$dt['q2'] + (int)$dt['q3'] + (int)$dt['q4'] + (int)$dt['q5'] ?>
                                    <td><?= $totQ ?></td>
                                    <td><?= $totP ?></td>
                                </tr>
                            </tbody>
                        </table>
                        <p>
                            <?php $dP = (int)$dt['p2'] - (int)$dt['p1'] + (int)$dt['p3'] - (int)$dt['p2'] + (int)$dt['p4'] - (int)$dt['p3'] + (int)$dt['p5'] - (int)$dt['p4'] ?>
                            <?php $dQ = (int)$dt['q2'] - (int)$dt['q1'] + (int)$dt['q3'] - (int)$dt['q2'] + (int)$dt['q4'] - (int)$dt['q3'] + (int)$dt['q5'] - (int)$dt['q4'] ?>
                            <?php $elas = $dQ / $dP * $totP / $totQ ?>
                            ∑∆Q : ∑∆P x ∑P : ∑Q = <?= $elas ?>
                            <br>
                            Berdasarkan perhitungan data yang dimasukan memiliki tingkat elastisitas :
                            <?php if ($elas == 0) : ?>
                                <b>Inelastis Sempurna</b>
                            <?php endif; ?>
                            <?php if ($elas == 1) : ?>
                                <b>Elastis Uniter</b>
                            <?php endif; ?>
                            <?php if ($elas < 1) : ?>
                                <b>Inelastis</b>
                            <?php endif; ?>
                            <?php if ($elas > 1) : ?>
                                <b>Elastis</b>
                            <?php endif; ?>
                        </p>
                        <div class="d-flex justify-content-between tm-pt-45">
                            <span class="tm-color-primary"><a href="hapus.php?id=<?= $dt['id'] ?>">Hapus</a></span>
                            <span class="tm-color-primary"><?= $dt['created_at'] ?></span>
                        </div>

                        <hr>
                    </article>
                <?php endforeach; ?>
            </div>

            <footer class="row tm-row">
                <hr class="col-12">
                <div class="col-md-6 col-12 tm-color-gray">
                    Design: <a rel="nofollow" target="_parent" href="https://templatemo.com" class="tm-external-link">TemplateMo</a>
                </div>
                <div class="col-md-6 col-12 tm-color-gray tm-copyright">
                    Copyright 2020 Xtra Blog Company Co. Ltd.
                </div>
            </footer>
        </main>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/templatemo-script.js"></script>

</body>

</html>