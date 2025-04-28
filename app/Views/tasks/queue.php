<?= $this->extend('layouts/app') ?>
<?= $this->section('title') ?>Todolist - Fila<?= $this->endSection() ?>
<?= $this->section('content') ?>
<section class="bg-100 py-0 text-center">
    <div class="container">
        <div class="row min-vh-100 align-items-center">
            <div class="col-12 px-0">
                <h1 class="text-300 fw-bolder text-uppercase">Fila</h1>
                <?=$this->include("includes/status")?>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>