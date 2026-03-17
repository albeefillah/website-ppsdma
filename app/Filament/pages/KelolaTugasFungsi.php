<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use Filament\Schemas\Schema;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use App\Models\tugasFungsi;
use Filament\Notifications\Notification;



class KelolaTugasFungsi extends Page implements HasForms
{
    use InteractsWithForms;

    protected static ?string $navigationLabel = 'Tugas Fungsi';

    protected static string|\UnitEnum|null $navigationGroup = 'Profile';

    protected static ?string $slug = 'profile/tugas-fungsi';

    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-clipboard-document';

    protected static ?string $title = 'Tugas Fungsi';

    public array $data = [];

    protected string $view = 'filament.pages.kelola-tugas-fungsi';

    public function mount(): void
    {
        $record = tugasFungsi::first();

        if (! $record) {
            $record = tugasFungsi::create([
                'tugas' => '',
                'fungsi' => '',
            ]);
        }

        $this->form->fill($record->toArray());
    }

    public function form(Schema $schema): Schema
    {
            return $schema
            ->schema([
            Section::make('Data Tugas Fungsi')
                ->schema([
                    TextInput::make('tugas')->required(),
                    RichEditor::make('fungsi')->required(),
                
                ])
            ->columnSpanFull()
        ])
        ->statePath('data');

    }

    public function save()
{
    $data = $this->form->getState();

    \App\Models\TugasFungsi::updateOrCreate(
        ['id' => 1],
        $data
    );

    Notification::make()
        ->title('Tugas dan Fungsi berhasil disimpan')
        ->success()
        ->send();
}
}