<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use Filament\Schemas\Schema;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use App\Models\visiMisi;
use Filament\Notifications\Notification;



class KelolaVisiMisi extends Page implements HasForms
{
    use InteractsWithForms;

    protected static ?string $navigationLabel = 'Visi Misi';

    protected static string|\UnitEnum|null $navigationGroup = 'Profile';

    protected static ?string $slug = 'profile/visi-misi';

    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-light-bulb';

    protected static ?string $title = 'Visi Misi';

    public array $data = [];

    protected string $view = 'filament.pages.kelola-visi-misi';

    public function mount(): void
    {
        $record = visiMisi::first();

        if (! $record) {
            $record = visiMisi::create([
                'visi' => '',
                'misi' => '',
            ]);
        }

        $this->form->fill($record->toArray());
    }

    public function form(Schema $schema): Schema
    {
            return $schema
            ->schema([
            Section::make('Data Visi dan Misi')
                ->schema([
                    TextInput::make('visi')->required(),
                    RichEditor::make('misi')->required(),
                
                ])
            ->columnSpanFull()
        ])
        ->statePath('data');

    }

    public function save()
{
    $data = $this->form->getState();

    \App\Models\VisiMisi::updateOrCreate(
        ['id' => 1],
        $data
    );

    Notification::make()
        ->title('Visi dan Misi berhasil disimpan')
        ->success()
        ->send();
}
}