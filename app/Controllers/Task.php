<?php

namespace App\Controllers;

use App\Models\Task as Model;
use App\Models\User;
use Exception;

class Task extends BaseController
{
    protected Model $model;
    protected int       $user_id;
    public function __construct()
    {
        $this->model = new Model();
        $this->user_id   = (int) session()->get("user_id");
    }

    public function index()
    {
        $perPage = $this->request->getGet("length") ?? 5;
        $page    = $this->request->getGet("page") ?? 1;
        $data['tasks']     = $this->model
                                  ->where("user_id",$this->user_id)
                                  ->orderBy("id","DESC")
                                  ->paginate(perPage:$perPage,page:$page);
        $data['paginator'] = (object)$this->model->pager->getDetails();
        return view('tasks/index', $data);
    }
    public function create()
    {
        return view('tasks/create');
    }

    public function store()
    {
        $status = $this->validate([
            "title"         =>["required","max_length[255]"],
            "description"   =>["max_length[2048]"],
            "starting"      =>["required","valid_date"],
            "deadline"       =>["required","valid_date"],   
        ],[
            "title"         =>["required"=>"O título é obrigatório","max_length"=>"o título deve ter até 255 caracteres"],
            "description"   =>["max_length"=>"a descrição deve ter até 2048 caracteres"],
            "starting"      =>["required"=>"Início é obrigatório","valid_date"=>"Início deve ser uma data válida"],
            "deadline"       =>["required"=>"Prazo é obrigatório","valid_date"=>"Prazo deve ser uma data válida"],   
        ]);

        session()->setFlashdata("errors", $this->validator->getErrors());
        if (! $status)
            return redirect()->back()->withInput();

        $this->model->save([
            "user_id"       =>$this->user_id,
            "title"         =>$this->request->getPost('title'),
            "description"   =>$this->request->getPost('description'),
            "status"        =>"AGENDADA",
            "starting"      =>$this->request->getPost('starting'),
            "dealine"       =>$this->request->getPost('deadline'),
        ]);

        return redirect()->route('tasks_index')->with('status', 'Tarefa adicionada com sucesso.');
    }

    public function show($id)
    {

        $task       = $this->model->find($id);
        return $this->authorize($task,function($task){
            $data['task']       = $task;
            $data['task']->user = (new User)->find($data['task']->user_id);
            return view('tasks/show', $data);
        });
    }

    public function edit($id)
    {
        $task = $this->model->find($id);
        return $this->authorize($task,function($t){
            $data['task'] = $t;
            return view('tasks/edit', $data);
        });
    }

    public function update($id)
    {
        $task = $this->model->find($id);
        return $this->authorize($task,function($task){
            $status = $this->validate([
                "title"         =>["required","max_length[255]"],
                "description"   =>["max_length[2048]"],
                "starting"      =>["required","valid_date"],
                "deadline"       =>["required","valid_date"],   
            ],[
                "title"         =>["required"=>"O título é obrigatório","max_length"=>"o título deve ter até 255 caracteres"],
                "description"   =>["max_length"=>"a descrição deve ter até 2048 caracteres"],
                "starting"      =>["required"=>"Início é obrigatório","valid_date"=>"Início deve ser uma data válida"],
                "deadline"       =>["required"=>"Prazo é obrigatório","valid_date"=>"Prazo deve ser uma data válida"],   
            ]);
    
            session()->setFlashdata("errors", $this->validator->getErrors());
            if (! $status)
                return redirect()->back()->withInput();
    
            $this->model->update($task->id,[
                "title"         =>$this->request->getPost('title'),
                "description"   =>$this->request->getPost('description'),
                "status"        =>"AGENDADA",
                "starting"      =>$this->request->getPost('starting'),
                "dealine"       =>$this->request->getPost('deadline'),
            ]);
            return redirect()->route('tasks_index')->with('status', 'Tarefa adicionada com sucesso.');    
        });
    }

    public function destroy($id)
    {
        $task = $this->model->find($id);
        return $this->authorize($task,function($task){
            $this->model->delete($task->id);
            return redirect()->route('tasks_index')->with('message', 'Tarefa removida com sucesso.');
        });
    }

    public function dashboard()
    {
        $data['tasks'] = $this->model->findAll();
        return view('tasks/dashboard', $data);
    }
    public function queue()
    {
        $data['tasks'] = $this->model->findAll();
        return view('tasks/queue', $data);
    }


    protected function authorize($task, $callback)
    {
        if($this->user_id == $task->user_id)
            return $callback($task);
        else 
            return abort(new Exception("Não autorizado",403),"Esta tentando aceder uma tarefa que não lhe pertença!");
    }
}
