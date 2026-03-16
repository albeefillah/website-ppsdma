<?php

namespace App\Filament\Resources\Layanan\Pelatihans\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Actions\Action;
use Filament\Forms\Components\FileUpload;
use Maatwebsite\Excel\Facades\Excel;
use ZipArchive;
use App\Imports\PelatihanImport;

class PelatihansTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image')
                ->label('Banner')
                ->defaultImageUrl(fn ($record) => $record->getBannerUrl())
                ->extraImgAttributes([
                    'class' => 'rounded-xl shadow-md object-cover'
                ])
                ->width(50),

                TextColumn::make('nama_pelatihan')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('tanggal_mulai')
                    ->date()
                    ->sortable(),

                TextColumn::make('tanggal_selesai')
                    ->date()
                    ->sortable(),

                TextColumn::make('lokasi')
                    ->searchable(),

                TextColumn::make('jumlah_peserta')
                    ->sortable(),
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
            ])
            ->toolbarActions([
                Action::make('importPelatihan')
                    ->label('Import Pelatihan')
                    ->icon('heroicon-o-arrow-up-tray')
                    ->schema([
                        FileUpload::make('file_excel')
                            ->label('File Excel')
                            ->disk('public')
                            ->directory('imports')
                            ->acceptedFileTypes([
                                'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'
                            ])
                            ->required(),

                        FileUpload::make('file_zip')
                            ->label('File ZIP Gambar')
                            ->disk('public')
                            ->directory('imports')
                            ->acceptedFileTypes(['application/zip'])
                            ->required(),
                    ])
                    ->action(function (array $data) {

                        $excelPath = storage_path('app/public/' . $data['file_excel']);
                        $zipPath = storage_path('app/public/' . $data['file_zip']);

                        // Extract ZIP
                        $zip = new ZipArchive;
                        $extractPath = storage_path('app/public/pelatihan');

                        if ($zip->open($zipPath) === TRUE) {
                            $zip->extractTo($extractPath);
                            $zip->close();
                        }

                        // Import Excel
                        Excel::import(new PelatihanImport($extractPath), $excelPath);

                    }),

                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}