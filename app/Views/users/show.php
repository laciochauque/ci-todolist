<?= $this->extend('layouts/app') ?>
<?= $this->section('title') ?>Todolist - Detalhes da Tarefa #<?=$task->id?><?= $this->endSection() ?>
<?= $this->section('content') ?>
<section class="bg-100 py-0 text-center">
    <div class="container">
        <div class="row min-vh-100 align-items-center">
            <div class="col-12 px-0">
                <h1 class="text-300 fw-bolder text-uppercase">Detalhes da Tarefa #<?=$task->id?></h1>
                <a href="<?= route_to('tasks_index') ?>" class="btn btn-primary mb-2">Listagem de Tarefas</a>
                <table class="table table-bordered">
                    <tbody>
                        <tr><th>Título</th><td><?=$task->title?></td></tr>
                        <tr><th>Proprietário</th><td><?=$task->user->name?></td></tr>
                        <tr><th>Email</th><td><?=$task->user->email?></td></tr>
                        <tr><th>Agenda</th><td><?=$task->starting->format('d/m/Y')?></td></tr>
                        <tr><th>Prazo</th><td><?=$task->deadline->format('d/m/Y')?></td></tr>
                        <tr><th>Detalhes</th><td><?=$task->description?></td></tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>