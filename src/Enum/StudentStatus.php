<?php

namespace App\Enum;

enum StudentStatus: string
{
    case ACTIVE = 'aktif';
    case INACTIVE = 'nonaktif';
    case GRADUATED = 'lulus';
    case DROPPED_OUT = 'keluar';

    public function getLabel(): string
    {
        return match ($this) {
            self::ACTIVE => 'Aktif',
            self::INACTIVE => 'Tidak Aktif',
            self::GRADUATED => 'Lulus',
            self::DROPPED_OUT => 'Keluar',
        };
    }

    public static function getChoices(): array
    {
        return array_combine(
            array_map(fn($case) => $case->getLabel(), self::cases()),
            self::cases()
        );
    }
}
