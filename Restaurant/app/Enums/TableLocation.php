<?php

namespace App\Enums;

enum TableLocation: string
{
    case Brzegowy = 'front';
    case Srodkowy = 'inside';
    case Zewnetrzny = 'outside';
}
