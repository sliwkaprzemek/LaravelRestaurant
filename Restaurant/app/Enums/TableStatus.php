<?php

namespace App\Enums;

enum TableStatus: string
{
    case Dostepny = 'avaliable';
    case Rezerwacja = 'pending';
    case Niedostepny = 'unavaliable';
}
