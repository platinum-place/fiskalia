<?php

namespace App\Enums;

use Exception;

trait HasFilamentFunctions
{
    public function getLabel(): ?string
    {
        return __('enums.' . $this->name);
    }
}
