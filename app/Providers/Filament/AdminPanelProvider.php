<?php

namespace App\Providers\Filament;

use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\AuthenticateSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Pages\Dashboard;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Filament\Widgets\AccountWidget;
use Filament\Widgets\FilamentInfoWidget;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Wallacemartinss\FilamentIconPicker\FilamentIconPickerPlugin;
use App\Filament\Auth\Login;
use App\Filament\Pages\KelolaTugasFungsi;   


class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->brandName('Website PPSDM Aparatur KESDM')
            ->id('admin')
            ->path('admin')
            ->login(Login::class)
            ->renderHook(
                            'panels::body.start',
                            fn () => '
                                <style>
                                    .fi-simple-layout {
                                        background-image: url(/images/bg-login.jpg);
                                        background-size: cover;
                                        background-position: center;
                                        background-repeat: no-repeat;
                                        background-attachment: fixed;
                                    }
                                    .fi-simple-main {
                                        background-color: rgba(255, 255, 255, 0.7) !important;
                                        backdrop-filter: blur(0px);
                                        border-radius: 12px;
                                    }
                                </style>
                            '
                        )
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\Filament\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\Filament\Pages')
            ->pages([
                Dashboard::class,
                KelolaTugasFungsi::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\Filament\Widgets')
            ->widgets([
                AccountWidget::class,
                FilamentInfoWidget::class,
            ])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DispatchServingFilamentEvent::class,
            ])
            ->authMiddleware([
                Authenticate::class,
            ]);
    }

    
}
