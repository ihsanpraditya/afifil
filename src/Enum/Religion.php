<?php

namespace App\Enum;

enum Religion: string
{
    case ISLAM = 'islam';
    case KATOLIK = 'katolik';
    case PROTESTAN = 'protestan';
    case HINDU = 'hindu';
    case BUDDHA = 'buddha';
    case KONGHUCU = 'konghucu';

    public function getLabel(): string
    {
        return match ($this) {
            self::ISLAM => 'Islam',
            self::KATOLIK => 'Kristen Katolik',
            self::PROTESTAN => 'Kristen Protestan',
            self::HINDU => 'Hindu',
            self::BUDDHA => 'Buddha',
            self::KONGHUCU => 'Konghucu',
        };
    }

    public static function getChoices(): array
    {
        return array_combine(
            array_map(fn($case) => $case->getLabel(), self::cases()),
            array_map(fn($case) => $case->value, self::cases())
        );
    }
}
