<?= $this->extend('Layout/Template'); ?>

<?= $this->section('content'); ?>

<nav class="navbar navbar-expand-lg navbar-light bg-transparant" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="/">MOTES</a>
        <button class="navbar-toggler navbar-toggler-right" nav type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link js-scroll-trigger" href="/">Home<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="/pages/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="/pages/SignIn">Sign in</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="/pages/SignUp">Sign up</a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="/Comics/">komik</a>
                </li> -->
            </ul>
        </div>
    </div>
</nav>

<div class="jumbotron backgroundAtas">
    <img src="/image/jumbotron.png" width='1400px'>
    <h1 class="display-4"></h1>
    <p class="lead"></p>

    <p></p>

</div>
<img src="/image/Tengah.png" class="img-fluid" alt="Responsive image">

<footer class="page-footer font-small biru">
    <div class="container-fluid text-center text-md-left">
        <div class="row">
            <div class="col-md-6 mt-md-0 mt-3">
                <p class="font-weight-bold">MOTES</p>
                <p>PT. Money Notes Indonesia.
                    Jl. Kaliurang Km 14,5 Yogyakarta <br>
                    E-mail: motesindonesia@gmail.com <br>
                    Phone: (021) 22222-222XX <br>
                    Mobile: 08777777XXXX
                </p>

            </div>

            <hr class="clearfix w-100 d-md-none pb-3">
            <div class="col-md-3 mb-md-0 mb-3">
                <p class="font-weight-bold">SERVICES</p>

                <ul class="list-unstyled">
                    <li>
                        <a>Transaction</a>
                    </li>
                    <li>
                        <a>Income Reports</a>
                    </li>
                    <li>
                        <a>Expense Reports</a>
                    </li>
                </ul>

            </div>
            <footer class="page-footer.font-small.putih">
                <div class="col-md-3 mb-md-0 mb-3">
                    <p class="font-weight-bold">INFORMATION</p>

                    <ul class="list-unstyled">
                        <li>
                            <a>About Us</a>
                        </li>
                        <li>
                            <a>FAQ</a>
                        </li>
                        <li>
                            <a>Privacy</a>
                        </li>
                    </ul>

                </div>

        </div>

    </div>

</footer>
<?= $this->endsection(); ?>