<?= $this->extend('layouts/app') ?>
<?= $this->section('title') ?>Todolist - Nova Tarefa<?= $this->endSection() ?>
<?= $this->section('content') ?>
<section class="bg-100 py-0 text-center">
    <div class="container">
        <div class="row min-vh-100 align-items-center">
            <div class="col-12 px-0">
                <h1 class="text-300 fw-bolder text-uppercase">Lista de Tarefas</h1>
                <?=$this->include("includes/status")?>
                <a href="<?=route_to('tasks_create')?>" class="btn btn-primary mb-2">Nova Tarefa</a>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Título</th>
                                <th>Estado</th>
                                <th>Início</th>
                                <th>Termino</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(count($tasks)):?>
                                <?php foreach($tasks as $task): ?>
                                <tr>
                                    <td class="text-truncate"><?= esc($task->title) ?></td>
                                    <td><?= $task->status->label() ?></td>
                                    <td><?= $task->starting->format("d/m/Y") ?></td>
                                    <td><?= esc($task->deadline->format("d/m/Y")) ?></td>
                                    <td class="tex-tno-wrap">
                                        <a href="<?= route_to("tasks_show",$task->id) ?>" class="btn btn-primary btn-sm"><i class="fa fa-eye"></i></a>
                                        <a href="<?= route_to("tasks_edit",$task->id) ?>" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>
                                        <form action="<?=route_to("tasks_destroy",$task->id)?>" method="post" class="d-inline">
                                            <?=csrf_field()?>
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return prompt('Digite SIM para eliminar.')=='SIM'"><i class="fa fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            <?php else:?>
                                <tr>
                                    <td colspan="5" class="text-center">NENHUMA TAREFA REGISTRADA!</td>
                                </tr>
                            <?php endif;?>
                        </tbody>
                    </table>
                </div>
                <?= $this->include("includes/paginator") ?>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>