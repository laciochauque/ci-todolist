<?= $this->extend('layouts/auth') ?>
<?= $this->section('title') ?>Todolist - Erro_<?= $exception->getCode() ?><?= $this->endSection() ?>
<?= $this->section('content') ?>
<!-- ============================================-->
<!-- <section> begin ============================-->
<section class="text-center py-0">
    <div class="bg-holder overlay overlay-elixir" style="background-image:url(<?=asset('assets/img/background/ci-todolist.jpg') ?>);"></div>
    <!--/.bg-holder-->
    <div class="container">
        <div class="row min-vh-100 align-items-center text-white">
            <div class="col" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                <a href="<?=route_to('home') ?>" data-zanim-xs='{"delay":0}'><img src="<?=asset('assets/img/logo/ci-todolist.png') ?>" width="50" alt="logo" data-zanim-xs='{"delay":0.1}' /></a>
                <h5 class="text-uppercase mt-5 ls text-white fs-0 fs-md-1" data-zanim-xs='{"delay":0.2}'><?= $exception->getMessage() ?></h5>
                <h1 class="fs-4 fs-sm-6 fs-md-8 text-white" data-zanim-xs='{"delay":0.3}'><?= $exception->getCode() ?></h1>
                <div data-zanim-xs='{"delay":0.4}'>
                    <a class="btn btn-primary rounded-pill mt-4" href="<?=route_to('home') ?>">HOME</a>
                    <p class="text-danger"><?=$description??""?></p>
                </div>
            </div>
        </div>
    </div><!-- end of .container-->
</section><!-- <section> close ============================-->
<!-- ============================================-->
<?= $this->endSection() ?>