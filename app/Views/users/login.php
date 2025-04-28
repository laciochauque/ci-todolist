<?= $this->extend('layouts/auth') ?>
<?= $this->section('title') ?>Todolist - Autenticação<?= $this->endSection() ?>
<?= $this->section('content') ?>
<section class="text-center py-0">
    <div class="bg-holder overlay overlay-1" style="background-image:url(<?= asset('assets/img/background/ci-todolist.jpg') ?>);"></div>
    <!--/.bg-holder-->
    <div class="container">
        <div class="row min-vh-100 align-items-center">
            <div class="col-md-9 col-lg-6 mx-auto" data-zanim-timeline="{}">
                <div class="mb-5" data-zanim-xs="{&quot;delay&quot;:0,&quot;duration&quot;:1}" style="transform: translate(0px, 0px); opacity: 1;">
                    <a href="<?= route_to('home') ?>"><img src="<?= asset('assets/img/logo/ci-todolist.png') ?>" alt="logo" class="rounded-circle" width="60"></a>
                </div>
                <div class="card" data-zanim-xs="{&quot;delay&quot;:0.1,&quot;duration&quot;:1}" style="transform: translate(0px, 0px); opacity: 1;">
                    <div class="card-body p-md-5">
                        <h4 class="text-uppercase fs-0 fs-md-1">Autenticação</h4>
                        <?= $this->include("includes/status") ?>
                        <form class="text-start mt-4" action="<?= route_to('users_login') ?>" method="POST">
                            <?= csrf_field() ?>
                            <div class="row align-items-center">
                                <div class="col-12">
                                    <div class="input-group">
                                        <div class="input-group-text bg-100">
                                            <span class="far fa-user"></span>
                                        </div>
                                        <input class="form-control <?=whenInvalid('email')?>" type="email" name="email" value="<?= old('email') ?>" placeholder="Email">
                                        <?=getInvalidFeedback("email")?>
                                    </div>
                                </div>
                                <div class="col-12 mt-2 mt-sm-4">
                                    <div class="input-group">
                                        <div class="input-group-text bg-100">
                                            <span class="fas fa-lock"></span>
                                        </div>
                                        <input class="form-control <?=whenInvalid('password')?>" type="password" name="password" placeholder="Senha">
                                        <?=getInvalidFeedback("password")?>
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-center mt-3">
                                <div class="col-6">
                                    <div class="form-check"><input class="form-check-input" id="remember" name="remember" type="checkbox" value=""><label class="form-check-label text-500" for="remember">Lembrar-me</label></div>
                                </div>
                                <div class="col-6 mt-2 mt-sm-3"><button class="btn btn-primary w-100" type="submit">Autenticar</button></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>