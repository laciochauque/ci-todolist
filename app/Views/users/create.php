<?= $this->extend('layouts/auth') ?>
<?= $this->section('title') ?>Todolist - Registro<?= $this->endSection() ?>
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
                        <h4 class="text-uppercase fs-0 fs-md-1">Criar sua conta Todolist</h4>
                        <?= $this->include("includes/status") ?>
                        <form class="text-start mt-4" action="<?= route_to('users_store') ?>" method="POST">
                            <?= csrf_field() ?>
                            <div class="row align-items-center g-4">
                                <div class="col-12">
                                    <input class="form-control <?= whenInvalid('name') ?>" type="text" name="name" placeholder="Nome Completo" value="<?= old('name') ?>">
                                    <?=getInvalidFeedback("name")?>
                                </div>
                                <div class="col-12">
                                    <input class="form-control <?= whenInvalid('email') ?>" type="email" name="email" value="<?= old('email') ?>" placeholder="Email">
                                    <?=getInvalidFeedback("email")?>
                                </div>
                                <div class="col-12">
                                    <input class="form-control <?= whenInvalid('contact') ?>" type="tel" name="contact" value="<?= old('contact') ?>" placeholder="Contacto">
                                    <?=getInvalidFeedback("contact")?>
                                </div>
                                <div class="col-12">
                                    <input class="form-control <?= whenInvalid('password') ?>" type="password" name="password" placeholder="Senha">
                                    <?=getInvalidFeedback("password")?>
                                </div>
                            </div>
                            <div class="row align-items-center mt-3">
                                <div class="col-6 mt-3">
                                    <div class="form-check"><input class="form-check-input" name="terms" type="checkbox" value="<?= old('terms') ?>"><label class="form-check-label text-500 lh-sm fw-semi-bold" for="rememberMe">Concordo com os termos e condições</label></div>
                                </div>
                                <div class="col-6 mt-2 mt-sm-3"><button class="btn btn-primary w-100" type="submit">Cadastrar-me</button></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>