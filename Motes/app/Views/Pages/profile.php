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

<div class="bg propil">

    <div class="kotak ">
        <div class="wrapper">
            <div class="inner shadow-lg pt-5 pb-5 p-3 mb-5 bg-white">
                <h3 class="tengah">Edit Profile</h3>
                <form class="profile" action="/edit/save" action="POST">
                    <?php if (isset($validation)) : ?>
                        <div class="alert alert-danger"><?= $validation->listErrors() ?></div>
                    <?php endif; ?>
                    <div class="form-group profil">
                        <div class="form-wrapper bungkus">
                            <label for="">First Name</label>
                            <input type="text" name="nama_depan" class="form-control kontrol">
                        </div>
                        <div class="form-wrapper bungkus">
                            <label for="">Last Name</label>
                            <input type="text" name="nama_belakang" class="form-control kontrol">
                        </div>
                    </div>
                    <div class="form-wrapper bungkus">
                        <label for="">Email</label>
                        <input type="email" name="email" class="form-control kontrol">
                    </div>
                    <div class="form-wrapper bungkus">
                        <label for="">Password</label>
                        <input type="password" name="password" class="form-control kontrol">
                    </div>
                    <div class="form-wrapper bungkus">
                        <label for="">Confirm Password</label>
                        <input type="confpassword" name="confpassword" class="form-control kontrol">
                    </div>
                    <button type="submit" class="btn simpan">
                        <p class="tulisanbuton">Save Changes</p>
                    </button>
                </form>
                <img class="userBesar" src="/image/userBesar.png" alt="">
            </div>
        </div>
    </div>


    <?= $this->endsection(); ?>