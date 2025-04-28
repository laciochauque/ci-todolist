<?php

namespace App\Models;

use App\Enums\TaskStatusEnum;
use CodeIgniter\Model;
use DateTime;

class Task extends Model
{
    protected $table            = 'tasks';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        // "id",
        "user_id",
        "title",
        "description",
        "status",
        "starting",
        "deadline",
        // "created_at",
        // "updated_at",
    ];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    protected array $casts = [];
    protected array $castHandlers = [];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [
        "selected"
    ];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    protected function selected(array $rows)
    {
        if(is_array($rows['data'])){
            $rows["data"] = array_map(function($row){
                $row->status     = TaskStatusEnum::tryFrom($row->status);
                $row->starting   = new DateTime($row->starting);
                $row->deadline   = new DateTime($row->deadline);
                $row->created_at = new DateTime($row->created_at);
                $row->updated_at = new DateTime($row->updated_at);    
                return $row;        
            },$rows["data"]);
        }else{
            $rows["data"]->status     = TaskStatusEnum::tryFrom($rows["data"]->status);
            $rows["data"]->starting   = new DateTime($rows["data"]->starting);
            $rows["data"]->deadline   = new DateTime($rows["data"]->deadline);
            $rows["data"]->created_at = new DateTime($rows["data"]->created_at);
            $rows["data"]->updated_at = new DateTime($rows["data"]->updated_at);    
        }
        return $rows;
    } 
}
