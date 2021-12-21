<?php
require 'functions.php';

if (isset($_POST['kirimData'])) {
    if (insertData($_POST) > 0) {
        echo "
        <script>
        alert('Data telah ditambahkan !');
        </script>
        ";
    } else {
        echo "
        <script>
        alert('Data gagal ditambahkan !');
        </script>
        ";
    }
}
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
                    <li class="tm-nav-item active"><a href="post.php" class="tm-nav-link">
                            <i class="fas fa-comments"></i>
                            Calculate
                        </a></li>
                    <li class="tm-nav-item"><a href="about.php" class="tm-nav-link">
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
            <!-- Search form -->
            <div class="row tm-row">
                <div class="col-12">
                </div>
            </div>
            <div class="row tm-row">
                <div class="col-lg-8 tm-post-col">
                    <div class="tm-post-full">
                        <!-- Comments -->
                        <div>
                            <h2 class="tm-color-primary tm-post-title">Tabel Data</h2>
                            <hr class="tm-hr-primary tm-mb-45">
                            <div class="tm-comment tm-mb-45">
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
                                            <td id="qVal1">0</td>
                                            <td id="pVal1">0</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td id="qVal2">0</td>
                                            <td id="pVal2">0</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td id="qVal3">0</td>
                                            <td id="pVal3">0</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">4</th>
                                            <td id="qVal4">0</td>
                                            <td id="pVal4">0</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">5</th>
                                            <td id="qVal5">0</td>
                                            <td id="pVal5">0</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">∑</th>
                                            <td id="qTot">0</td>
                                            <td id="pTot">0</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="mb-4" id="areaChart">
                            <h2 class="pt-2 tm-color-primary tm-post-title">Kurva sesuai data yang diinputkan</h2>
                            <p class="tm-mb-40">June 16, 2020 posted by Admin Nat</p>
                            <canvas id="myChart" width="400" height="400"></canvas>
                            <span class="d-block text-right tm-color-primary">Creative . Design . Business</span>
                        </div>
                    </div>
                </div>
                <aside class="col-lg-4 tm-aside-col">
                    <form action="" class="mb-5 tm-comment-form" method="post">
                        <h2 class="tm-color-primary tm-post-title mb-4">Input Data</h2>
                        <div class="mb-4">
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="processType" id="processType1" value="penawaran" checked>
                                        <label class="form-check-label" for="processType1">
                                            Penawaran
                                        </label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="processType" id="processType2" value="permintaan">
                                        <label class="form-check-label" for="processType2">
                                            Permintaan
                                        </label>
                                    </div>
                                </div>
                                <div class="col-6 mt-2">
                                    <label>Q1</label>
                                    <input class="form-control" name="inputQ1" type="number" value="0" max="" id="inputQ1">
                                </div>
                                <div class="col-6  mt-2">
                                    <label>P1</label>
                                    <input class="form-control" name="inputP1" type="number" value="0" max="" id="inputP1">
                                </div>
                            </div>
                        </div>
                        <div class="mb-4">
                            <div class="row">
                                <div class="col-6">
                                    <label>Q2</label>
                                    <input class="form-control" name="inputQ2" type="number" value="0" max="" id="inputQ2">
                                </div>
                                <div class="col-6">
                                    <label>P2</label>
                                    <input class="form-control" name="inputP2" type="number" value="0" max="" id="inputP2">
                                </div>
                            </div>
                        </div>
                        <div class="mb-4">
                            <div class="row">
                                <div class="col-6">
                                    <label>Q3</label>
                                    <input class="form-control" name="inputQ3" type="number" value="0" max="" id="inputQ3">
                                </div>
                                <div class="col-6">
                                    <label>P3</label>
                                    <input class="form-control" name="inputP3" type="number" value="0" max="" id="inputP3">
                                </div>
                            </div>
                        </div>
                        <div class="mb-4">
                            <div class="row">
                                <div class="col-6">
                                    <label>Q4</label>
                                    <input class="form-control" name="inputQ4" type="number" value="0" max="" id="inputQ4">
                                </div>
                                <div class="col-6">
                                    <label>P4</label>
                                    <input class="form-control" name="inputP4" type="number" value="0" max="" id="inputP4">
                                </div>
                            </div>
                        </div>
                        <div class="mb-4">
                            <div class="row">
                                <div class="col-6">
                                    <label>Q5</label>
                                    <input class="form-control" name="inputQ5" type="number" value="0" max="" id="inputQ5">
                                </div>
                                <div class="col-6">
                                    <label>P5</label>
                                    <input class="form-control" name="inputP5" type="number" value="0" max="" id="inputP5">
                                </div>
                            </div>
                        </div>
                        <button class="tm-btn tm-btn-primary tm-btn-small" type="submit" name="kirimData">Submit</button>
                    </form>

                    <div class="tm-comment-reply tm-mb-45">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">∆Q</th>
                                    <th scope="col">∆P</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td id="dQ1">0</td>
                                    <td id="dP1">0</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td id="dQ2">0</td>
                                    <td id="dP2">0</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td id="dQ3">0</td>
                                    <td id="dP3">0</td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td id="dQ4">0</td>
                                    <td id="dP4">0</td>
                                </tr>
                                <tr>
                                    <th scope="row">∑</th>
                                    <td id="dQtot">0</td>
                                    <td id="dPtot">0</td>
                                </tr>
                            </tbody>
                        </table>
                        <hr>
                        <p>∑∆Q : ∑∆P x ∑P : ∑Q =
                            <b><span id="elastisitasVal"></span></b>
                        </p>
                        <p>
                            Berdasarkan perhitungan data yang dimasukan memiliki tingkat elastisitas :
                            <b id="result"></b>
                        </p>
                    </div>
                </aside>
            </div>
            <footer class="row tm-row">
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
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="path/to/chartjs/dist/chart.js"></script>
    <script>
        var inputP1 = parseInt($('#inputP1').val());
        var inputP2 = parseInt($('#inputP2').val());
        var inputP3 = parseInt($('#inputP3').val());
        var inputP4 = parseInt($('#inputP4').val());
        var inputP5 = parseInt($('#inputP5').val());
        var inputQ1 = parseInt($('#inputQ1').val());
        var inputQ2 = parseInt($('#inputQ2').val());
        var inputQ3 = parseInt($('#inputQ3').val());
        var inputQ4 = parseInt($('#inputQ4').val());
        var inputQ5 = parseInt($('#inputQ5').val());



        $('#inputP1').on('mouseout', function() {
            inputP1 = $('#inputP1').val();
            inputP2 = $('#inputP2').val();
            inputP3 = $('#inputP3').val();
            inputP4 = $('#inputP4').val();
            inputP5 = $('#inputP5').val();
            $('#pVal1').html(inputP1);
            inputQ1 = $('#inputQ1').val();
            inputQ2 = $('#inputQ2').val();
            inputQ3 = $('#inputQ3').val();
            inputQ4 = $('#inputQ4').val();
            inputQ5 = $('#inputQ5').val();
            var ptot = parseInt(inputP1) + parseInt(inputP2) + parseInt(inputP3) + parseInt(inputP4) + parseInt(inputP5)
            $('#pTot').html(ptot);
            var qtot = parseInt(inputQ1) + parseInt(inputQ2) + parseInt(inputQ3) + parseInt(inputQ4) + parseInt(inputQ5)
            $('#qTot').html(qtot);
            var dp1 = parseInt(inputP2) - parseInt(inputP1);
            var dp2 = parseInt(inputP3) - parseInt(inputP2);
            var dp3 = parseInt(inputP4) - parseInt(inputP3);
            var dp4 = parseInt(inputP5) - parseInt(inputP4);
            var dptot = dp1 + dp2 + dp3 + dp4;
            $('#dP1').html(dp1);
            $('#dP2').html(dp2);
            $('#dP3').html(dp3);
            $('#dP4').html(dp4);
            $('#dPtot').html(dptot);
            var dq1 = parseInt(inputQ2) - parseInt(inputQ1);
            var dq2 = parseInt(inputQ3) - parseInt(inputQ2);
            var dq3 = parseInt(inputQ4) - parseInt(inputQ3);
            var dq4 = parseInt(inputQ5) - parseInt(inputQ4);
            var dqtot = dq1 + dq2 + dq3 + dq4;
            $('#dQ1').html(dq1);
            $('#dQ2').html(dq2);
            $('#dQ3').html(dq3);
            $('#dQ4').html(dq4);
            $('#dQtot').html(dqtot);
            var elastisitas = parseInt(dqtot) / parseInt(dptot) * parseInt(ptot) / parseInt(qtot);
            $('#elastisitasVal').html(elastisitas);
            if (elastisitas == 0) {
                $('#result').html('Inelastis Sempurna');
            } else if (elastisitas == 1) {
                $('#result').html('Elastis Uniter');
            } else if (elastisitas < 1) {
                $('#result').html('Inelastis');
            } else if (elastisitas > 1) {
                $('#result').html('Elastis');
            } else {
                $('#result').html('Elastis Sempurna');
            }

            $('#areaChart').mouseover(function() {
                const ctx = document.getElementById('myChart');
                const myChart = new Chart(ctx, {
                    type: 'line',

                    data: {
                        labels: [inputQ1, inputQ2, inputQ3, inputQ4, inputQ5],
                        datasets: [{
                            label: '# of Votes',
                            data: [inputP1, inputP2, inputP3, inputP4, inputP5],
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(255, 159, 64, 0.2)'
                            ],
                            borderColor: [
                                'rgba(255, 99, 132, 1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 159, 64, 1)'
                            ],
                            borderWidth: 1
                        }],
                    },

                    options: {
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });
            })
        })
        $('#inputQ1').on('mouseout', function() {
            inputQ1 = $('#inputQ1').val();
            inputQ2 = $('#inputQ2').val();
            inputQ3 = $('#inputQ3').val();
            inputQ4 = $('#inputQ4').val();
            inputQ5 = $('#inputQ5').val();
            $('#qVal1').html(inputQ1);
            inputP1 = $('#inputP1').val();
            inputP2 = $('#inputP2').val();
            inputP3 = $('#inputP3').val();
            inputP4 = $('#inputP4').val();
            inputP5 = $('#inputP5').val();
            var ptot = parseInt(inputP1) + parseInt(inputP2) + parseInt(inputP3) + parseInt(inputP4) + parseInt(inputP5)
            $('#pTot').html(ptot);
            var qtot = parseInt(inputQ1) + parseInt(inputQ2) + parseInt(inputQ3) + parseInt(inputQ4) + parseInt(inputQ5)
            $('#qTot').html(qtot);
            var dp1 = parseInt(inputP2) - parseInt(inputP1);
            var dp2 = parseInt(inputP3) - parseInt(inputP2);
            var dp3 = parseInt(inputP4) - parseInt(inputP3);
            var dp4 = parseInt(inputP5) - parseInt(inputP4);
            var dptot = dp1 + dp2 + dp3 + dp4;
            $('#dP1').html(dp1);
            $('#dP2').html(dp2);
            $('#dP3').html(dp3);
            $('#dP4').html(dp4);
            $('#dPtot').html(dptot);
            var dq1 = parseInt(inputQ2) - parseInt(inputQ1);
            var dq2 = parseInt(inputQ3) - parseInt(inputQ2);
            var dq3 = parseInt(inputQ4) - parseInt(inputQ3);
            var dq4 = parseInt(inputQ5) - parseInt(inputQ4);
            var dqtot = dq1 + dq2 + dq3 + dq4;
            $('#dQ1').html(dq1);
            $('#dQ2').html(dq2);
            $('#dQ3').html(dq3);
            $('#dQ4').html(dq4);
            $('#dQtot').html(dqtot);
            var elastisitas = parseInt(dqtot) / parseInt(dptot) * parseInt(ptot) / parseInt(qtot);
            $('#elastisitasVal').html(elastisitas);
            if (elastisitas == 0) {
                $('#result').html('Inelastis Sempurna');
            } else if (elastisitas == 1) {
                $('#result').html('Elastis Uniter');
            } else if (elastisitas < 1) {
                $('#result').html('Inelastis');
            } else if (elastisitas > 1) {
                $('#result').html('Elastis');
            } else {
                $('#result').html('Elastis Sempurna');
            }

            $('#areaChart').mouseover(function() {
                const ctx = document.getElementById('myChart');
                const myChart = new Chart(ctx, {
                    type: 'line',

                    data: {
                        labels: [inputQ1, inputQ2, inputQ3, inputQ4, inputQ5],
                        datasets: [{
                            label: '# of Votes',
                            data: [inputP1, inputP2, inputP3, inputP4, inputP5],
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(255, 159, 64, 0.2)'
                            ],
                            borderColor: [
                                'rgba(255, 99, 132, 1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 159, 64, 1)'
                            ],
                            borderWidth: 1
                        }],
                    },

                    options: {
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });
            })
        })

        $('#inputP2').on('mouseout', function() {
            inputP1 = $('#inputP1').val();
            inputP2 = $('#inputP2').val();
            inputP3 = $('#inputP3').val();
            inputP4 = $('#inputP4').val();
            inputP5 = $('#inputP5').val();
            $('#pVal2').html(inputP2);
            inputQ1 = $('#inputQ1').val();
            inputQ2 = $('#inputQ2').val();
            inputQ3 = $('#inputQ3').val();
            inputQ4 = $('#inputQ4').val();
            inputQ5 = $('#inputQ5').val();
            var ptot = parseInt(inputP1) + parseInt(inputP2) + parseInt(inputP3) + parseInt(inputP4) + parseInt(inputP5)
            $('#pTot').html(ptot);
            var qtot = parseInt(inputQ1) + parseInt(inputQ2) + parseInt(inputQ3) + parseInt(inputQ4) + parseInt(inputQ5)
            $('#qTot').html(qtot);
            var dp1 = parseInt(inputP2) - parseInt(inputP1);
            var dp2 = parseInt(inputP3) - parseInt(inputP2);
            var dp3 = parseInt(inputP4) - parseInt(inputP3);
            var dp4 = parseInt(inputP5) - parseInt(inputP4);
            var dptot = dp1 + dp2 + dp3 + dp4;
            $('#dP1').html(dp1);
            $('#dP2').html(dp2);
            $('#dP3').html(dp3);
            $('#dP4').html(dp4);
            $('#dPtot').html(dptot);
            var dq1 = parseInt(inputQ2) - parseInt(inputQ1);
            var dq2 = parseInt(inputQ3) - parseInt(inputQ2);
            var dq3 = parseInt(inputQ4) - parseInt(inputQ3);
            var dq4 = parseInt(inputQ5) - parseInt(inputQ4);
            var dqtot = dq1 + dq2 + dq3 + dq4;
            $('#dQ1').html(dq1);
            $('#dQ2').html(dq2);
            $('#dQ3').html(dq3);
            $('#dQ4').html(dq4);
            $('#dQtot').html(dqtot);
            var elastisitas = parseInt(dqtot) / parseInt(dptot) * parseInt(ptot) / parseInt(qtot);
            $('#elastisitasVal').html(elastisitas);
            if (elastisitas == 0) {
                $('#result').html('Inelastis Sempurna');
            } else if (elastisitas == 1) {
                $('#result').html('Elastis Uniter');
            } else if (elastisitas < 1) {
                $('#result').html('Inelastis');
            } else if (elastisitas > 1) {
                $('#result').html('Elastis');
            } else {
                $('#result').html('Elastis Sempurna');
            }

            $('#areaChart').mouseover(function() {
                const ctx = document.getElementById('myChart');
                const myChart = new Chart(ctx, {
                    type: 'line',

                    data: {
                        labels: [inputQ1, inputQ2, inputQ3, inputQ4, inputQ5],
                        datasets: [{
                            label: '# of Votes',
                            data: [inputP1, inputP2, inputP3, inputP4, inputP5],
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(255, 159, 64, 0.2)'
                            ],
                            borderColor: [
                                'rgba(255, 99, 132, 1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 159, 64, 1)'
                            ],
                            borderWidth: 1
                        }],
                    },

                    options: {
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });
            })
        })
        $('#inputQ2').on('mouseout', function() {
            inputQ1 = $('#inputQ1').val();
            inputQ2 = $('#inputQ2').val();
            inputQ3 = $('#inputQ3').val();
            inputQ4 = $('#inputQ4').val();
            inputQ5 = $('#inputQ5').val();
            $('#qVal2').html(inputQ2);
            inputP1 = $('#inputP1').val();
            inputP2 = $('#inputP2').val();
            inputP3 = $('#inputP3').val();
            inputP4 = $('#inputP4').val();
            inputP5 = $('#inputP5').val();
            var ptot = parseInt(inputP1) + parseInt(inputP2) + parseInt(inputP3) + parseInt(inputP4) + parseInt(inputP5)
            $('#pTot').html(ptot);
            var qtot = parseInt(inputQ1) + parseInt(inputQ2) + parseInt(inputQ3) + parseInt(inputQ4) + parseInt(inputQ5)
            $('#qTot').html(qtot);
            var dp1 = parseInt(inputP2) - parseInt(inputP1);
            var dp2 = parseInt(inputP3) - parseInt(inputP2);
            var dp3 = parseInt(inputP4) - parseInt(inputP3);
            var dp4 = parseInt(inputP5) - parseInt(inputP4);
            var dptot = dp1 + dp2 + dp3 + dp4;
            $('#dP1').html(dp1);
            $('#dP2').html(dp2);
            $('#dP3').html(dp3);
            $('#dP4').html(dp4);
            $('#dPtot').html(dptot);
            var dq1 = parseInt(inputQ2) - parseInt(inputQ1);
            var dq2 = parseInt(inputQ3) - parseInt(inputQ2);
            var dq3 = parseInt(inputQ4) - parseInt(inputQ3);
            var dq4 = parseInt(inputQ5) - parseInt(inputQ4);
            var dqtot = dq1 + dq2 + dq3 + dq4;
            $('#dQ1').html(dq1);
            $('#dQ2').html(dq2);
            $('#dQ3').html(dq3);
            $('#dQ4').html(dq4);
            $('#dQtot').html(dqtot);
            var elastisitas = parseInt(dqtot) / parseInt(dptot) * parseInt(ptot) / parseInt(qtot);
            $('#elastisitasVal').html(elastisitas);
            if (elastisitas == 0) {
                $('#result').html('Inelastis Sempurna');
            } else if (elastisitas == 1) {
                $('#result').html('Elastis Uniter');
            } else if (elastisitas < 1) {
                $('#result').html('Inelastis');
            } else if (elastisitas > 1) {
                $('#result').html('Elastis');
            } else {
                $('#result').html('Elastis Sempurna');
            }

            $('#areaChart').mouseover(function() {
                const ctx = document.getElementById('myChart');
                const myChart = new Chart(ctx, {
                    type: 'line',

                    data: {
                        labels: [inputQ1, inputQ2, inputQ3, inputQ4, inputQ5],
                        datasets: [{
                            label: '# of Votes',
                            data: [inputP1, inputP2, inputP3, inputP4, inputP5],
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(255, 159, 64, 0.2)'
                            ],
                            borderColor: [
                                'rgba(255, 99, 132, 1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 159, 64, 1)'
                            ],
                            borderWidth: 1
                        }],
                    },

                    options: {
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });
            })
        })

        $('#inputP3').on('mouseout', function() {
            inputP1 = $('#inputP1').val();
            inputP2 = $('#inputP2').val();
            inputP3 = $('#inputP3').val();
            inputP4 = $('#inputP4').val();
            inputP5 = $('#inputP5').val();
            $('#pVal3').html(inputP3);
            inputQ1 = $('#inputQ1').val();
            inputQ2 = $('#inputQ2').val();
            inputQ3 = $('#inputQ3').val();
            inputQ4 = $('#inputQ4').val();
            inputQ5 = $('#inputQ5').val();
            var ptot = parseInt(inputP1) + parseInt(inputP2) + parseInt(inputP3) + parseInt(inputP4) + parseInt(inputP5)
            $('#pTot').html(ptot);
            var qtot = parseInt(inputQ1) + parseInt(inputQ2) + parseInt(inputQ3) + parseInt(inputQ4) + parseInt(inputQ5)
            $('#qTot').html(qtot);
            var dp1 = parseInt(inputP2) - parseInt(inputP1);
            var dp2 = parseInt(inputP3) - parseInt(inputP2);
            var dp3 = parseInt(inputP4) - parseInt(inputP3);
            var dp4 = parseInt(inputP5) - parseInt(inputP4);
            var dptot = dp1 + dp2 + dp3 + dp4;
            $('#dP1').html(dp1);
            $('#dP2').html(dp2);
            $('#dP3').html(dp3);
            $('#dP4').html(dp4);
            $('#dPtot').html(dptot);
            var dq1 = parseInt(inputQ2) - parseInt(inputQ1);
            var dq2 = parseInt(inputQ3) - parseInt(inputQ2);
            var dq3 = parseInt(inputQ4) - parseInt(inputQ3);
            var dq4 = parseInt(inputQ5) - parseInt(inputQ4);
            var dqtot = dq1 + dq2 + dq3 + dq4;
            $('#dQ1').html(dq1);
            $('#dQ2').html(dq2);
            $('#dQ3').html(dq3);
            $('#dQ4').html(dq4);
            $('#dQtot').html(dqtot);
            var elastisitas = parseInt(dqtot) / parseInt(dptot) * parseInt(ptot) / parseInt(qtot);
            $('#elastisitasVal').html(elastisitas);
            if (elastisitas == 0) {
                $('#result').html('Inelastis Sempurna');
            } else if (elastisitas == 1) {
                $('#result').html('Elastis Uniter');
            } else if (elastisitas < 1) {
                $('#result').html('Inelastis');
            } else if (elastisitas > 1) {
                $('#result').html('Elastis');
            } else {
                $('#result').html('Elastis Sempurna');
            }

            $('#areaChart').mouseover(function() {
                const ctx = document.getElementById('myChart');
                const myChart = new Chart(ctx, {
                    type: 'line',

                    data: {
                        labels: [inputQ1, inputQ2, inputQ3, inputQ4, inputQ5],
                        datasets: [{
                            label: '# of Votes',
                            data: [inputP1, inputP2, inputP3, inputP4, inputP5],
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(255, 159, 64, 0.2)'
                            ],
                            borderColor: [
                                'rgba(255, 99, 132, 1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 159, 64, 1)'
                            ],
                            borderWidth: 1
                        }],
                    },

                    options: {
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });
            })
        })
        $('#inputQ3').on('mouseout', function() {
            inputQ1 = $('#inputQ1').val();
            inputQ2 = $('#inputQ2').val();
            inputQ3 = $('#inputQ3').val();
            inputQ4 = $('#inputQ4').val();
            inputQ5 = $('#inputQ5').val();
            $('#qVal3').html(inputQ3);
            inputP1 = $('#inputP1').val();
            inputP2 = $('#inputP2').val();
            inputP3 = $('#inputP3').val();
            inputP4 = $('#inputP4').val();
            inputP5 = $('#inputP5').val();
            var ptot = parseInt(inputP1) + parseInt(inputP2) + parseInt(inputP3) + parseInt(inputP4) + parseInt(inputP5)
            $('#pTot').html(ptot);
            var qtot = parseInt(inputQ1) + parseInt(inputQ2) + parseInt(inputQ3) + parseInt(inputQ4) + parseInt(inputQ5)
            $('#qTot').html(qtot);
            var dp1 = parseInt(inputP2) - parseInt(inputP1);
            var dp2 = parseInt(inputP3) - parseInt(inputP2);
            var dp3 = parseInt(inputP4) - parseInt(inputP3);
            var dp4 = parseInt(inputP5) - parseInt(inputP4);
            var dptot = dp1 + dp2 + dp3 + dp4;
            $('#dP1').html(dp1);
            $('#dP2').html(dp2);
            $('#dP3').html(dp3);
            $('#dP4').html(dp4);
            $('#dPtot').html(dptot);
            var dq1 = parseInt(inputQ2) - parseInt(inputQ1);
            var dq2 = parseInt(inputQ3) - parseInt(inputQ2);
            var dq3 = parseInt(inputQ4) - parseInt(inputQ3);
            var dq4 = parseInt(inputQ5) - parseInt(inputQ4);
            var dqtot = dq1 + dq2 + dq3 + dq4;
            $('#dQ1').html(dq1);
            $('#dQ2').html(dq2);
            $('#dQ3').html(dq3);
            $('#dQ4').html(dq4);
            $('#dQtot').html(dqtot);
            var elastisitas = parseInt(dqtot) / parseInt(dptot) * parseInt(ptot) / parseInt(qtot);
            $('#elastisitasVal').html(elastisitas);
            if (elastisitas == 0) {
                $('#result').html('Inelastis Sempurna');
            } else if (elastisitas == 1) {
                $('#result').html('Elastis Uniter');
            } else if (elastisitas < 1) {
                $('#result').html('Inelastis');
            } else if (elastisitas > 1) {
                $('#result').html('Elastis');
            } else {
                $('#result').html('Elastis Sempurna');
            }

            $('#areaChart').mouseover(function() {
                const ctx = document.getElementById('myChart');
                const myChart = new Chart(ctx, {
                    type: 'line',

                    data: {
                        labels: [inputQ1, inputQ2, inputQ3, inputQ4, inputQ5],
                        datasets: [{
                            label: '# of Votes',
                            data: [inputP1, inputP2, inputP3, inputP4, inputP5],
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(255, 159, 64, 0.2)'
                            ],
                            borderColor: [
                                'rgba(255, 99, 132, 1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 159, 64, 1)'
                            ],
                            borderWidth: 1
                        }],
                    },

                    options: {
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });
            })
        })

        $('#inputP4').on('mouseout', function() {
            inputP1 = $('#inputP1').val();
            inputP2 = $('#inputP2').val();
            inputP3 = $('#inputP3').val();
            inputP4 = $('#inputP4').val();
            inputP5 = $('#inputP5').val();
            $('#pVal4').html(inputP4);
            inputQ1 = $('#inputQ1').val();
            inputQ2 = $('#inputQ2').val();
            inputQ3 = $('#inputQ3').val();
            inputQ4 = $('#inputQ4').val();
            inputQ5 = $('#inputQ5').val();
            var ptot = parseInt(inputP1) + parseInt(inputP2) + parseInt(inputP3) + parseInt(inputP4) + parseInt(inputP5)
            $('#pTot').html(ptot);
            var qtot = parseInt(inputQ1) + parseInt(inputQ2) + parseInt(inputQ3) + parseInt(inputQ4) + parseInt(inputQ5)
            $('#qTot').html(qtot);
            var dp1 = parseInt(inputP2) - parseInt(inputP1);
            var dp2 = parseInt(inputP3) - parseInt(inputP2);
            var dp3 = parseInt(inputP4) - parseInt(inputP3);
            var dp4 = parseInt(inputP5) - parseInt(inputP4);
            var dptot = dp1 + dp2 + dp3 + dp4;
            $('#dP1').html(dp1);
            $('#dP2').html(dp2);
            $('#dP3').html(dp3);
            $('#dP4').html(dp4);
            $('#dPtot').html(dptot);
            var dq1 = parseInt(inputQ2) - parseInt(inputQ1);
            var dq2 = parseInt(inputQ3) - parseInt(inputQ2);
            var dq3 = parseInt(inputQ4) - parseInt(inputQ3);
            var dq4 = parseInt(inputQ5) - parseInt(inputQ4);
            var dqtot = dq1 + dq2 + dq3 + dq4;
            $('#dQ1').html(dq1);
            $('#dQ2').html(dq2);
            $('#dQ3').html(dq3);
            $('#dQ4').html(dq4);
            $('#dQtot').html(dqtot);
            var elastisitas = parseInt(dqtot) / parseInt(dptot) * parseInt(ptot) / parseInt(qtot);
            $('#elastisitasVal').html(elastisitas);
            if (elastisitas == 0) {
                $('#result').html('Inelastis Sempurna');
            } else if (elastisitas == 1) {
                $('#result').html('Elastis Uniter');
            } else if (elastisitas < 1) {
                $('#result').html('Inelastis');
            } else if (elastisitas > 1) {
                $('#result').html('Elastis');
            } else {
                $('#result').html('Elastis Sempurna');
            }

            $('#areaChart').mouseover(function() {
                const ctx = document.getElementById('myChart');
                const myChart = new Chart(ctx, {
                    type: 'line',

                    data: {
                        labels: [inputQ1, inputQ2, inputQ3, inputQ4, inputQ5],
                        datasets: [{
                            label: '# of Votes',
                            data: [inputP1, inputP2, inputP3, inputP4, inputP5],
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(255, 159, 64, 0.2)'
                            ],
                            borderColor: [
                                'rgba(255, 99, 132, 1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 159, 64, 1)'
                            ],
                            borderWidth: 1
                        }],
                    },

                    options: {
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });
            })
        })
        $('#inputQ4').on('mouseout', function() {
            inputQ1 = $('#inputQ1').val();
            inputQ2 = $('#inputQ2').val();
            inputQ3 = $('#inputQ3').val();
            inputQ4 = $('#inputQ4').val();
            inputQ5 = $('#inputQ5').val();
            $('#qVal4').html(inputQ4);
            inputP1 = $('#inputP1').val();
            inputP2 = $('#inputP2').val();
            inputP3 = $('#inputP3').val();
            inputP4 = $('#inputP4').val();
            inputP5 = $('#inputP5').val();
            var ptot = parseInt(inputP1) + parseInt(inputP2) + parseInt(inputP3) + parseInt(inputP4) + parseInt(inputP5)
            $('#pTot').html(ptot);
            var qtot = parseInt(inputQ1) + parseInt(inputQ2) + parseInt(inputQ3) + parseInt(inputQ4) + parseInt(inputQ5)
            $('#qTot').html(qtot);
            var dp1 = parseInt(inputP2) - parseInt(inputP1);
            var dp2 = parseInt(inputP3) - parseInt(inputP2);
            var dp3 = parseInt(inputP4) - parseInt(inputP3);
            var dp4 = parseInt(inputP5) - parseInt(inputP4);
            var dptot = dp1 + dp2 + dp3 + dp4;
            $('#dP1').html(dp1);
            $('#dP2').html(dp2);
            $('#dP3').html(dp3);
            $('#dP4').html(dp4);
            $('#dPtot').html(dptot);
            var dq1 = parseInt(inputQ2) - parseInt(inputQ1);
            var dq2 = parseInt(inputQ3) - parseInt(inputQ2);
            var dq3 = parseInt(inputQ4) - parseInt(inputQ3);
            var dq4 = parseInt(inputQ5) - parseInt(inputQ4);
            var dqtot = dq1 + dq2 + dq3 + dq4;
            $('#dQ1').html(dq1);
            $('#dQ2').html(dq2);
            $('#dQ3').html(dq3);
            $('#dQ4').html(dq4);
            $('#dQtot').html(dqtot);
            var elastisitas = parseInt(dqtot) / parseInt(dptot) * parseInt(ptot) / parseInt(qtot);
            $('#elastisitasVal').html(elastisitas);
            if (elastisitas == 0) {
                $('#result').html('Inelastis Sempurna');
            } else if (elastisitas == 1) {
                $('#result').html('Elastis Uniter');
            } else if (elastisitas < 1) {
                $('#result').html('Inelastis');
            } else if (elastisitas > 1) {
                $('#result').html('Elastis');
            } else {
                $('#result').html('Elastis Sempurna');
            }

            $('#areaChart').mouseover(function() {
                const ctx = document.getElementById('myChart');
                const myChart = new Chart(ctx, {
                    type: 'line',

                    data: {
                        labels: [inputQ1, inputQ2, inputQ3, inputQ4, inputQ5],
                        datasets: [{
                            label: '# of Votes',
                            data: [inputP1, inputP2, inputP3, inputP4, inputP5],
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(255, 159, 64, 0.2)'
                            ],
                            borderColor: [
                                'rgba(255, 99, 132, 1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 159, 64, 1)'
                            ],
                            borderWidth: 1
                        }],
                    },

                    options: {
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });
            })
        })

        $('#inputP5').on('mouseout', function() {
            inputP1 = $('#inputP1').val();
            inputP2 = $('#inputP2').val();
            inputP3 = $('#inputP3').val();
            inputP4 = $('#inputP4').val();
            inputP5 = $('#inputP5').val();
            $('#pVal5').html(inputP5);
            inputQ1 = $('#inputQ1').val();
            inputQ2 = $('#inputQ2').val();
            inputQ3 = $('#inputQ3').val();
            inputQ4 = $('#inputQ4').val();
            inputQ5 = $('#inputQ5').val();
            var ptot = parseInt(inputP1) + parseInt(inputP2) + parseInt(inputP3) + parseInt(inputP4) + parseInt(inputP5)
            $('#pTot').html(ptot);
            var qtot = parseInt(inputQ1) + parseInt(inputQ2) + parseInt(inputQ3) + parseInt(inputQ4) + parseInt(inputQ5)
            $('#qTot').html(qtot);
            var dp1 = parseInt(inputP2) - parseInt(inputP1);
            var dp2 = parseInt(inputP3) - parseInt(inputP2);
            var dp3 = parseInt(inputP4) - parseInt(inputP3);
            var dp4 = parseInt(inputP5) - parseInt(inputP4);
            var dptot = dp1 + dp2 + dp3 + dp4;
            $('#dP1').html(dp1);
            $('#dP2').html(dp2);
            $('#dP3').html(dp3);
            $('#dP4').html(dp4);
            $('#dPtot').html(dptot);
            var dq1 = parseInt(inputQ2) - parseInt(inputQ1);
            var dq2 = parseInt(inputQ3) - parseInt(inputQ2);
            var dq3 = parseInt(inputQ4) - parseInt(inputQ3);
            var dq4 = parseInt(inputQ5) - parseInt(inputQ4);
            var dqtot = dq1 + dq2 + dq3 + dq4;
            $('#dQ1').html(dq1);
            $('#dQ2').html(dq2);
            $('#dQ3').html(dq3);
            $('#dQ4').html(dq4);
            $('#dQtot').html(dqtot);
            var elastisitas = parseInt(dqtot) / parseInt(dptot) * parseInt(ptot) / parseInt(qtot);
            $('#elastisitasVal').html(elastisitas);
            if (elastisitas == 0) {
                $('#result').html('Inelastis Sempurna');
            } else if (elastisitas == 1) {
                $('#result').html('Elastis Uniter');
            } else if (elastisitas < 1) {
                $('#result').html('Inelastis');
            } else if (elastisitas > 1) {
                $('#result').html('Elastis');
            } else {
                $('#result').html('Elastis Sempurna');
            }

            $('#areaChart').mouseover(function() {
                const ctx = document.getElementById('myChart');
                const myChart = new Chart(ctx, {
                    type: 'line',

                    data: {
                        labels: [inputQ1, inputQ2, inputQ3, inputQ4, inputQ5],
                        datasets: [{
                            label: '# of Votes',
                            data: [inputP1, inputP2, inputP3, inputP4, inputP5],
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(255, 159, 64, 0.2)'
                            ],
                            borderColor: [
                                'rgba(255, 99, 132, 1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 159, 64, 1)'
                            ],
                            borderWidth: 1
                        }],
                    },

                    options: {
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });
            })
        })
        $('#inputQ5').on('mouseout', function() {
            inputQ1 = $('#inputQ1').val();
            inputQ2 = $('#inputQ2').val();
            inputQ3 = $('#inputQ3').val();
            inputQ4 = $('#inputQ4').val();
            inputQ5 = $('#inputQ5').val();
            $('#qVal5').html(inputQ5);
            inputP1 = $('#inputP1').val();
            inputP2 = $('#inputP2').val();
            inputP3 = $('#inputP3').val();
            inputP4 = $('#inputP4').val();
            inputP5 = $('#inputP5').val();
            var ptot = parseInt(inputP1) + parseInt(inputP2) + parseInt(inputP3) + parseInt(inputP4) + parseInt(inputP5)
            $('#pTot').html(ptot);
            var qtot = parseInt(inputQ1) + parseInt(inputQ2) + parseInt(inputQ3) + parseInt(inputQ4) + parseInt(inputQ5)
            $('#qTot').html(qtot);
            var dp1 = parseInt(inputP2) - parseInt(inputP1);
            var dp2 = parseInt(inputP3) - parseInt(inputP2);
            var dp3 = parseInt(inputP4) - parseInt(inputP3);
            var dp4 = parseInt(inputP5) - parseInt(inputP4);
            var dptot = dp1 + dp2 + dp3 + dp4;
            $('#dP1').html(dp1);
            $('#dP2').html(dp2);
            $('#dP3').html(dp3);
            $('#dP4').html(dp4);
            $('#dPtot').html(dptot);
            var dq1 = parseInt(inputQ2) - parseInt(inputQ1);
            var dq2 = parseInt(inputQ3) - parseInt(inputQ2);
            var dq3 = parseInt(inputQ4) - parseInt(inputQ3);
            var dq4 = parseInt(inputQ5) - parseInt(inputQ4);
            var dqtot = dq1 + dq2 + dq3 + dq4;
            $('#dQ1').html(dq1);
            $('#dQ2').html(dq2);
            $('#dQ3').html(dq3);
            $('#dQ4').html(dq4);
            $('#dQtot').html(dqtot);
            var elastisitas = parseInt(dqtot) / parseInt(dptot) * parseInt(ptot) / parseInt(qtot);
            $('#elastisitasVal').html(elastisitas);
            if (elastisitas == 0) {
                $('#result').html('Inelastis Sempurna');
            } else if (elastisitas == 1) {
                $('#result').html('Elastis Uniter');
            } else if (elastisitas < 1) {
                $('#result').html('Inelastis');
            } else if (elastisitas > 1) {
                $('#result').html('Elastis');
            } else {
                $('#result').html('Elastis Sempurna');
            }

            $('#areaChart').mouseover(function() {
                const ctx = document.getElementById('myChart');
                const myChart = new Chart(ctx, {
                    type: 'line',

                    data: {
                        labels: [inputQ1, inputQ2, inputQ3, inputQ4, inputQ5],
                        datasets: [{
                            label: '# of Votes',
                            data: [inputP1, inputP2, inputP3, inputP4, inputP5],
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(255, 159, 64, 0.2)'
                            ],
                            borderColor: [
                                'rgba(255, 99, 132, 1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 159, 64, 1)'
                            ],
                            borderWidth: 1
                        }],
                    },

                    options: {
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });
            })
        })
    </script>

</body>

</html>