<?php

namespace DGII\API;

enum Env: string
{
    use HasNameLookup;

    case testecf = 'Pre-Certificación';

    case certecf = 'Certificación';

    case ecf = 'Producción';
}
