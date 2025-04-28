<?= $this->extend('layouts/app') ?>
<?= $this->section('title') ?>Todolist - Actualizar Tarefa<?= $this->endSection() ?>
<?= $this->section('content') ?>
<section class="bg-100 py-0 text-center">
    <div class="container">
        <div class="row min-vh-100 align-items-center">
            <div class="col-md-10 col-lg-8 mx-auto my-auto">
                <div class="card">
                    <div class="card-body p-md-5">
                        <?=$this->include("includes/status")?>
                        <h4 class="text-uppercase fs-0 fs-md-1">Actualizar tarefa #<?= $task->id ?></h4>
                        <form class="text-start mt-4" action="<?=route_to('tasks_update',$task->id)?>" method="post">
                            <?=csrf_field()?>
                            <div class="row align-items-center g-4">
                                <div class="col-12">
                                    <input class="form-control <?=whenInvalid('title')?>" type="text" name="title" placeholder="Título" value="<?=$task->title?>"/>
                                    <?=getInvalidFeedback('title')?>
                                </div>
                                <div class="col-12">
                                    <input class="form-control <?=whenInvalid('starting')?>" type="date" name="starting" placeholder="Início" value="<?=$task->starting->format('Y-m-d')?>"/>
                                    <?=getInvalidFeedback('starting')?>
                                </div>
                                <div class="col-12">
                                    <input class="form-control <?=whenInvalid('deadline')?>" type="date" name="deadline" placeholder="Prazo" value="<?=$task->deadline->format('Y-m-d')?>"/>
                                    <?=getInvalidFeedback('deadline')?>
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control <?=whenInvalid('description')?>" rows="5" name="description" placeholder="Descrição"><?=$task->description?></textarea>
                                    <?=getInvalidFeedback('description')?>                                    
                                </div>
                            </div>
                            <div class="row align-items-center mt-3">
                                <div class="col-6 mt-3"></div>
                                <div class="col-6 mt-2 mt-sm-3"><button class="btn btn-primary w-100" type="submit">Actualizar</button></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>