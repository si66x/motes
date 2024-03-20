<?= $this->extend('Layout/Template'); ?>

<?= $this->section('content'); ?>

<nav class="navbar navbar-expand-lg navbar-light bg-transparant" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="/pages/mainmenu">MOTES</a>
        <button class="navbar-toggler navbar-toggler-right" nav type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/pages/inputie">Transaction</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link katahijau" href="/pages/ereport">Expense Reports</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link " href="/pages/ireport">Income Reports<span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item ml-3 dropdown " onmouseover="hitam()" onmouseout="awal()">
                    <a class="nav-link " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img id="icon1" style="width: 18px; height: 22px;" src="/image/notification.png">
                    </a>
                    <div class="dropdown-menu form-group" aria-labelledby="navbarDropdown">
                        <form class="px-4 py-3">
                            <input class="form-control" id="exampleFormControlInput1" placeholder="$ amount">
                            <button type="submit" class="btn btn-info">Set</button>
                        </form>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" style="font-size: 10px; font-weight: thin;">
                            <table cellpadding="5px">
                                <tr align="left">
                                    <td align="left"><img src="/image/notification.png" width="20px;"></td>
                                    <td>You've reached the <br /> maximum spend limit</td>
                                </tr>

                            </table>

                        </a>
                    </div>
                </li>
                <li class="nav-item pr-3 pl-3  dropdown" onmouseover="hitam2()" onmouseout="awal2()">
                    <a class="nav-link " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img id="icon2" style="width: 18px; height: 22px;" src="/image/user.png" alt="">
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/pages/profile">Account</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/pages/" style="color: red;">Sign Out</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- <div class="latar">
    <div class="jumbotron bg-transparent jumbotron-fluid">
        <div class="container text-center">
            <img class="" src="/image/2.png" onContextMenu="return false;" width="1300px" height="1100px" alt="">
        </div>
    </div>
</div> -->
<div class="bg ireport">
    <div class="container lihat">
        <div class="row">
            <div class="col-md-4">
                <div class="card-header dua shadow-lg bg-white">
                    <p class="card-title text-xs font-weight-bold text-uppercase mb-1" id="atas"><b>Total money that has been obtained</b></p>
                    <img class="rp" src="/image/indonesia-rupiah-currency-symbol.png" alt="">
                    <p class="uang"><?php $total = 0;
                                    foreach ($income as $i) {
                                        $total = $total + $i['amount'];
                                    }
                                    echo  $total   ?>
                        <img class="dolar" src="/image/dollar-symbol.png" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class=" table-responsive divChart mx-auto  pb-5 text-center ">
        <table class="text-center container chart shadow-lg  bg-white">
            <thead>
                <tr>
                    <th class="atas text-center p">
                        <h3>CHART</h3>
                    </th>
                </tr>
            </thead>

            <tbody class="tabelBawah-body">
                <tr>
                    <th>
                        <div id="piechart">
                            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

                            <script type="text/javascript">
                                // Load google charts
                                google.charts.load('current', {
                                    'packages': ['corechart']
                                });
                                google.charts.setOnLoadCallback(drawChart);


                                // Draw the chart and set the chart values

                                function drawChart() {
                                    var data = google.visualization.arrayToDataTable([
                                        ['Task', 'Hours per Day'],

                                        ['Education', <?php

                                                        $total = 0;
                                                        foreach ($income as $i) {
                                                            if ($i['category'] == 'Education') {
                                                                $total = $total + $i['amount'];
                                                            }
                                                        }
                                                        echo $total;

                                                        ?>],
                                        ['Health care', <?php

                                                        $total = 0;
                                                        foreach ($income as $i) {
                                                            if ($i['category'] == 'Health care') {
                                                                $total = $total + $i['amount'];
                                                            }
                                                        }
                                                        echo $total;

                                                        ?>],
                                        ['Bills', <?php

                                                    $total = 0;
                                                    foreach ($income as $i) {
                                                        if ($i['category'] == 'Bills') {
                                                            $total = $total + $i['amount'];
                                                        }
                                                    }
                                                    echo $total;

                                                    ?>],
                                        ['Entertainment', <?php

                                                            $total = 0;
                                                            foreach ($income as $i) {
                                                                if ($i['category'] == 'Entertainment') {
                                                                    $total = $total + $i['amount'];
                                                                }
                                                            }
                                                            echo $total;

                                                            ?>],
                                        ['Business expenses', <?php

                                                                $total = 0;
                                                                foreach ($income as $i) {
                                                                    if ($i['category'] == 'Business expenses') {
                                                                        $total = $total + $i['amount'];
                                                                    }
                                                                }
                                                                echo $total;

                                                                ?>]

                                        ,
                                        ['Investation', <?php

                                                        $total = 0;
                                                        foreach ($income as $i) {
                                                            if ($i['category'] == 'Investation') {
                                                                $total = $total + $i['amount'];
                                                            }
                                                        }
                                                        echo $total;

                                                        ?>],

                                        ['Salary', <?php

                                                    $total = 0;
                                                    foreach ($income as $i) {
                                                        if ($i['category'] == 'Salary') {
                                                            $total = $total + $i['amount'];
                                                        }
                                                    }
                                                    echo $total;

                                                    ?>],
                                        ['Gifts', <?php

                                                    $total = 0;
                                                    foreach ($income as $i) {
                                                        if ($i['category'] == 'Gifts') {
                                                            $total = $total + $i['amount'];
                                                        }
                                                    }
                                                    echo $total;

                                                    ?>],

                                        ['Awards', <?php

                                                    $total = 0;
                                                    foreach ($income as $i) {
                                                        if ($i['category'] == 'Awards') {
                                                            $total = $total + $i['amount'];
                                                        }
                                                    }
                                                    echo $total;

                                                    ?>]

                                    ]);

                                    // Optional; add a title and set the width and height of the chart
                                    var options = {
                                        'width': 550,
                                        'height': 400
                                    };

                                    // Display the chart inside the <div> element with id="piechart"
                                    var chart = new google.visualization.PieChart(document.getElementById('piechart'));
                                    chart.draw(data, options);
                                }
                            </script>

                        </div>
                    </th>
                </tr>
            </tbody>

        </table>
    </div>

    <div class=" table-responsive mx-auto  tabelLaporan pb-5 text-center ">
        <table class="text-center container tabelBawah shadow-lg  bg-white">
            <thead class="nama pt-2 pb-2">
                <th scope="col" class="kolom1 pt-3 pb-3">Category</th>
                <th scope="col" class="kolom2 pt-3 pb-3">Date</th>
                <th scope="col" class="kolom3 pt-3 pb-3">Explanation</th>
                <th scope="col" class="kolom4 pt-3 pb-3">Amount</th>
            </thead>
            <tbody class="tabelBawah-body table">

                <?php foreach ($income as $i) : ?>

                    <tr scope="row">
                        <td><?= $i['category'] ?></td>
                        <td><?= $i['date'] ?></td>
                        <td><?= $i['explanation'] ?></td>
                        <td><?= $i['amount'] ?></td>
                    </tr>
                <?php endforeach ?>

            </tbody>

        </table>
    </div>
</div>

<?= $this->endsection(); ?>