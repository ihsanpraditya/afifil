<?php

namespace App\Enum;

enum Gender: string
{
    case L = 'laki-laki';
    case P = 'perempuan';

    public function getLabel(): string
    {
        return match ($this) {
            self::L => 'Laki-laki',
            self::P => 'Peremppuan',
        };
    }

    public static function getChoices(): array
    {
        return array_combine(
            array_map(fn($case) => $case->getLabel(), self::cases()),
            array_map(fn($case) => $case, self::cases())
        );
    }
}
