<?php

namespace App\Filament\Resources\Dashboard\CompanyProfiles\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Placeholder;
use Illuminate\Support\HtmlString;
use Illuminate\Support\Str;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Section;

class CompanyProfileForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->schema([
                 Section::make('Form Banner')
                ->schema([
            TextInput::make('judul')
                ->label('Judul')
                ->required()
                ->live(onBlur: true)
                ->afterStateUpdated(fn ($state, callable $set) =>
                    $set('slug', Str::slug($state))
                ),

            TextInput::make('video_url')
                ->label('Link Video Company Profile')
                ->url()
                ->live()
                ->placeholder('https://')
                ->helperText('Masukkan link Video')
                ->nullable(),

            Placeholder::make('video_preview')
                ->label('Preview Video')
                ->content(function ($get) {

                    $url = $get('video_url');

                    if (!$url) {
                        return 'Belum ada video';
                    }

                    $videoId = null;

                    if (preg_match('/v=([^&]+)/', $url, $matches)) {
                        $videoId = $matches[1];
                    }

                    if (!$videoId) {
                        return 'Link tidak valid';
                    }

                    return new HtmlString(
                        "<iframe width='100%' height='315'
                            src='https://www.youtube.com/embed/{$videoId}'
                            frameborder='0'
                            allowfullscreen>
                        </iframe>"
                    );
                })
                ->reactive()
                ->columnSpan(1),

            RichEditor::make('konten')
                ->label('Konten')
                ->required()
                ->columnSpanFull(),
            ])
            ->columns(2)     
            ->columnSpanFull()
        ]);

    }
}