<?php

namespace App\Controllers;

use App\Models\User as Model;

class User extends BaseController
{
    protected Model $model;
    public function __construct()
    {
        $this->model = new Model();
    }

    public function index()
    {
        $perPage = $this->request->getGet("length") ?? 5;
        $page    = $this->request->getGet("page") ?? 1;

        $data['users']     = $this->model->paginate(perPage: $perPage, page: $page);
        $data['paginator'] = (object)$this->model->pager->getDetails();
        return view('users/index', $data);
    }


    public function create()
    {
        return view('users/create');
    }

    public function store()
    {
        $status = $this->validate([
            "name"      => ["required", "string", "max_length[255]"],
            "email"     => ["required", "valid_email", "is_unique[users.email]"],
            "contact"   => ["regex_match[/^8[2-7]\d{7}/]", "is_unique[users.contact]"],
            "password"  => ["required", "max_length[60]", "min_length[6]"],
        ], [
            "name" => [
                "required" => "O nome é obrigatório",
                "string" => "O nome deve ser uma frase",
                "max_length" => "O nome deve ter até 255 carracteres",
            ],
            "email" => [
                "required" => "O email é obrigatório",
                "valid_email" => "O email tem um formato inválido",
                "is_unique" => "Já existe alguém registrado com esse email",
            ],
            "contact" => [
                "regex_match" => "o contacto tem um formato inválido",
                "is_unique" => "Já existe alguém registrado com esse contacto",
            ],
            "password" => [
                "required" => "A senha é obrigatória",
                "min_length" => "A senha deve ter pelo menos 6 carracteres",
                "max_length" => "A senha deve ter até 255 carracteres",
                "equals" => "A senha e confirmação da senha não conferem",
            ],
        ]);
        session()->setFlashdata("errors", $this->validator->getErrors());
        if (! $status)
            return redirect()->back()->withInput();

        $this->model->save([
            "name"                  => $this->request->getPost("name"),
            "email"                 => $this->request->getPost("email"),
            "contact"               => $this->request->getPost("contact"),
            "password"              => password_hash($this->request->getPost("password"), PASSWORD_BCRYPT)
        ]);
        return redirect("users_login_form");
    }
    public function show($id)
    {
        $data['user']       = $this->model->find($id);
        return view('users/show', $data);
    }

    public function edit($id)
    {
        $data['user'] = $this->model->find($id);
        return view('users/edit', $data);
    }

    public function update($id)
    {
        $this->model->update($id, [
            "user_id"       => $this->request->getPost('user_id'),
            "title"         => $this->request->getPost('title'),
            "description"   => $this->request->getPost('description'),
            "status"        => "AGENDADA",
            "starting"      => $this->request->getPost('starting'),
            "dealine"       => $this->request->getPost('deadline'),
        ]);

        return redirect()->to('/user')->with('message', 'Tarefa atualizada com sucesso.');
    }

    public function destroy($id)
    {
        $this->model->delete($id);
        return redirect()->to('/user')->with('message', 'Tarefa removida com sucesso.');
    }

    public function logout()
    {
        session()->destroy();
        return redirect("home");
    }

    public function auth()
    {
        return view("users/login");
    }

    public function login()
    {
        $status = $this->validate([
            "email"     => ["required", "valid_email"],
            "password"  => ["required"],
        ], [
            "email"     => ["required" => "o campo email é obrigatório", "email" => "o campo email deve ser um endereço de email"],
            "password"  => ["required" => "o campo senha é obrigatório"]
        ]);
        session()->setFlashdata("errors", $this->validator->getErrors());
        if (! $status)
            return redirect()->back()->withInput();
        $user = (new Model)->where("email", $this->request->getPost("email"))->first();
        if (!$user || ! password_verify($this->request->getPost("password"), $user->password)) {
            session()->set([
                "errors" => [
                    "email" => "Suas Credências não constam dos nossos registros"
                ]
            ]);
            return redirect()->back()->withInput();
        }
        $intended = session()->get("intended");
        session()->regenerate(true);
        session()->set("user_id", $user->id);
        if ($intended)
            return redirect()->to($intended);
        else
            return redirect("home");
    }
}
