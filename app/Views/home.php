<?= $this->extend('layouts/app') ?>

<?= $this->section('title') ?>Todolist - Home<?= $this->endSection() ?>
<?= $this->section('content') ?>

<!-- ============================================-->
<!-- <section> begin ============================-->
<section class="py-0" data-zanim-timeline="{}" data-zanim-trigger="scroll">
    <div class="bg-holder" style="background-image:url(<?= asset('assets/img/background/ci-todolist.jpg') ?>);"></div>
    <!--/.bg-holder-->
    <div class="container">
        <div class="row min-vh-100 py-8 align-items-center" data-inertia='{"weight":1.5}'>
            <div class="col-sm-8 col-lg-7">
                <div class="overflow-hidden">
                    <h1 class="fs-4 fs-md-5" data-zanim-xs='{"delay":0.5}'>Todolist</h1>
                </div>
                <div class="overflow-hidden">
                    <p class="text-primary mt-4 mb-5 fs-1 fs-md-2 lh-xs" data-zanim-xs='{"delay":0.6}'>
                        O melhor e mais leve aplicativo de gestão de tarefas desenhado pensando em ti.
                    </p>
                </div>
                <div class="overflow-hidden">
                    <div data-zanim-xs='{"delay":0.7}'>
                        <?php if (auth()): ?>
                            <form action="<?= route_to('users_logout') ?>" method="post">
                                <?= csrf_field() ?>
                                <button class="btn btn-danger me-3 mt-3" type="submit">Sair<span class="fa fa-user-shield ms-2"></span></button>
                            </form>
                        <?php else: ?>
                            <a class="btn btn-primary me-3 mt-3" href="<?= route_to('users_create') ?>">Registre-se<span class="fa fa-user-plus ms-2"></span></a>
                            <a class="btn btn-warning mt-3" href="<?= route_to('users_login_form') ?>">Autenticar<span class="fa fa-user-shield ms-2"></span></a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- end of .container-->
</section><!-- <section> close ============================-->
<!-- ============================================-->



<!-- ============================================-->
<!-- <section> begin ============================-->
<section class="bg-white text-center">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-10 col-md-6">
                <h3 class="fs-2 fs-lg-3">Por que usar Todolist?</h3>
                <p class="px-lg-4 mt-3">Obviamente por ser uma aplicação baseada na web que poderá aceder de qualquer lugar e qualquer dispositivo, para além de segurança fornecida pela nossa hospedagem assim com pelas funcionalidades únicas fornecidas por este aplicativo tais como: </p>
                <hr class="short" data-zanim-xs='{"from":{"opacity":0,"width":0},"to":{"opacity":1,"width":"4.20873rem"},"duration":0.8}' data-zanim-trigger="scroll" />
            </div>
        </div>
        <div class="row mt-4 mt-md-5">
            <div class="col-sm-6 col-lg-3 mt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                <div class="ring-icon mx-auto" data-zanim-xs='{"delay":0}'><span class="fa fa-users"></span></div>
                <h5 class="mt-4" data-zanim-xs='{"delay":0.1}'>Colaboração</h5>
                <p class="mb-0 mt-3 px-3" data-zanim-xs='{"delay":0.2}'>A aplicação permite-lhe que convide colaboradores, para executar tarefas apenas informando o email deles, e eles poderão ser notificados, a ver detalhes das tarefas sem necessariamente que tenha conta.</p>
            </div>
            <div class="col-sm-6 col-lg-3 mt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                <div class="ring-icon mx-auto" data-zanim-xs='{"delay":0}'><span class="far fa-bell"></span></div>
                <h5 class="mt-4" data-zanim-xs='{"delay":0.1}'>Notificação</h5>
                <p class="mb-0 mt-3 px-3" data-zanim-xs='{"delay":0.2}'>O aplicativo notifica os utilizadores acerca de mudanças de estados das tarefas, isto é, se está aberta, cancelada, vencida ou conluída.</p>
            </div>
            <div class="col-sm-6 col-lg-3 mt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                <div class="ring-icon mx-auto" data-zanim-xs='{"delay":0}'><span class="fa fa-clock"></span></div>
                <h5 class="mt-4" data-zanim-xs='{"delay":0.1}'>Hístórico</h5>
                <p class="mb-0 mt-3 px-3" data-zanim-xs='{"delay":0.2}'>O sistema mostra um histórico bem detalhado das tarefas, quem abriu da última vez, e o que alterou.</p>
            </div>
            <div class="col-sm-6 col-lg-3 mt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                <div class="ring-icon mx-auto" data-zanim-xs='{"delay":0}'><span class="fa fa-layer-group"></span></div>
                <h5 class="mt-4" data-zanim-xs='{"delay":0.1}'>Enfileiramento</h5>
                <p class="mb-0 mt-3 px-3" data-zanim-xs='{"delay":0.2}'>O sistema possibilita a execução de tarefas em fila.</p>
            </div>
        </div>
    </div><!-- end of .container-->
</section><!-- <section> close ============================-->
<!-- ============================================-->

<?= $this->endSection() ?>