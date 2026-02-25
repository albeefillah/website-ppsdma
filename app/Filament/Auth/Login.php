<?php

namespace App\Filament\Auth;

use Filament\Auth\Pages\Login as BaseLogin;

class Login extends BaseLogin
{
    public function getHeading(): string
    {
        return 'Login Admin PPSDM';
    }

    public function getSubheading(): ?string
    {
        return 'Silakan masuk untuk mengelola sistem';
    }
}