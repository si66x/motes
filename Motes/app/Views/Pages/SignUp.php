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
                <li class="nav-item ">
                    <a class="nav-link js-scroll-trigger" href="/pages/SignIn">Sign in</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link js-scroll-trigger" href="/pages/SignUp">Sign up<span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="backgroundSignUp-SignUp">
    <img src="/image/SignUp.png" alt="">
</div>

<div class="container-sm border signUp shadow-lg bg-white">
    <form action="/register/save" method="post">
        <div class="form-group mt-5 ml-5 mr-5 mb-3">
            <h2 class="warnaBiruTulisan mb-5">Create an Account</h2>
            <?php if (isset($validation)) : ?>
                <div class="alert alert-danger"><?= $validation->listErrors() ?></div>
            <?php endif; ?>
            <div class="container">
                <div class="row pb-3">
                    <div class="col-sm">
                        <input type="text" name="nama_depan" class="form-control warnaBiruTulisan pl-4 pr-4" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="First Name" style="border-radius: 20px">
                    </div>
                    <div class="col-sm">
                        <input type="text" name="nama_belakang" class="form-control warnaBiruTulisan pl-4 pr-4" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Last Name" style="border-radius: 20px">
                    </div>
                </div>
                <div class="row pb-3">
                    <div class="col-sm"> <input type="email" name="email" class="form-control warnaBiruTulisan pl-4 pr-4" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email" style="border-radius: 20px"></div>
                </div>
                <div class="row">
                    <div class="col-sm">
                        <input type="password" name="password" class="form-control warnaBiruTulisan pl-4 pr-4" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Password" style="border-radius: 20px">
                    </div>
                    <div class="col-sm">
                        <input type="password" name="confpassword" class="form-control warnaBiruTulisan pl-4 pr-4" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Confirm Password" style="border-radius: 20px">
                    </div>
                </div>
                <div class="row pb-3">
                    <div class="col-sm">
                        <div style=" display: flex;justify-content: center;align-items: center; ">
                            <button type="submit" class="btn btn-primary btn-block mt-4 mb-4 pl-4 pr-4" style="border-radius: 20px">Register Account</button>
                        </div>
                    </div>
                </div>
                <div class="warnaBiruTulisan mb-5">
                    Already have an account? <a href="./signin">Sign in here</a>
                </div>

            </div>

        </div>
    </form>
</div>

<?= $this->endsection(); ?>