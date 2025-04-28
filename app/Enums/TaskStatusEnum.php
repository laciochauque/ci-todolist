<?php

namespace App\Enums;

enum TaskStatusEnum: string
{
    case PENDENTE = 'PENDENTE';
    case CANCELADA = 'CANCELADA';
    case VENCIDA = 'VENCIDA';
    case ADIADA = 'ADIADA';
    case EXECUTADA = 'EXECUTADA';
    case AGENDADA = 'AGENDADA';

    public function label(): string
    {
        return match ($this) {
            self::PENDENTE  => "<span class='badge bg-{$this->color()}'>Pendente</span>",
            self::CANCELADA => "<span class='badge bg-{$this->color()}'>Cancelada</span>",
            self::VENCIDA   => "<span class='badge bg-{$this->color()}'>Vencida</span>",
            self::ADIADA    => "<span class='badge bg-{$this->color()}'>Adiada</span>",
            self::EXECUTADA => "<span class='badge bg-{$this->color()}'>Executada</span>",
            self::AGENDADA  => "<span class='badge bg-{$this->color()}'>Agendada</span>",
        };
    }

    public function color(): string
    {
        return match ($this) {
            self::PENDENTE  => "warning",
            self::CANCELADA => "danger",
            self::VENCIDA   => "danger",
            self::ADIADA    => "info",
            self::EXECUTADA => "success",
            self::AGENDADA  => "primary",
        };
    }

    public function icon(): string
    {
        return match ($this) {
            self::PENDENTE  => "fa fa-clock",
            self::CANCELADA => "fa fa-ban",
            self::VENCIDA   => "fa fa-exclamation-triangle",
            self::ADIADA    => "fa fa-calendar-alt",
            self::EXECUTADA => "fa fa-check",
            self::AGENDADA  => "fa fa-calendar-check",
        };
    }

}