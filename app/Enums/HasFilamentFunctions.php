<?php

namespace App\Enums;

trait HasFilamentFunctions
{
    public function getLabel(): ?string
    {
        return __('enums.'.$this->name);
    }
}
