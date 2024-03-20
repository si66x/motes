<?php

// namespace App\Controllers;

// use CodeIgniter\Controller;

// class Dashboard extends Controller
// {
//     public function index()
//     {
//         $session = session();
//     }
// } 
?>

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
                <li class="nav-item ">
                    <a class="nav-link " href="/pages/ireport">Income Reports</a>
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
                                    <td align="left"><img src="notif.png" width="20px;"></td>
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

<div class="jumbotron mainmenu">
    <div class="question">
        <h1>Welcome,
            <?php $session = session(); ?>
            <p class="satuline"> <?php echo $session->get('name'); ?> </p>

        </h1>
        <p class="lead1">What do you want to do?</p>
    </div>
    <br><br>
    <div align="center" class="container">
        <div class="row">
            <div class="col-sm">
                <a href="/pages/inputie">
                    <input class="icon1" id="icon1" type="image" src="/image/input.png" width="140" /></a>
            </div>
            <div class="col-sm">
                <a href="/pages/ereport">
                    <input class="icon1" id="icon1" type="image" src="/image/income.png" width="140" /></a>
            </div>
            <div class="col-sm">
                <a href="/pages/ireport">
                    <input class="icon1" id="icon1" type="image" src="/image/expense.png" width="140" /></a>
            </div>
        </div>
    </div>
</div>
<?= $this->endsection(); ?>