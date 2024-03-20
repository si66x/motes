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

<div class="bg inputie">


    <div class="container text-center pb-5">
        <div class="question">
            <h1>Welcome,
                <?php $session = session(); ?>
                <p class="satuline"> <?php echo $session->get('name'); ?> </p>

            </h1>
        </div>
    </div>

    <div class="container justify-content-center py-5">
        <div class="row">
            <div class="col-lg-6 px-5 ">
                <?php if (isset($validation)) : ?>
                    <div class="alert alert-danger"><?= $validation->listErrors() ?></div>
                <?php endif; ?>
                <form action="/transaksi/submit" method="post">
                    <div class="dropdown pb-3 col-xs-4">
                        <select name="tipe" class="btn btn-outline-light dropdown-toggle text-center" type="button" id="tipe" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #B3B3B3">
                            <img src="/image/bank.png" width="20px"> Type of Transaction
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" name=>
                                <option value="income" class="dropdown-item">Income</option>
                                <option value="expenses" class="dropdown-item">Expenses</option>
                            </div>
                        </select>
                    </div>



                    <div class="form-group pb-3 " id="input-container">
                        <img src="/image/dollar-symbol.png">
                        <input name="amount" type="text" class="form-control text-center bg-light" placeholder="Amount">
                    </div>



                    <div class="dropdown pb-3">
                        <select name="category" class="btn btn-outline-light dropdown-toggle" type="button" id="category" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #B3B3B3" placeholder="Kate">
                            <img src="/image/list.png" width="20px"> Category
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <option value="Education" class="dropdown-item">Education</option>
                                <option value="Health care" class="dropdown-item">Health care</option>
                                <option value="Bills" class="dropdown-item">Bills</option>
                                <option value="Entertainment" class="dropdown-item">Entertainment</option>
                                <option value="Business expenses" class="dropdown-item">Business expenses</option>
                                <option value="Investation" class="dropdown-item">Investation</option>
                                <option value="Salary" class="dropdown-item">Salary</option>
                                <option value="Gifts" class="dropdown-item">Gifts</option>
                                <option value="Awards" class="dropdown-item">Awards</option>
                            </div>
                        </select>

                    </div>



                    <div class="form-group pb-3" id="input-container">
                        <img src="/image/calendar.png">
                        <input name="date" type="date" class="form-control text-center bg-light" placeholder="Date" id="date">
                    </div>


            </div>
            <div class="col-lg-6 px-5">

                <div class="form-group" id="input-container">
                    <img src="/image/edit.png">
                    <textarea name="explanation" class="form-control bg-light text-center" id="exampleFormControlTextarea1" rows="9" placeholder="Explanation" id="explanation"></textarea>
                </div>

            </div>
            <button class="tombolSubmit" type="submit" class="btn btn-primary active">Submit</button>
        </div>
        </form>
    </div>
</div>


<?= $this->endsection(); ?>