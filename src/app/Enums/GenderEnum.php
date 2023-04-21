<?php

namespace App\Enums;

enum GenderEnum:string {
    case Masculin = "Masculin";
    case Feminin = "Féminin";
    case Neutre = "Neutre";

    public static function values(): array
    {
        return array_column(self::cases(), 'name', 'value');
    }

    public static function getGender(string $gender): string
    {
        return self::values()[$gender];
    }
}

