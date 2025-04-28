<div class="bg-primary py-3 d-none d-sm-block text-white fw-bold">
    <div class="container">
        <div class="row align-items-center gx-4">
            <div class="col-auto d-none d-lg-block fs--1"><span class="fas fa-map-marker-alt text-warning me-2" data-fa-transform="grow-3"></span>Luís Cabral, Maputo, Mozambique. </div>
            <div class="col-auto ms-md-auto order-md-2 d-none d-sm-flex fs--1 align-items-center"><span class="fa fa-server text-warning me-2" data-fa-transform="grow-3"></span><?= "Servidor: " . gethostname() ?></div>
            <div class="col-auto"><span class="fas fa-phone-alt text-warning" data-fa-transform="shrink-3"></span><a class="ms-2 fs--1 d-inline text-white fw-bold" href="tel:+258876656765">+258 87-665-6765</a></div>
        </div>
    </div>
</div>

<div class="sticky-top navbar-elixir">
    <div class="container">
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="../index.html">
                <img src="<?= asset('assets/img/logo/ci-todolist.png/') ?>" width="30" alt="logo" />
            </a>
            <button class="navbar-toggler p-0" type="button" data-bs-toggle="collapse" data-bs-target="#primaryNavbarCollapse" aria-controls="primaryNavbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="hamburger hamburger--emphatic"><span class="hamburger-box"><span class="hamburger-inner"></span></span></span>
            </button>
            <div class="collapse navbar-collapse" id="primaryNavbarCollapse">
                <ul class="navbar-nav py-3 py-lg-0 mt-1 mb-2 my-lg-0 ms-lg-n1">
                    <li class="nav-item dropdown"><a class="nav-link " href="<?= base_url()?>" role="button">Home</a></li>
                    <li class="nav-item dropdown"><a class="nav-link" href="<?= route_to('tasks_index')?>" role="button">Tarefas</a></li>
                    <li class="nav-item dropdown"><a class="nav-link" href="<?= route_to('tasks_queue')?>" role="button">Fila</a></li>
                    <li class="nav-item dropdown"><a class="nav-link" href="<?= route_to('tasks_dashboard')?>" role="button">Estatísticas</a></li>
                </ul>
            </div>
        </nav>
    </div>
</div>