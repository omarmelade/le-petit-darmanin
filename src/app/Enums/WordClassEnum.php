<?php

namespace App\Enums;

enum WordClassEnum:string {
    case Expression = "Expression";
    case Nom = "Nom";
    case Verbe = "Verbe";
    case Adjectif = "Adjectif";
    case Adverbe = "Adverbe";
    case Pronom = "Pronom";
    case Preposition = "Préposition";
    case Conjonction = "Conjonction";
    case Interjection = "Interjection";
    case Article = "Article";
    case Particule = "Particule";

    public static function values(): array
    {
        return array_column(self::cases(), 'name', 'value');
    }

}
