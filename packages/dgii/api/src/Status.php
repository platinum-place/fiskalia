<?php

namespace DGII\API;

enum Status: string
{
    use HasNameLookup;

    case state1 = 'En proceso';

    case state2 = 'En Proceso';

    case state3 = 'Aceptado';

    case state4 = 'Aceptado Condicional';

    case state5 = 'Rechazado';

    public static function pendingStatus(): array
    {
        return [self::state1, self::state2];
    }
}
