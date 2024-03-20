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
                <li class="nav-item ">
                    <a class="nav-link js-scroll-trigger" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="/pages/about">About</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link js-scroll-trigger" href="/pages/SignIn">Sign in<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="/pages/SignUp">Sign up</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="backgroundSignUp-SignUp">
    <img src="/image/SignIn.png" alt="">
</div>

<div class="container border signIn shadow-lg bg-white">
    <form action="/login/auth" method="post">
        <?php if (session()->getFlashdata('msg')) : ?>
            <div class="alert alert-danger"><?= session()->getFlashdata('msg') ?></div>
        <?php endif; ?>
        <div class="form-group mt-3 ml-5 mr-5 mb-3">
            <h2 class="warnaBiruTulisan mb-5">Sign in</h2>
            <input type="email" name="email" class="form-control warnaBiruTulisan pl-5 pr-5" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email" style="border-radius: 20px">
        </div>
        <div class="form-group mt-0 ml-5 mr-5 mb-0">
            <input type="password" name="password" class="form-control warnaBiruTulisan" id="exampleInputPassword1" placeholder="Password" style="border-radius: 20px">
        </div>
        <div class="form-group mt-2 ml-5 mr-5 mb-0" style="text-align: center">
            <a href="#" class="hurufTipis">Forgot Password?</a>
        </div>
        <div style=" display: flex;justify-content: center;align-items: center; ">
            <button type="submit" class="btn btn-primary btn-block mr-5 ml-5 mt-2 mb-4" style="border-radius: 20px">Sign In</button>
        </div>
        <div class="warnaBiruTulisan mb-5">
            Don't have an account yet? <a href="#">Create an account</a>
        </div>


    </form>
</div>

<?= $this->endsection(); ?>