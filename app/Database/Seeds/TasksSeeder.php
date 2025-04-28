<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class TasksSeeder extends Seeder
{
    protected $table        = 'tasks';    
    protected $primaryKey   = 'id';  
    protected $data = [
        [
            "id"            =>1,
            "user_id"       =>1,
            "title"         =>"Escrever o projecto de pesquisa",
            "description"   =>"Nesta tarefa o supervisando deve escrever o primeiro capítulo de projecto de pesquisa e submeter ao orientador. A tarefa deve ser feita com calma e com muita atenção. O capítulo deve conter os seguintes tópicos: Introdução, Justificação, Objectivos, Metodologia, Revisão de Literatura e Cronograma.",
            "status"        =>"PENDENTE",
            "starting"      =>"2025-04-27 08:00:00",
            "deadline"       =>"2025-04-30 08:00:00",
            "created_at"    =>"2025-04-27 08:00:00",
            "updated_at"    =>"2025-04-27 08:00:00",
        ],
        [
            "id"            =>2,
            "user_id"       =>2,
            "title"         =>"Fazer a revisão estrutural e da relevância do projecto de pesquisa",
            "description"   =>"Nesta tarefa o supervisor deve fazer a revisão estrutural e da relevância do projecto de pesquisa e dar o feedback ao orientando. O orientador deve certificar-se que o capítulo contém os seguintes tópicos: Introdução, Justificação, Objectivos, Metodologia, Revisão de Literatura e Cronograma, e que o mesmo está bem estruturado e com a formatação correcta.",
            "status"        =>"PENDENTE",
            "starting"      =>"2025-04-27 08:00:00",
            "deadline"       =>"2025-04-30 08:00:00",
            "created_at"    =>"2025-04-27 08:00:00",
            "updated_at"    =>"2025-04-27 08:00:00",
        ],
        [
            "id"            =>3,
            "user_id"       =>1,
            "title"         =>"Estudo de Caso",
            "description"   =>"Nesta tarefa o orientando deve fazer o estudo de caso num laboratório físico ou virtual onde fará as seguintres actividades: 1. Estudar a topologia da rede do destino; 2. elaborar a topologia da proposta de solução; 3. Estudar os equipamentos de rede do destino; 4. Estudar os equipamentos de rede da proposta de solução; 5. Estudar o sistema operativo do destino; 6. Estudar o sistema operativo da proposta de solução; 7. Estudar as aplicações do destino; 8. Estudar as aplicações da proposta de solução; 9. Estudar a segurança do destino; 10. Estudar a segurança da proposta de solução.",
            "status"        =>"PENDENTE",
            "starting"      =>"2025-04-27 08:00:00",
            "deadline"       =>"2025-04-30 08:00:00",
            "created_at"    =>"2025-04-27 08:00:00",
            "updated_at"    =>"2025-04-27 08:00:00",
        ],
        [
            "id"            =>4,
            "user_id"       =>2,
            "title"         =>"Estudar a coerência da proposta de solução com a fundamentação teórica",
            "description"   =>"Nesta tarefa o supervisor deve estudar a executabilidade da proposta de solução com a fundamentação teórica e dar o feedback ao orientando. O orientador deve certificar-se que a proposta de solução é coerente com a fundamentação teórica e que a mesma está bem estruturada.",
            "status"        =>"PENDENTE",
            "starting"      =>"2025-04-27 08:00:00",
            "deadline"       =>"2025-04-30 08:00:00",
            "created_at"    =>"2025-04-27 08:00:00",
            "updated_at"    =>"2025-04-27 08:00:00",
        ],
        [
            "id"            =>5,
            "user_id"       =>1,
            "title"         =>"Testar a proposta de solução e colectar dados dos resultados",
            "description"   =>"Nesta tarefa o orientando deve testar a proposta de solução e colectar dados dos resultados. O orientando deve certificar-se que a proposta de solução é coerente com a fundamentação teórica e que a mesma está bem estruturada.",
            "status"        =>"PENDENTE",
            "starting"      =>"2025-04-27 08:00:00",
            "deadline"       =>"2025-04-30 08:00:00",
            "created_at"    =>"2025-04-27 08:00:00",
            "updated_at"    =>"2025-04-27 08:00:00",
        ],
        [
            "id"            =>6,
            "user_id"       =>2,
            "title"         =>"Acompanhar os testes da proposta de solução",
            "description"   =>"Nesta tarefa o orientador deve acomponhar a testagem da proposta de solução e dar o feedback ao orientando. O orientador pode sugerir testes adicionais.",
            "status"        =>"PENDENTE",
            "starting"      =>"2025-04-27 08:00:00",
            "deadline"       =>"2025-04-30 08:00:00",
            "created_at"    =>"2025-04-27 08:00:00",
            "updated_at"    =>"2025-04-27 08:00:00",
        ],
        [
            "id"            =>7,
            "user_id"       =>1,
            "title"         =>"Apresentação e discunsão dos resultados",
            "description"   =>"Nesta tarefa o orientando deve apresentar e discutir os resultados da proposta de solução. O orientando deve certificar-se que a proposta de solução é coerente com a fundamentação teórica e que a mesma está bem estruturada.",
            "status"        =>"PENDENTE",
            "starting"      =>"2025-04-27 08:00:00",
            "deadline"       =>"2025-04-30 08:00:00",
            "created_at"    =>"2025-04-27 08:00:00",
            "updated_at"    =>"2025-04-27 08:00:00",
        ],
        [
            "id"            =>8,
            "user_id"       =>2,
            "title"         =>"Acompanhar a apresentação e discunsão dos resultados",
            "description"   =>"Nesta tarefa o orientador deve acomponhar a apresentação e discunsão dos resultados da proposta de solução e dar o feedback ao orientando. O orientador pode sugerir testes adicionais.",
            "status"        =>"PENDENTE",
            "starting"      =>"2025-04-27 08:00:00",
            "deadline"       =>"2025-04-30 08:00:00",
            "created_at"    =>"2025-04-27 08:00:00",
            "updated_at"    =>"2025-04-27 08:00:00",
        ],
        [
            "id"            =>9,
            "user_id"       =>1,
            "title"         =>"Redação da monografia ciêntífica",
            "description"   =>"Nesta tarefa o orientando deve escrever o relatório final e submeter ao orientador. O orientando deve certificar-se que a proposta de solução é coerente com a fundamentação teórica e que a mesma está bem estruturada.",
            "status"        =>"PENDENTE",
            "starting"      =>"2025-04-27 08:00:00",
            "deadline"       =>"2025-04-30 08:00:00",
            "created_at"    =>"2025-04-27 08:00:00",
            "updated_at"    =>"2025-04-27 08:00:00",
        ],
        [
            "id"            =>10,
            "user_id"       =>2,
            "title"         =>"Acompanhar a redação da monografia ciêntífica",
            "description"   =>"Nesta tarefa o orientador deve acomponhar a escrita do relatório final e dar o feedback ao orientando. O orientador pode sugerir testes adicionais.",
            "status"        =>"PENDENTE",
            "starting"      =>"2025-04-27 08:00:00",
            "deadline"       =>"2025-04-30 08:00:00",
            "created_at"    =>"2025-04-27 08:00:00",
            "updated_at"    =>"2025-04-27 08:00:00",
        ],
        [
            "id"            =>11,
            "user_id"       =>1,
            "title"         =>"Submissão do relatório final",
            "description"   =>"Nesta tarefa o orientando deve apresentar o relatório final e discutir os resultados da proposta de solução. O orientando deve certificar-se que a proposta de solução é coerente com a fundamentação teórica e que a mesma está bem estruturada.",
            "status"        =>"PENDENTE",
            "starting"      =>"2025-04-27 08:00:00",
            "deadline"       =>"2025-04-30 08:00:00",
            "created_at"    =>"2025-04-27 08:00:00",
            "updated_at"    =>"2025-04-27 08:00:00",
        ],
        [
            "id"            =>12,
            "user_id"       =>1,
            "title"         =>"Defesa da monografia ciêntífica",
            "description"   =>"Nesta tarefa o orientando deve defender o relatório final e discutir os resultados da proposta de solução. O orientando deve certificar-se que a proposta de solução é coerente com a fundamentação teórica e que a mesma está bem estruturada.",
            "status"        =>"PENDENTE",
            "starting"      =>"2025-04-27 08:00:00",
            "deadline"       =>"2025-04-30 08:00:00",
            "created_at"    =>"2025-04-27 08:00:00",
            "updated_at"    =>"2025-04-27 08:00:00",
        ],
        [
            "id"            =>13,
            "user_id"       =>2,
            "title"         =>"Acompanhar a defesa da monografia ciêntífica",
            "description"   =>"Nesta tarefa o orientador deve acomponhar a defesa do relatório final e dar o feedback ao orientando. O orientador pode sugerir testes adicionais.",
            "status"        =>"PENDENTE",
            "starting"      =>"2025-04-27 08:00:00",
            "deadline"       =>"2025-04-30 08:00:00",
            "created_at"    =>"2025-04-27 08:00:00",
            "updated_at"    =>"2025-04-27 08:00:00",
        ],
        [
            "id"            =>14,
            "user_id"       =>1,
            "title"         =>"Submissão da versão final",
            "description"   =>"Nesta tarefa o orientando deve apresentar o relatório final e discutir os resultados da proposta de solução. O orientando deve certificar-se que a proposta de solução é coerente com a fundamentação teórica e que a mesma está bem estruturada.",
            "status"        =>"PENDENTE",
            "starting"      =>"2025-04-27 08:00:00",
            "deadline"       =>"2025-04-30 08:00:00",
            "created_at"    =>"2025-04-27 08:00:00",
            "updated_at"    =>"2025-04-27 08:00:00",
        ],

    ];
    public function run()
    {
        $this->db->disableForeignKeyChecks();
        $this->db->table($this->table)->truncate();
        $this->db->enableForeignKeyChecks();
        foreach ($this->data as $user) {
            $this->db->table($this->table)->insert($user);
        }
        
    }
}
